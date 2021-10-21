@php
    /** @var \App\Models\TagsType $type */
@endphp

<div class="overflow-x-auto">
    <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full mx-4">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-2 px-6 text-left">Name</th>
                        <th class="py-2 px-6 text-center">Sort</th>
                        <th class="py-2 px-6 text-center">Score</th>
                        <th class="py-3 px-6 text-center">Edit</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    @foreach($tagTypes as $type)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-2 px-6 text-left">
                                <span>{{ $type->name }}</span>
                            </td>
                            <td class="py-2 px-6 text-center">
                                {{ $type->sort }}
                            </td>
                            <td class="py-2 px-6 text-center">
                                {{ $type->score }}
                            </td>
                            <td class="py-2 px-6 text-center">
                                <div class="w-4 m-auto transform hover:text-purple-500 hover:scale-110">
                                    <a href="{{ route('admin.tags-type.edit', $type) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
