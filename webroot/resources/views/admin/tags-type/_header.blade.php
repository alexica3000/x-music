<x-slot name="header">
    <h2 class="flex font-semibold text-xl text-gray-800 leading-tight">
        <div class="mr-2">
            {{ __('Tags Types') }}
        </div>
        <div class="h-6 w-6">
            <a href="{{ route('admin.tags-type.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
    </h2>
</x-slot>
