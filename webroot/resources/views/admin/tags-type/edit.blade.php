<x-app-layout>
    @include('admin.users._header')

    <x-main-wrapper>
        <livewire:admin.tags-type-form :tagsType="$tagsType" />
    </x-main-wrapper>
</x-app-layout>
