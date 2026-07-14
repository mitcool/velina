<x-head />

<body>
    <div class="loader-wrapper">
        <div id="large-header" class="large-header">
            <h1 class="loader-title"><span style="text-transform:uppercase">Velina </span> Grebenska</h1>
        </div>        
    </div>
<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">
    	<div id="header-wrapper" class="dt-sticky-menu"> <!-- **header-wrapper Starts** -->
			<div id="header" class="header" style="background: rgba(255, 255, 255, 0.8);">
            	<div class="container menu-container">
                    <a class="logo" href="{{ route('welcome') }}">
                        <h1 style="font-family: Londrina Outline, sans-serif;"><span style="font-family: 'Josefin Sans', sans-serif;color:#a81c51;font-weight:bold;text-transform:uppercase;">Velina </span> <span style="color:black;text-shadow: 1px 1px 2px black;"> Grebenska </span></h1>
                           
                        {{-- <img alt="Logo" src="{{ asset('images/logo.png') }}" style="width: 20%;"></a> --}}
                    
                    <a href="#" class="menu-trigger">
                        <span></span>
                    </a>
                </div>
            </div>
			
            <x-menu /> 
        </div><!-- **header-wrapper Ends** -->

        @yield('content')

        <x-footer />