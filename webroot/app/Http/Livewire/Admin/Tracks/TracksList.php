<?php

namespace App\Http\Livewire\Admin\Tracks;

use App\Models\Track;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class TracksList
 * @package App\Http\Livewire\Admin\Tracks
 */
class TracksList extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.admin.tracks.tracks-list', ['tracks' => $this->getTracks()]);
    }

    private function getTracks()
    {
        return Track::query()
            ->paginate();
    }
}
