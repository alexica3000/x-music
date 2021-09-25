<x-app-layout>
    @include('admin.users._header')

    <x-main-wrapper>
        <livewire:admin.users-form :user="new \App\Models\User()" />
    </x-main-wrapper>
</x-app-layout>
