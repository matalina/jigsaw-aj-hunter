@extends('_layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.css"/>
@endsection

@section('body')
    

    <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($posts->where('featured', true) as $featuredPost)
                <li class="w-full mb-6 glide__slide">
                    @if ($featuredPost->cover_image)
                        <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
                    @endif

                    <p class="text-gray-700 font-medium my-2">
                        {{ $featuredPost->getDate()->format('F j, Y') }}
                    </p>

                    <h2 class="text-3xl mt-0">
                        <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                            {{ $featuredPost->title }}
                        </a>
                    </h2>

                    <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

                    <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                        Read
                    </a>
                </li>
            @endforeach
          </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
          </div>
      </div>
    </div>
    @include('_components.newsletter-signup')

    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@stop

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.js"></script>
    <script>
        new Glide('.glide', {
            type: 'carousel',
            perView: 3,
            breakpoints: {
                600: { perView: 1 },
                1200: { perView: 3 }
            }
        }).mount();
    </script>
@endsection
