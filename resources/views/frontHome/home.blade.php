@extends($frontTheme)

@section('content')
<div class="container">
    <!-- banner section -->
    <div class="col-md-9 bann-right">
        <!-- banner -->
       {{--  <div class="banner">        
            <div class="header-slider">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <img src="{{ asset('frontTheme/images/1.jpg') }}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Maecenas malesuada elit lectus felis</h3>
                                    <p>Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('frontTheme/images/4.jpg') }}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Curabitur et ligula. Ut molestie </h3>
                                    <p>Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulu. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('frontTheme/images/5.jpg ') }}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Etiam ullamcorper. Suspendisse</h3>
                                    <p>Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('frontTheme/images/6.jpg') }}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Suspendisse a pellentesque dui</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada .</p>
                                </div>
                            </li>   
                        </ul>
                    </div>
                 </div>
            </div>
        </div> --}}
        <!-- banner --> 
        <!-- nam-matis -->
        <div class="row">
            @foreach ($post as $post)
            <div class="col-md-6 mt-2">
                <div class="card blog-post">
                    <div class="card-img">
                        <a href="single.html"><img src="{{ asset('frontTheme/images/5.jpg') }}" class="img-responsive" alt=""></a>
                    </div>
                    <div class="card-body">
                            <h3 class="text-dark">
                                {{  strftime("%d %b %Y",strtotime($post->created_at)) }}</h3>
                            <h2><a href="single.html" class="text-decoration-none text-dark">{{ $post->title }}</a></h2>
                            <p class="">{{ Str::limit($post->description, 150) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
{{--                 <div class="col-md-6 nam-matis-1">
                    <a href=""><img src="{{ asset('frontTheme/images/6.jpg') }}" class="img-responsive" alt=""></a>
                    <h3><a href="">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div> --}}
                {{-- <div class="clearfix"> </div> --}}
            {{-- </div> --}}
            {{-- <div class="nam-matis-top">
                <div class="col-md-6 nam-matis-1">
                    <a href="single.html"><img src="{{ asset('frontTheme/images/4.jpg') }}" class="img-responsive" alt=""></a>
                    <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="col-md-6 nam-matis-1">
                    <a href="single.html"><img src="{{ asset('frontTheme/images/1.jpg') }}" class="img-responsive" alt=""></a>
                    <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="clearfix"> </div>
            </div> --}}  
        <!-- nam-matis -->  
    </div>
    {{-- sidebar --}}
    <div class="col-md-3 bann-left">
    <div class="b-search">
        <form>
            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
            <input type="submit" value="">
        </form>
    </div>
    <h3>Recent Posts</h3>
    <div class="blo-top">
        <div class="blog-grids">
            <div class="blog-grid-left">
                <a href="single.html"><img src="{{ asset('frontTheme/images/1b.jpg') }}" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h4><a href="single.html">Little Invaders </a></h4>
                <p>pellentesque dui, non felis. Maecenas male </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="blog-grids">
            <div class="blog-grid-left">
                <a href="single.html"><img src="{{ asset('frontTheme/images/2b.jpg') }}" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h4><a href="single.html">Little Invaders </a></h4>
                <p>pellentesque dui, non felis. Maecenas male </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="blog-grids">
            <div class="blog-grid-left">
                <a href=""><img src="{{ asset('frontTheme/images/3b.jpg') }}" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h4><a href="single.html">Little Invaders </a></h4>
                <p>pellentesque dui, non felis. Maecenas male </p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <h3>Categories</h3>
    <div class="blo-top">
        @foreach ($category as $category)
            
        <li><a href="#">{{ $category->name }}</a></li>
        @endforeach
        {{-- <li><a href="#">||   Lorem Ipsum passage</a></li> --}}
        {{-- <li><a href="#">||   Finibus Bonorum et</a></li>
        <li><a href="#">||   Treatise on the theory</a></li>
        <li><a href="#">||   Characteristic words</a></li>
        <li><a href="#">||   combined with a handful</a></li>
        <li><a href="#">||   which looks reasonable</a></li> --}}
    </div>
    <h3>Newsletter</h3>
        
    <div class="blo-top">
        <div class="name">
            <form>
                <input type="text" placeholder="email" required="">
            </form>
        </div>  
        <div class="button">
            <form>
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
    {{-- sidebar --}}
    <div class="clearfix"> </div>
        <div class="fle-xsel mt-3">
            <ul id="flexiselDemo3">
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('frontTheme/images/6.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('frontTheme/images/5.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>           
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('frontTheme/images/1.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>       
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('frontTheme/images/4.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>   
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('frontTheme/images/6.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>   
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('frontTheme/images/1.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>               
            </ul>
                            
            <div class="clearfix"> </div>
        </div>

@endsection