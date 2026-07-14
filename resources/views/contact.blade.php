@extends('layout')

@section('content')
<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">
        <div id="main">
            <div class="container" style="margin-top:200px;">
                <div class="main-title"">
                    <h3> {{ trans('contact.heading') }}</h3>
                </div>
                 <h4 style="text-align: center"> {{ trans('contact.subheading') }}</h4>
                 <div style="display: flex;justify-content:center">
                    <form method="post" style="margin:0 auto" class="mailchimp-form dt-sc-three-fourth" name="frmnewsletter" action="php/subscribe.php">	
                        <p class="input-text">
                            <input class="input-field" type="text" name="name" value="" required/>
                            <label class="input-label">
                                    <i class="fa fa-envelope-o icon"></i>
                                    <span class="input-label-content">{{ trans('contact.name') }}</span>
                                </label>
                            
                        </p>
                        <p class="input-text">
                            <input class="input-field" type="email" name="email" value="" required/>
                            <label class="input-label">
                                    <i class="fa fa-envelope-o icon"></i>
                                    <span class="input-label-content">{{ trans('contact.email') }}</span>
                                </label>
                            
                        </p>
                        <p class="input-text">
                            <textarea class="input-field" name="email" value="" rows="10" required></textarea>
                            <label class="input-label">
                                <i class="fa fa-envelope-o icon"></i>
                                <span class="input-label-content">{{ trans('contact.message') }}</span>
                            </label>
                        </p>
                        <div style="text-align: center;">
                            <button class="send-btn">{{ trans('contact.send') }}</button>
                        </div>
                    </form>
                 </div>
                 
                 <div class="footer-social-media">
                    <h4 > {{ trans('contact.follow') }} </h4>
                    <div class="social-icons">
                    <a href="https://www.facebook.com/share/1DnQLdh6WM/" class="icon facebook" target="_blank">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/velina_grebenska?igsh=MWpvOXRwNjB3eXM1aw==" class="icon instagram" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://pin.it/5SqqJm90N" class="icon linkedin" target="_blank">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </div>
                 </div>
         
            
         </div>
    
@endsection
