  <section>
    <div class="fullwidth-section">
        {{-- Pastel --}}
        <div class="blog-section">
            <article class="blog-entry">
                <div class="entry-thumb">
                    <ul class="blog-slider">
                        @foreach($pastel_artworks as $pastel_artwork)
                            <li style="min-height:500px;display:flex:justify-content:center;">
                                <img 
                                    src="{{ asset('images/artwork') }}/{{ $pastel_artwork->image }}" 
                                    alt="" 
                                    title="" 
                                    style="width: auto;height:500px;margin:0 auto;" 
                                    loading="lazy"
                                />
                            </li>
                        @endforeach
                    </ul>
                </div> 
                <div class="entry-details">
                    <div class="entry-title">
                        <h3><a href="{{ route('gallery','pastel') }}">{{ $pastel_artworks[0]->category->name() }}</a></h3>
                    </div>
                    <div class="entry-body">
                        <p>{{ trans('welcome.pastel-description') }}</p>
                    </div>
                    <a class="type1 dt-sc-button small" href="{{ route('gallery','pastel') }}">{{ trans('welcome.view-here') }}<i class="fa fa-angle-right"></i></a>
                </div>                   	
            </article>
        </div>
        
        {{-- Akvarel --}}
        <div class="blog-section">
            <article class="blog-entry type2">
                <div class="entry-details">
                    <div class="entry-title">
                        <h3><a href="{{ route('gallery','akvarel') }}">{{ $akvarel_artworks[0]->category->name() }}</a></h3>
                    </div>
                    <div class="entry-body">
                        <p>{{ trans('welcome.akvarel-description') }}</p>
                    </div>
                    <a class="type1 dt-sc-button small" href="{{ route('gallery','akvarel') }}">{{ trans('welcome.view-here') }}<i class="fa fa-angle-right"></i></a>
                </div>                   	
                <div class="entry-thumb">
                    <ul class="blog-slider">
                        @foreach($akvarel_artworks as $akvarel_artwork)
                        <li style="min-height:500px;display:flex:justify-content:center;">
                            <img 
                                src="{{ asset('images/artwork') }}/{{ $akvarel_artwork->image }}" 
                                alt="" 
                                title="" 
                                style="width: auto;height:500px;margin:0 auto;"  
                                loading="lazy"
                            />
                        </li>
                        @endforeach
                    </ul>
                </div>                             
            </article>
        </div>
        
        <div class="blog-section">
            <article class="blog-entry">
                <div class="entry-thumb">
                    <ul class="blog-slider">
                       @foreach($masleni_artworks as $masleni_artwork)
                            <li style="min-height:500px;display:flex:justify-content:center;">
                                <img 
                                    src="{{ asset('images/artwork') }}/{{ $masleni_artwork->image }}" 
                                    alt="" 
                                    title="" style="width: auto;height:500px;margin:0 auto;"  
                                    loading="lazy"
                                />
                            </li>
                        @endforeach
                    </ul>
                </div> 
                <div class="entry-details">
                    <div class="entry-title">
                        <h3><a href="blog-detail-with-lhs.html">{{ $masleni_artworks[0]->category->name() }}</a></h3>
                    </div>
                    <div class="entry-body">
                      <p>{{ trans('welcome.oil-description') }}</p>
                    </div>
                    <a class="type1 dt-sc-button small" href="{{ route('gallery','masleni') }}">{{ trans('welcome.view-here') }}<i class="fa fa-angle-right"></i></a>
                </div>                   	
            </article>
        </div>
        
        <div class="blog-section">
            <article class="blog-entry type2">
                <div class="entry-details">
                    <div class="entry-title">
                        <h3><a href="blog-detail-with-rhs.html">{{ $other_artworks[0]->category->name() }}</a></h3>
                    </div>
                    <div class="entry-body">
                       <p>{{ trans('welcome.other-description') }}</p>
                    </div>
                    <a class="type1 dt-sc-button small" href="{{ route('gallery','others') }}">{{ trans('welcome.view-here') }}<i class="fa fa-angle-right"></i></a>
                </div>                   	
                <div class="entry-thumb">
                    <ul class="blog-slider">
                       @foreach($other_artworks as $other_artwork)
                            <li style="min-height:500px;display:flex;justify-content:center;width:100%;">
                                <img 
                                    src="{{ asset('images/artwork') }}/{{ $other_artwork->image }}" 
                                    alt="" 
                                    title="" 
                                    style="width: auto;height:500px;margin:0 auto;"  
                                    loading="lazy" />
                            </li>
                        @endforeach
                    </ul>
                </div>                             
            </article>
        </div>
    </div>
  </section>
  