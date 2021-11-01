<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use App\Models\TagsType;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
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

    public string $search;
    public string $tagTypeId;
    public string $active;

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.admin.tags-list', [
            'tags' => $this->getTags(),
            'tagsTypes' => TagsType::query()->pluck('name', 'id')->toArray(),
        ]);
    }

    public function mount()
    {
        $this->resetValues();
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getTags(): LengthAwarePaginator
    {
        return Tag::query()
            ->when($this->search, fn(Builder $query) => $query->where('name', 'like', "%$this->search%"))
            ->when($this->tagTypeId, function(Builder $query) {
                $query->whereHas('tagsType', function(Builder $query) {
                    $query->where('id', $this->tagTypeId);
                });
            })
            ->when($this->active != null, fn(Builder $query) => $query->where('is_live', $this->active) )
            ->with('tagsType')
            ->orderBy('name')
            ->paginate();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function resetValues(): void
    {
        $this->search = '';
        $this->tagTypeId = '';
        $this->active = '';
    }
}
