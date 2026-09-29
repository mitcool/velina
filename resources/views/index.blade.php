@extends('layout')      

       @section('seo')
        <title>{{ trans('welcome.meta-title') }}</title>
        <meta name="description" content="{{ trans('welcome.meta-description') }}">
        <meta name="author" content="Velina Grebenska">
       @endsection
       @section('content')
        <div class="slider-container">
            <div fetchpriority="high" class="slider fullwidth-section parallax" style="background-size:cover;"></div>
        </div>
        {{-- <img src="{{ asset('images/artwork/1.jpg') }}" alt="" style="width: 100%"> --}}
        <div id="main">
			<section id="primary" class="content-full-width"  > <!-- **Primary Starts Here** -->  
                      
            	<div class="dt-sc-hr-invisible-small"></div>
                
                <x-portfolio />

                <x-home-galery />

                <div class="fullwidth-section"><!-- **Full-width-section Starts Here** -->
                    <div class="container">
                    
                        <div class="main-title animate" data-animation="pullDown" data-delay="100">
                            <h2 class="aligncenter">{{ trans('welcome.about') }}</h2>
                           
                        </div>
                        
                        <div class="about-section">
                        
                            <div class="dt-sc-one-half column first">
                                <img src="images/images.jpg" title="" alt="" class="w-100">
                            </div>
                            
                            <div class="dt-sc-one-half column">
                                <h3 class="animate" data-animation="fadeInLeft" data-delay="200">{{ trans('about.education-heading') }}</h3>
                                <p>{{ trans('about.education-summary') }}</p>
                                <h3 class="animate" data-animation="fadeInLeft" data-delay="300">{{ trans('about.group-heading') }}</h3>
                                <p>{{ trans('about.exhibitions-summary') }}</p>
                               
                            </div>
                        </div>
                    </div>
				</div><!-- **Full-width-section Ends Here** -->
                
            	<div class="dt-sc-hr-invisible-small"></div>
                
            </section><!-- **Primary Ends Here** -->
            
@endsection