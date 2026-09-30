 <nav id="main-menu" ><!-- Main-menu Starts -->
    <div id="dt-menu-toggle" class="dt-menu-toggle">
         {{ trans('welcome.menu') }}
        <span class="dt-menu-toggle-icon"></span>
    </div>            	
    <ul class="menu type1" style="display:flex;justify-content:center;width:100%">
        <li class="{{ (request()->route()->getName() =='welcome' || request()->route()->getName() =='welcome-bg') ? ' current_page_item ' : '' }} menu-item-simple-parent">
            <a href="{{ request()->segment(1) == 'bg' ? route('welcome-bg') : route('welcome') }}">
                   {{ trans('welcome.home') }}
                <span class="fa fa-home"></span>
            </a>
                                </li>
        <li class="{{ ( request()->route()->getName() =='about' || request()->route()->getName() =='about-bg') ? ' current_page_item ' : '' }} menu-item-simple-parent">
            <a href="{{request()->segment(1) == 'bg' ? route('about-bg') : route('about')}}">
                 {{ trans('welcome.about') }}
                <span  class="fas fa-user"></span>
            </a>
        </li>

         <li class="{{ (request()->route()->getName() =='gallery' || request()->route()->getName() =='gallery-bg')  ? ' current_page_item ' : '' }} menu-item-simple-parent">
            <a href="{{ request()->segment(1) == 'bg' ? route('gallery-bg') : route('gallery') }}"> {{ trans('welcome.gallery') }} <span class="fa fa-camera-retro"></span></a>
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
        <li>
            @yield('lang-switcher')       
        </li>
                                         
    </ul>
</nav> 