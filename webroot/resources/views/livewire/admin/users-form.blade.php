<div class="w-3/4 mx-auto">
    <h1 class="font-bold text-gray-600 text-xl">Add user</h1>

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
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('user.email') border-red-500 @enderror"
                type="email"
                placeholder="Email"
                name="email"
                wire:model="user.email"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('user.email') {{ $message }} @enderror</p>
        </div>
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Email confirmation
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('user.email_confirmation') border-red-500 @enderror"
                type="email"
                placeholder="Confirm Email"
                name="email_confirmation"
                wire:model="user.email_confirmation"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('user.email_confirmation') {{ $message }} @enderror</p>
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
                    class="form-checkbox text-indigo-600 @error('user.email_confirmation') border-red-500 @enderror"
                    name="active"
                    wire:model="user.is_active"
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
                    class="form-checkbox text-indigo-600 @error('user.is_admin') border-red-500 @enderror"
                    name="admin"
                    wire:model="user.is_admin"
                >
            </label>
            <p class="text-xs italic text-red-500 mt-1">@error('user.is_admin') {{ $message }} @enderror</p>
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
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                type="password"
                placeholder="Password"
                name="password"
                wire:model="password"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('password') {{ $message }} @enderror</p>
        </div>
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Password confirmation
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('password_confirmation') border-red-500 @enderror"
                type="password"
                placeholder="Confirm Email"
                name="password_confirmation"
                wire:model="password_confirmation"
            />
            <p class="text-xs italic text-red-500 mt-1">@error('password_confirmation') {{ $message }} @enderror</p>
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
                Create
            </button>

            <a
                class="w-1/4 px-4 py-2 ml-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-yellow-700 focus:outline-none focus:shadow-outline inline-flex justify-center"
                href="{{ route('admin.users.index') }}"
            >
                Cancel
            </a>
        </div>
    </div>
</div>
