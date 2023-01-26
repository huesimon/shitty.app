<div>
    <div
        class="h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
        <img src="{{ asset($post->photo) }}"
            alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
            class="h-full w-full object-contain">
    </div>
    <div class="flex flex-row justify-between">
        <div>
            <h3 class="mt-6 text-sm text-gray-500">
                <a href={{ route('posts_by_number_plate', $post->number_plate) }}>
                    {{ $post->number_plate }}
                </a>
            </h3>
            <p class="text-base font-semibold text-gray-900"> {{$post->title}} </p>
        </div>
        <div wire:click='increment'>
            <h3 class="mt-6 text-4xl text-gray-500">
                {{$post->votes}} 💩
            </h3>
        </div>
    </div>
</div>
