@php
    /** @var \App\Models\Tag $tag */
@endphp

<div class="overflow-x-auto">
    <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full mx-4">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-2 px-6 text-left">Name</th>
                            <th class="py-2 px-6 text-center">Slug</th>
                            <th class="py-2 px-6 text-center">Type</th>
                            <th class="py-2 px-6 text-center">Edit</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($tags as $tag)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-2 px-6 text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                    </svg>

                                    <span>{{ $tag->name }}</span>
                                </td>
                                <td class="py-2 px-6 text-left">
                                    {{ $tag->slug }}
                                </td>
                                <td class="py-2 px-6 text-left">
                                    {{ $tag->tagsType->name }}
                                </td>
                                <td class="py-2 px-6 text-center">
                                    <div class="w-4 m-auto transform hover:text-purple-500 hover:scale-110">
                                        <a href="{{ route('admin.tags.edit', $tag) }}">
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

                <div class="p-6">
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
