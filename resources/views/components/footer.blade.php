            <footer id="footer" class="animate" data-animation="fadeIn" data-delay="100">
                <div class="container">
                    <div class="copyright">
                    
                        <ul class="footer-links">
                            <li><a href="{{ route('contact') }}">{{ trans('welcome.contact') }}</a></li>
                            <li><a href="{{ route('about') }}">{{ trans('welcome.about') }}</a></li>
                            <li><a href="{{ route('gallery') }}">{{ trans('welcome.gallery') }}</a></li>
                        </ul>

                        <p>© {{ date('Y') }} <a href="{{ route('welcome') }}">{{ trans('welcome.velina') }}</p>
                        
                    </div>
                </div>
            </footer>
        </div><!-- Main Ends Here-->
        
	</div><!-- **inner-wrapper - End** -->
</div><!-- **Wrapper Ends** -->
	
<!-- **jQuery** -->  
	<script src="{{ asset('js/jquery-1.11.2.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/jquery.inview.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.viewport.js') }}" type="text/javascript"></script>
    
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    
	<script src="{{ asset('js/jsplugins.js') }}" type="text/javascript"></script>    
    
	<script src="{{ asset('js/jquery.prettyPhoto.js') }}" type="text/javascript"></script>    
    
	<script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>    
    
    <script src="{{ asset('js/jquery.tipTip.minified.js') }}" type="text/javascript"></script>    
    
    <script type="text/javascript" src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    
	<script src="{{ asset('js/custom.js') }}"></script>        
</body>
</html>
