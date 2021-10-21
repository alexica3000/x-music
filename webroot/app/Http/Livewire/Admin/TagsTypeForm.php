<?php

namespace App\Http\Livewire\Admin;

use App\Models\TagsType;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

/**
 * Class TagsTypeForm
 * @package App\Http\Livewire\Admin
 */
class TagsTypeForm extends Component
{
    public TagsType $tagsType;

    public array $state = [
        'name'  => '',
        'score' => '',
        'sort'  => '',
    ];

    /**
     * @param TagsType $tagsType
     */
    public function mount(TagsType $tagsType): void
    {
        $this->tagsType = $tagsType;
        $this->state['name'] = $tagsType->name;
        $this->state['score'] = $tagsType->score;
        $this->state['sort'] = $tagsType->sort;
    }

    public function render()
    {
        return view('livewire.admin.tags-type-form');
    }

    /**
     * @param $propertyName
     * @throws ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(): void
    {
        $this->validate();

        $data = [
            'name'  => $this->state['name'],
            'score' => $this->state['score'],
            'sort'  => $this->state['sort'],
        ];

        $this->tagsType->id ? $this->tagsType->update($data) : TagsType::query()->create($data);
        $this->emit('showNotification', 'Tag type has been saved.');
    }

    public function rules(): array
    {
        return [
            'state.name'  => 'required|string|max:255',
            'state.score' => 'required|integer',
            'state.sort'  => 'sometimes|required|integer',
        ];
    }
}
