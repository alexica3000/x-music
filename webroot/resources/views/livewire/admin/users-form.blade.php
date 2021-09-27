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
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                type="text"
                placeholder="Name"
            />
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
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                type="email"
                placeholder="Email"
            />
        </div>
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Email confirmation
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                type="email"
                placeholder="Confirm Email"
            />
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
                <input type="checkbox" class="form-checkbox text-indigo-600">
            </label>
        </div>

        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Admin
            </label>
        </div>
        <div class="col-span-2">
            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox text-indigo-600">
            </label>
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
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                type="email"
                placeholder="Password"
            />
        </div>
        <div>
            <label class="block mb-2 text-sm font-bold text-gray-700">
                Password confirmation
            </label>
        </div>
        <div class="col-span-2">
            <input
                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                type="password"
                placeholder="Confirm Email"
            />
        </div>
        <div class="col-span-3 m-3">
            <hr class="border-1 border-gray-200">
        </div>

        <div class="col-span-3 text-center border-1 border-red-800 mt-5">
            <button
                class="w-1/4 px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="button"
            >
                Create
            </button>

            <a
                class="w-1/4 px-4 py-2 ml-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-yellow-700 focus:outline-none focus:shadow-outline inline-flex justify-center"
                href="{{ route('users.index') }}"
            >
                Cancel
            </a>
        </div>
    </div>
</div>
