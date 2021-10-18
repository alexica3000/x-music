<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use App\Models\TagsType;
use Illuminate\View\View;
use Livewire\Component;

/**
 * Class TagForm
 * @package App\Http\Livewire\Admin
 */
class TagForm extends Component
{
    public Tag $tag;

    public function render(): View
    {
        return view('livewire.admin.tag-form', ['types' => TagsType::query()->get()]);
    }

    /**
     * @param Tag $tag
     */
    public function mount(Tag $tag): void
    {
        $this->tag = $tag;
    }

    public function save(): void
    {
        $data = $this->validate();

        $this->tag->id ? $this->tag->update($data['tag']) : Tag::query()->create($data['tag']);
        $this->emit('showNotification', 'Tag type has been saved.');
    }

    public function rules(): array
    {
        return [
            'tag.name'         => 'required|string|max:50',
            'tag.tags_type_id' => 'required|integer|exists:tags_types,id',
//            'tag.live'         => 'sometimes|accepted',
            'tag.slug'         => 'nullable|string|max:50',
        ];
    }
}
