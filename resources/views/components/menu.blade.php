 <nav id="main-menu" ><!-- Main-menu Starts -->
    <div id="dt-menu-toggle" class="dt-menu-toggle">
         {{ trans('welcome.menu') }}
        <span class="dt-menu-toggle-icon"></span>
    </div>            	
    <ul class="menu type1" style="display:flex;justify-content:center;width:100%">
        <li class="{{ request()->route()->getName() =='welcome' ? ' current_page_item ' : '' }} menu-item-simple-parent">
            <a href="{{ route('welcome') }}">
                   {{ trans('welcome.home') }}
                <span class="fa fa-home"></span>
            </a>
                                </li>
        <li class="{{ request()->route()->getName() =='about' ? ' current_page_item ' : '' }} menu-item-simple-parent">
            <a href="{{route('about')}}">
                 {{ trans('welcome.about') }}
                <span  class="fas fa-user"></span>
            </a>
        </li>

         <li class="{{ request()->route()->getName() =='gallery' ? ' current_page_item ' : '' }} menu-item-simple-parent">
            <a href="{{ route('gallery') }}"> {{ trans('welcome.gallery') }} <span class="fa fa-camera-retro"></span></a>
            <ul class="sub-menu">
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('gallery',$category->slug) }}">{{ $category->name() }}</a>
                    </li>
                @endforeach
            </ul>
            <a class="dt-menu-expand" style="border-left:none;">+</a>
        </li>
        <li class="{{ request()->route()->getName() =='contact' ? ' current_page_item ' : '' }} menu-item-simple-parent">
            <a href="{{ route('contact') }}">
                 {{ trans('welcome.contact') }} 
                <span class="fa fa-pencil-square-o"></span>
            </a>
        </li>
        <li class="{{ request()->route()->getName() =='contact' ? ' current_page_item ' : '' }} menu-item-simple-parent">
            @if(app()->currentLocale()=='en')
            <a href="{{ route('change-language','en') }}" rel="nofollow">
                 BG
                <span class="fa fa-globe"></span>
            </a>
            @else
             <a href="{{ route('change-language','en') }}" rel="nofollow">
                EN
                <span class="fa fa-globe"></span>
            </a>
            @endif
                               
        </li>
                                         
    </ul>
</nav> 