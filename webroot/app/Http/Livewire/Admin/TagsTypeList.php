<?php

namespace App\Http\Livewire\Admin;

use App\Models\TagsType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

/**
 * Class TagsTypeList
 * @package App\Http\Livewire\Admin
 */
class TagsTypeList extends Component
{
    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.admin.tags-type-list', ['tagTypes' => $this->getTagsTypes()]);
    }

    /**
     * @return Collection
     */
    public function getTagsTypes(): Collection
    {
        return TagsType::query()
            ->get();
    }
}
