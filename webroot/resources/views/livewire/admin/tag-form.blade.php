<div class="w-3/4 mx-auto">
    <div class="flex items-center">
        <h1 class="font-bold text-gray-600 text-xl">
            {{ $tag->id ? 'Edit tag' : 'Add tag'  }}
        </h1>
    </div>

    <div class="grid grid-cols-3 gap-2 mt-3">
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Name
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('tag.name') border-red-500 @enderror"
                type="text"
                placeholder="Name"
                name="name"
                wire:model="tag.name"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('tag.name') {{ $message }} @enderror</p>
        </div>

        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Slug
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('tag.slug') border-red-500 @enderror"
                type="text"
                placeholder="Slug"
                wire:model="tag.slug"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('tag.slug') {{ $message }} @enderror</p>
        </div>

        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Type
            </label>
        </div>
        <div class="col-span-2">
            <label>
                <select class="form-select block w-full rounded shadow-md border-gray-400 h-10" wire:model="tag.tags_type_id">
                    <option value="" disabled>Choose Type</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </label>
            <p class="text-xs italic text-red-500 mt-1">@error('tag.tags_type_id') {{ $message }} @enderror</p>
        </div>

        <div class="col-span-3 text-center border-1 border-red-800 mt-5">
            <button
                class="w-1/4 px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="button"
                wire:click="save"
            >
                {{ $tag->id ? 'Update' : 'Create' }}
            </button>

            <a
                class="w-1/4 px-4 py-2 ml-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-yellow-700 focus:outline-none focus:shadow-outline inline-flex justify-center"
                href="{{ route('admin.tags.index') }}"
            >
                Cancel
            </a>
        </div>

    </div>
</div>
