@extends('layout')      

       @section('seo')
        <title>{{ trans('welcome.meta-title') }}</title>
        <meta name="description" content="{{ trans('welcome.meta-descriptions') }}">
        <meta name="author" content="Velina Grebenska">
       @endsection
       @section('content')
        <div class="slider-container">
            <div class="slider fullwidth-section parallax" style="background-size:cover;"></div>
        </div>
        {{-- <img src="{{ asset('images/artwork/1.jpg') }}" alt="" style="width: 100%"> --}}
        <div id="main">
			<section id="primary" class="content-full-width"> <!-- **Primary Starts Here** -->  
                      
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
                                <h3 class="animate" data-animation="fadeInLeft" data-delay="200"> Образование</h3>
                                <p>2002г - Факултет &quot;Изобразителни изкуства&quot; към ВТУ &quot;Св.св. Кирил и Методий&quot; ,
Магистър “Педагогика на изобразителното изкуство”, специалност “Живопис”
1997г.- СОУ “Емилиян Станев”, паралелка със засилено изучаване на
изобразително изкуство, гр. Велико Търново,
От 2003г живее и работи във Варна.</p>
                                <h3 class="animate" data-animation="fadeInLeft" data-delay="300">Изложби</h3>
                                <p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor quis nostrud exercitation ullamco</p>
                               
                            </div>
                        </div>
                    </div>
				</div><!-- **Full-width-section Ends Here** -->
                
            	<div class="dt-sc-hr-invisible-small"></div>
                
            </section><!-- **Primary Ends Here** -->
            
@endsection