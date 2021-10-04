<x-app-layout>
    @include('admin.users._header')

    <x-main-wrapper>
        <livewire:admin.users-form :user="$user" />
    </x-main-wrapper>
</x-app-layout>
