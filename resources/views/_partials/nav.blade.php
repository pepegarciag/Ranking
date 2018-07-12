<nav class="bg-purple-dark p-6 text-white">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class=" text-white no-underline text-lg font-semibold">Ranking</a>
            <a href="{{ route('scores.create') }}" class="no-underline bg-transparent hover:bg-purple-darker text-white font-semibold py-2 px-4 border border-white hover:border-transparent rounded">
                {{ __('score.add') }}
            </a>
            {{-- We may define a stack here to push more navigation items. But we need to wrap in separate divs --}}
        </div>
    </div>
</nav>