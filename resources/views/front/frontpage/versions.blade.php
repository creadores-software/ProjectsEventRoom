<ul>
    @foreach ($versions as $version)
        <li>
            <a href="{{ route('front.frontpage.presentations', [$categoryId, $eventId, $version->id]) }}">
                {{ $version->name }} [{{ $version->presentations->count() }}]
            </a>
        </li>
    @endforeach
</ul>