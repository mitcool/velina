<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	@yield('seo')


	
	<!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />    
    
    <!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" media="all" />
	
    <!-- **Additional - stylesheets** -->
    <link href="{{ asset('css/animations.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link id="shortcodes-css" href="{{ asset('css/shortcodes.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link id="skin-css" href="{{ asset('skins/red/style.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('css/isotope.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
    
	<link id="light-dark-css" href="{{ asset('light/light.css') }}" rel="stylesheet" media="all" />

	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
	
	<script src="{{ asset('js/modernizr.js') }}"></script> 

	@yield('css')
</head>