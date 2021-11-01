<?php

namespace App\Http\Livewire\Admin\Tracks;

use App\Models\Track;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
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

    public string $search;
    public string $active;

    public function mount()
    {
        $this->resetValues();
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.admin.tracks.tracks-list', [
            'tracks' => $this->getTracks(),
        ]);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getTracks(): LengthAwarePaginator
    {
        return Track::query()
            ->when($this->search, fn(Builder $query) => $query->where('name', 'like', "%$this->search%"))
            ->when($this->active != null, fn(Builder $query) => $query->where('is_live', $this->active))
            ->paginate();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function resetValues(): void
    {
        $this->search = '';
        $this->active = '';
    }
}
