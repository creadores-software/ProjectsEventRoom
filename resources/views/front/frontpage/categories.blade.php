<ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('front.frontpage.events', [$category->id]) }}">
                {{ $category->name }} [{{ $category->events->count() }}]
            </a>
        </li>
    @endforeach
</ul>