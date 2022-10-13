 <div class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('frontTheme/images/logo.png') }}" class="img-responsive" alt=""></a>
            </div>
            <div class="head-nav">
                <span class="menu"> 
                    <ul class="cl-effect-1">
                        <li class="{{ (request()->is('home*')) ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                        <li class="{{ (request()->is('about*')) ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="{{ (request()->is('service*')) ? 'active' : '' }}"><a href="{{ route('service') }}">Services</a></li>
                        <li class="{{ (request()->is('blogs*')) ? 'active' : '' }}"><a href="{{ route('blogs') }}">Blog</a></li>
                        <li class="{{ (request()->is('shortcodes*')) ? 'active' : '' }}"><a href="{{ route('shortcodes') }}">Shortcodes</a></li>
                        <li class="{{ (request()->is('login*')) ? 'active' : '' }}"><a href={{ route('login') }}>Login</a></li>
                        <li class="{{ (request()->is('contact*')) ? 'active' : '' }}"><a href={{ route('contact') }}>Contact</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </span>
            </div>
            <!-- script-for-nav -->
            <script>
                $( "span.menu" ).click(function() {
                $( ".head-nav ul" ).slideToggle(300, function() {
                // Animation complete.
                });
                });
            </script>
                <!-- script-for-nav -->
                
                        
            
                    <div class="clearfix"> </div>
        </div>
    </div>