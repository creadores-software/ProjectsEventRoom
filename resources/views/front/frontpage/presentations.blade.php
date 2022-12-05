<x-front-layout>
    <span class="pre-title text-dark small position-relative fw-bold">Presentaciones</span>
    <h2 class="section-title text-dark mt-1 mb-4">{{ $event->name }} <br>({{ $version->name }})</h2>

    <div class="row">
        @foreach ($presentations as $presentation)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-box text-center mt-5">
                    <img class="service-box-icon" src="assets/images/branding.svg">
                    <h3 class="service-box-title text-dark mt-4 ">
                        <a class="link" href="xxx">
                            {{ $presentation->name }}</a>
                    </h3>
                    <p class="service-box-text mt-3 mb-0">
                        {{-- TODO --}}
                        {{ $presentation->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div> 
</x-front-layout>