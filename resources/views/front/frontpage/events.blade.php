<ul>
    @foreach ($events as $event)
        <li>
            <a href="{{ route('front.frontpage.versions', [$categoryId, $event->id]) }}">
                {{ $event->name }} [{{ $event->versions->count() }}]
            </a>
        </li>
    @endforeach
</ul>