@php
    /** @var \App\Models\Tag $tag */
@endphp

<div class="overflow-x-auto">
    <div class="flex m-3">
        <div class="relative text-gray-600">
            <input
                type="search"
                placeholder="Search"
                class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none"
                wire:model="search"
            >
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                  <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                </svg>
            </button>
        </div>
        <div class="ml-5 w-1/6">
            <label>
                <select class="form-select block w-full rounded shadow-md border-gray-400 h-10" wire:model="tagTypeId">
                    <option value="">Type</option>
                    @foreach($tagsTypes as $index => $type)
                        <option value="{{ $index }}">{{ $type }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <div class="ml-5 w-1/6">
            <label>
                <select class="form-select block w-full rounded shadow-md border-gray-400 h-10" wire:model="active">
                    <option value="">Is live</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </label>
        </div>
        <div class="ml-5 w-1/6">
            <label>
                <button
                    type="button"
                    class="block w-full rounded shadow-md border-green-400 h-10 bg-green-400 hover:bg-green-300 text-white"
                    wire:click="resetValues()"
                >Reset</button>
            </label>
        </div>
    </div>

    <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full mx-4">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-2 px-6 text-left">Name</th>
                            <th class="py-2 px-6 text-center">Slug</th>
                            <th class="py-2 px-6 text-center">Type</th>
                            <th class="py-2 px-6 text-center">Live</th>
                            <th class="py-2 px-6 text-center">Count</th>
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
                                <td class="py-2 px-6 text-left">
                                    @if($tag->is_live)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    @endif
                                </td>
                                <td class="py-2 px-6 text-left">
                                    nr tracks...
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
