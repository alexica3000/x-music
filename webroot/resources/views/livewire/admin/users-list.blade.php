@php
    /** @var \App\Models\User $user */
@endphp

<div class="overflow-x-auto">
    <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full mx-4">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Icon</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-center">Email</th>
                            <th class="py-3 px-6 text-center">Created At</th>
                            <th class="py-3 px-6 text-center">Role</th>
                            <th class="py-3 px-6 text-center">Active</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($users as $user)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">

                                        </div>
                                        <span class="font-medium">React Project</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <span>{{ $user->name }}</span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{ $user->email }}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{ $user->created_at->format('d M Y') }}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{ $user->role }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if($user->is_active)
                                        <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="p-6">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
