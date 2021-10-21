<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use App\Models\TagsType;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

/**
 * Class TagForm
 * @package App\Http\Livewire\Admin
 */
class TagForm extends Component
{
    /** @var Tag $tag */
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
        $data['tag']['slug'] = Str::slug($data['tag']['name']);
        $data['tag']['is_live'] = $data['tag']['is_live'] ?? 0;

        if ($this->tag->id) {
            $this->tag->update($data['tag']);
        } else {
            /** @var Tag $tag */
            $tag = Tag::query()->create($data['tag']);
            $this->tag = $tag;
        }

        $this->emit('showNotification', 'Tag type has been saved.');
    }

    public function rules(): array
    {
        return [
            'tag.name'         => 'required|string|max:50',
            'tag.tags_type_id' => 'required|integer|exists:tags_types,id',
            'tag.is_live'      => 'sometimes|nullable|boolean',
            'tag.slug'         => 'nullable|string|max:50',
        ];
    }
}
