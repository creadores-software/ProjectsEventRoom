<ul>
    @foreach ($presentations as $presentation)
        <li>
            <a href="xxx">
                {{ $presentation->name }}
            </a>
        </li>
    @endforeach
</ul>