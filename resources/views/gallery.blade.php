@extends('layout')

@section('content')
<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">
        <div id="main">
            <div class="container" style="margin-top:200px;">
                <div class="main-title"">
                    <h3> {{ trans('welcome.gallery') }} {{ $category ? $category->name : '' }}</h3>
                </div>
            </div>
            @if($category)
             <div class="dt-sc-sorting-container">
                 <a data-filter="*" href="#" title = "" class="dt-sc-tooltip-top type1 dt-sc-button animate" data-animation="fadeIn" data-delay="200">{{ trans('welcome.all') }}</a>
                @foreach($category->periods as $period)
                        <a data-filter=".{{ $period->name }}" href="#" title = "" class="dt-sc-tooltip-top type1 dt-sc-button animate" data-animation="fadeIn" data-delay="200">{{ $period->name() }}</a>
                @endforeach
             </div>
            @endif
            <div class="portfolio-fullwidth"><!-- **portfolio-fullwidth Starts Here** -->
                <div class="portfolio-grid">
                    <div class="dt-sc-portfolio-container isotope"> <!-- **dt-sc-portfolio-container Starts Here** -->
                        @foreach($artworks as $artwork)
                            <div class="portfolio {{ $artwork->period_details->name }} street nature people still-life dt-sc-one-fourth">
                                <figure>
                                    <img src="{{ asset('images/artwork/') }}/{{ $artwork->image }}" alt="" title="" loading="lazy">
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="{{ asset('images/artwork/') }}/{{ $artwork->image }}"></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5 style="color:white !important;">{{ $artwork->name() }}</h5>
                                                <p style="color:white;">{{ $artwork->description() }}</p>
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
        </div>
@endsection
