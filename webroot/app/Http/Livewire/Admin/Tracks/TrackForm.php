<?php

namespace App\Http\Livewire\Admin\Tracks;

use App\Models\Track;
use Livewire\Component;

/**
 * Class TrackForm
 * @package App\Http\Livewire\Admin\Tracks
 */
class TrackForm extends Component
{
    /** @var Track $track */
    public Track $track;
    public bool $confirmingTrackDeletion = false;

    public function render()
    {
        return view('livewire.admin.tracks.track-form');
    }

    /**
     * @param Track $track
     */
    public function mount(Track $track): void
    {
        $this->track = $track;
    }

    public function save(): void
    {
        $data = $this->validate();

        if ($this->track->id) {
            $this->track->update($data['track']);
        } else {
            /** @var Track $track */
            $track = Track::query()->create($data['track']);
            $this->track = $track;
        }

        $this->emit('showNotification', 'Track has been saved.');
    }

    public function rules(): array
    {
        return [
            'name'                 => ['required', 'string', 'max:150'],
            'file_mp3'             => 'nullable|file|mimes:mp3|max:100000',
            'length'               => ['nullable', 'string', 'regex:/^([0-5]?\d):[0-5]\d$/i'],
            'bpm'                  => 'nullable|integer|min:1|max: 25000',
        ];
    }

    public function deleteConfirm(): void
    {
        $this->confirmingTrackDeletion = true;
    }

    public function deleteTrack(Track $track)
    {
        $track->delete();

        return redirect()->route('admin.tracks.index');
    }
}
