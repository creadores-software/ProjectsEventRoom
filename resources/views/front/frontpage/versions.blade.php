<x-front-layout>
    <span class="pre-title text-dark small position-relative fw-bold">Versiones</span>
    <h2 class="section-title text-dark mt-1 mb-4">{{ $event->name }}</h2>

    <div class="row">
        @foreach ($versions as $version)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-box text-center mt-5">
                    <img class="service-box-icon" src="assets/images/branding.svg">
                    <h3 class="service-box-title text-dark mt-4 ">
                        <a class="link" href="{{ route('front.frontpage.presentations', [$category->id, $event->id, $version->id]) }}">
                            {{ $version->name }}</a> <br>
                        [{{ $version->presentations->count() }}]
                    </h3>
                    <p class="service-box-text mt-3 mb-0">
                        {{-- TODO --}}
                        {{ $version->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>    
</x-front-layout>
