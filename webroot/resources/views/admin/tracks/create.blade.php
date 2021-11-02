<x-app-layout>
    @include('admin.tracks._header')

    <x-main-wrapper>
        <livewire:admin.tracks.track-form :track="new \App\Models\Track()" />
    </x-main-wrapper>
</x-app-layout>
