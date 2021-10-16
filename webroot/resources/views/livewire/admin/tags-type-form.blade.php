<div class="w-3/4 mx-auto">
    <div class="flex items-center">
        <h1 class="font-bold text-gray-600 text-xl">
            {{ $tagsType->id ? 'Edit type' : 'Add type'  }}
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
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('state.name') border-red-500 @enderror"
                type="text"
                placeholder="Name"
                name="name"
                wire:model="state.name"
                value="test"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('state.name') {{ $message }} @enderror</p>
        </div>

        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Sort
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('state.sort') border-red-500 @enderror"
                type="text"
                placeholder="Sort"
                wire:model="state.sort"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('state.sort') {{ $message }} @enderror</p>
        </div>
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Score
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('state.score') border-red-500 @enderror"
                type="email"
                placeholder="Score"
                name="score"
                wire:model="state.score"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('state.score') {{ $message }} @enderror</p>
        </div>

        <div class="col-span-3 text-center border-1 border-red-800 mt-5">
            <button
                class="w-1/4 px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="button"
                wire:click="save"
            >
                {{ $this->tagsType->id ? 'Update' : 'Create' }}
            </button>

            <a
                class="w-1/4 px-4 py-2 ml-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-yellow-700 focus:outline-none focus:shadow-outline inline-flex justify-center"
                href="{{ route('admin.tags-type.index') }}"
            >
                Cancel
            </a>
        </div>

    </div>
</div>
