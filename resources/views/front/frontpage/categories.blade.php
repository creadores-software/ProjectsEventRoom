<x-front-layout>
    <h2 class="section-title text-dark mt-1 mb-4">Categorías</h2>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="service-box text-center mt-5">
                    <img class="service-box-icon" src="assets/images/branding.svg">
                    <h3 class="service-box-title text-dark mt-4 ">
                        <a class="link" href="{{ route('front.frontpage.events', [$category->id]) }}">
                            {{ $category->name }}</a> <br>
                        [{{ $category->events->count() }}]
                    </h3>
                    <p class="service-box-text mt-3 mb-0">
                        {{-- TODO --}}
                        {{ $category->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-front-layout>
