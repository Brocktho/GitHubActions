<nav class="fixed flex flex-row w-full h-16 justify-around items-center z-10 bg-transparent top-0 left-0">
    <div id="logo" class="w-1/3">
        new
    </div>
    <ul class="flex flex-row w-1/2 justify-around">
        @foreach($links as $link)
        <li>
            <a href="{{ $link['path'] }}" class="no-underline hover:underline">
                {{ $link["text"] }}
            </a>
        </li>
        @endforeach
    </ul>
</nav>