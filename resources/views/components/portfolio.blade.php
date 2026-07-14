<div class="fullwidth-section"> <!-- **Full-width-section Starts Here** -->
    <div class="container">
        <div class="main-title animate" data-animation="pullDown" data-delay="100">
            <h2 class="aligncenter" style="color:#a81c51;font-size:2.5rem;"> {{ trans('welcome.velina') }}</h2>
            <p style="font-size:1.4rem">  {{ trans('welcome.selected') }}</p>
        </div>
    </div>
    <div class="dt-sc-sorting-container">
        <a data-filter="*" href="#" title = "{{ count($artworks) }}" class="dt-sc-tooltip-top active-sort type1 dt-sc-button animate" data-animation="fadeIn" data-delay="100">{{ trans('welcome.all') }}</a>
        
        @foreach($categories as $category)
            <a data-filter=".{{ $category->class }}" href="#" title = "{{ count($category->selected_artworks) }}" class="dt-sc-tooltip-top type1 dt-sc-button animate" data-animation="fadeIn" data-delay="200">{{ $category->name() }}</a>
        @endforeach
        
    </div>
    <div class="portfolio-fullwidth">
        <div class="portfolio-grid">
            <div class="dt-sc-portfolio-container isotope">
                @foreach($artworks as $artwork)
                <div class="portfolio {{ $artwork->category->class }} still-life dt-sc-one-fourth">
                    <figure>
                        <img src="{{ asset('images/artwork') }}/{{ $artwork->image }}" alt="" title="" loading="lazy">
                        <figcaption>
                            <div class="portfolio-detail">
                                <div class="views">
                                    <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="{{ asset('images/artwork') }}/{{ $artwork->image }}"></a><span>{{ count($artwork->category->artworks) }}</span>
                                </div>
                                <div class="portfolio-title">
                                    <h5 style="color:white">{{ $artwork->name() }}</a></h5>
                                    <p style="color:white">{{ $artwork->description() }}</p>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                 @endforeach
            </div>
           
        </div>
    </div>
</div>