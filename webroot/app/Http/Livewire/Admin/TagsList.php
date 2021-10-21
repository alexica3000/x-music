<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class TagsList
 * @package App\Http\Livewire\Admin
 */
class TagsList extends Component
{
    use WithPagination;

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.admin.tags-list', ['tags' => $this->getTags()]);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getTags(): LengthAwarePaginator
    {
        return Tag::query()
            ->with('tagsType')
            ->orderBy('name')
            ->paginate();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
