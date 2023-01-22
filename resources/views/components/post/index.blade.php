<x-layouts.base>

    @foreach ($posts as $post)
        <div class="group relative">
            <div
                class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                <img src="{{ asset($post->photo) }}"
                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                    class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    {{ $post->number_plate }}
                </a>
            </h3>
            <p class="text-base font-semibold text-gray-900"> {{$post->title}} </p>
        </div>
    @endforeach


    {{-- footerslot --}}
    <x-slot name="footer">
        <div class="text-sm text-gray-500">
            <a href="{{ route('posts.create') }}" class="text-sm text-gray-700 underline">Create Post</a>
        </div>
    </x-slot>
</x-layouts.base>
