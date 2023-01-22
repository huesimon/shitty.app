<x-layouts.base>

    @foreach ($posts as $post)
        <livewire:post.card :post="$post" />
    @endforeach


    {{-- footerslot --}}
    <x-slot name="footer">
        <div class="text-sm text-gray-500">
            <a href="{{ route('posts.create') }}" class="text-sm text-gray-700 underline">Create Post</a>
        </div>
    </x-slot>
</x-layouts.base>
