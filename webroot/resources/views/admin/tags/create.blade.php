<x-app-layout>
    @include('admin.users._header')

    <x-main-wrapper>
        <livewire:admin.tag-form :tag="new \App\Models\Tag()" />
    </x-main-wrapper>
</x-app-layout>
