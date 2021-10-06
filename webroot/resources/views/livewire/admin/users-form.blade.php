<div class="w-3/4 mx-auto">
    <div class="flex items-center">
        <h1 class="font-bold text-gray-600 text-xl">
            {{ $user->id ? 'Edit user' : 'Add user'  }}
        </h1>
        @if($user->id)
            <div class="ml-3" role="button" wire:click="deleteConfirm({{ $user->id }})">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </div>
        @endif
    </div>

    <div class="grid grid-cols-3 gap-2 mt-3">
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Name
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('user.name') border-red-500 @enderror"
                type="text"
                placeholder="Name"
                name="name"
                wire:model="user.name"
                value="test"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('user.name') {{ $message }} @enderror</p>
        </div>

        <div class="col-span-3 m-3">
            <hr class="border-1 border-gray-200">
        </div>

        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Email
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('state.email') border-red-500 @enderror"
                type="email"
                placeholder="Email"
                wire:model="state.email"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('state.email') {{ $message }} @enderror</p>
        </div>
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Email confirmation
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('state.email_confirmation') border-red-500 @enderror"
                type="email"
                placeholder="Confirm Email"
                name="email_confirmation"
                wire:model="state.email_confirmation"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('state.email_confirmation') {{ $message }} @enderror</p>
        </div>
        <div class="col-span-3 m-3">
            <hr class="border-1 border-gray-200">
        </div>

        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Active
            </label>
        </div>
        <div class="col-span-2">
            <label class="inline-flex items-center">
                <input
                    type="checkbox"
                    class="form-checkbox text-indigo-600 @error('user.is_active') border-red-500 @enderror"
                    name="active"
                    wire:model="user.is_active"
                    {{ $user->is_active ? 'checked' : '' }}
                >
            </label>
            <p class="text-xs italic text-red-500 mt-1">@error('user.is_active') {{ $message }} @enderror</p>
        </div>

        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Admin
            </label>
        </div>
        <div class="col-span-2">
            <label class="inline-flex items-center">
                <input
                    type="checkbox"
                    class="form-checkbox text-indigo-600 @error('state.is_admin') border-red-500 @enderror"
                    name="admin"
                    wire:model="state.is_admin"
                >
            </label>
            <p class="text-xs italic text-red-500 mt-1">@error('state.is_admin') {{ $message }} @enderror</p>
        </div>

        <div class="col-span-3 m-3">
            <hr class="border-1 border-gray-200">
        </div>

        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Password
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('state.password') border-red-500 @enderror"
                type="password"
                placeholder="Password"
                name="password"
                wire:model="state.password"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('state.password') {{ $message }} @enderror</p>
        </div>
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Password confirmation
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('state.password_confirmation') border-red-500 @enderror"
                type="password"
                placeholder="Confirm Email"
                name="password_confirmation"
                wire:model="state.password_confirmation"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('state.password_confirmation') {{ $message }} @enderror</p>
        </div>
        <div class="col-span-3 m-3">
            <hr class="border-1 border-gray-200">
        </div>

        <div class="col-span-3 text-center border-1 border-red-800 mt-5">
            <button
                class="w-1/4 px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="button"
                wire:click="save"
            >
                {{ $this->user->id ? 'Update' : 'Create' }}
            </button>

            <a
                class="w-1/4 px-4 py-2 ml-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-yellow-700 focus:outline-none focus:shadow-outline inline-flex justify-center"
                href="{{ route('admin.users.index') }}"
            >
                Cancel
            </a>
        </div>
    </div>

    <x-jet-confirmation-modal wire:model="confirmingUserDeletion">
        <x-slot name="title">
            Delete User
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete this user? Once your account is deleted, all of its resources and data will be permanently deleted.
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteUser({{ $user->id }})" wire:loading.attr="disabled">
                Delete User
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
