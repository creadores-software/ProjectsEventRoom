<x-front-layout>
    <span class="pre-title text-dark small position-relative fw-bold">Eventos</span>
    <h2 class="section-title text-dark mt-1 mb-4">{{ $category->name }}</h2>

    <div class="row">
        @foreach ($events as $event)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-box text-center mt-5">
                    <img class="service-box-icon" src="assets/images/branding.svg">
                    <h3 class="service-box-title text-dark mt-4 ">
                        <a class="link" href="{{ route('front.frontpage.versions', [$category->id, $event->id]) }}">
                            {{ $event->name }}</a> <br>
                        [{{ $event->versions->count() }}]
                    </h3>
                    <p class="service-box-text mt-3 mb-0">
                        {{-- TODO --}}
                        {{ $event->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-front-layout>