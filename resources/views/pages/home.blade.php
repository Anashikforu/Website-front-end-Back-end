@extends('Weblayouts.app')
@section('content')
<div class="slider-area slider-style-1">
    <div class="slider-active">
        @foreach ($homepage as $item)
        @if ($item->name === "Background Picture" || $item->name === "Background Picture 2" || $item->name === "Background Picture 3")
            <div class="single-slider" style="background-image: url({{Storage::url( $item->image)}});">
                <div class="slider-title">
                    <h2 class="animated">We are professional</h2>
                    <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. </p>
                    <a class="animated" href="{{ url('/page/about', []) }}">read more</a>
                </div>
            </div>
        @endif

        @endforeach
    </div>
</div>
<div class="history-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="history-text">
                    @foreach ($about as $item)
                            @if ($item->name==="Content 4")
                                <h2>{{$item->heading}}</h2>
                                {!!$item->content!!}
                            @endif
                    @endforeach
                    <a href="{{ url('/page/about', []) }}">read more</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill">
                    <div class="progress">
                        <div class="lead">designing</div>
                        <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span></div>
                    </div>
                    <div class="progress">
                        <div class="lead">branding</div>
                        <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>90%</span> </div>
                    </div>
                    <div class="progress an-rs">
                        <div class="lead">developing</div>
                        <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>95%</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($about as $item)
    @if ($item->name==="Background Picture")
        <div class="count-area  pt-120 pb-90 overly-style" style="background-image: url({{Storage::url( $item->image)}});" >
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-count mb-30">
                            <h2 class="count">360</h2>
                            <span>project done</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-count mb-30">
                            <h2 class="count">100</h2>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-count mb-30">
                            <h2 class="count">420</h2>
                            <span>branding</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-count mb-30">
                            <h2 class="count">960</h2>
                            <span>cups of coffee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

<!-- portfolio start -->
<div class="portfolio-area ptb-90">
    <div class="container">
        <div class="section-title text-center">
            <h2>our works</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
        </div>
        <div class="portfolio-menu portfolio-left-menu text-center mb-50">
            <button class="active" data-filter="*">ALL</button>
            <button data-filter=".cat1">Graphic </button>
            <button data-filter=".cat2">Web Design</button>
            <button data-filter=".cat3">Branding </button>
        </div>
        <div class="row portfolio-style-2">
            <div class="grid">
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/1.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2 cat3">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/2.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/3.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/4.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/5.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat3">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/6.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2 cat3">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/7.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat3">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/8.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
                    <div class="portfolio hover-style">
                        <div class="portfolio-img">
                            <img src="img/portfolio/9.jpg" alt="" />
                        </div>
                        <div class="portfolio-title text-center">
                            <h3><a href="#">TITLE GOES HERE</a></h3>
                            <span>Development</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-more text-center">
            <a href="#">view more</a>
        </div>
    </div>
</div>
<!-- portfolio start -->
@foreach ($homepage as $item)
    @if ($item->name==="Section Picture")
        <div class="brand-logo-area ptb-120 overly-style" style="background-image: url({{Storage::url( $item->image)}});">
            <div class="container">
                <div class="row">
                    <div class="brand-logo-active">
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="#">
                                    <img src="img/brand-logo/1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="#">
                                    <img src="img/brand-logo/2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="#">
                                    <img src="img/brand-logo/3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="#">
                                    <img src="img/brand-logo/4.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="#">
                                    <img src="img/brand-logo/1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="#">
                                    <img src="img/brand-logo/2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="#">
                                    <img src="img/brand-logo/3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="#">
                                    <img src="img/brand-logo/1.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

<!-- service-area start -->
<div class="service-area gray-bg border-top pt-85 pb-60">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-service white-bg text-center">
                    <i class="icon-laptop"></i>
                    <h3>Web Design</h3>
                    <p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-service white-bg text-center">
                    <i class="icon-pencil"></i>
                    <h3>Development </h3>
                    <p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-service white-bg text-center">
                    <i class="icon-camera"></i>
                    <h3>Photography</h3>
                    <p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-service white-bg text-center">
                    <i class="icon-linegraph "></i>
                    <h3>Branding</h3>
                    <p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-service white-bg text-center">
                    <i class="icon-gears "></i>
                    <h3>Support</h3>
                    <p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-service white-bg text-center xs-service">
                    <i class="icon-briefcase "></i>
                    <h3>Marketing</h3>
                    <p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service-area end -->
<div class="team-area pt-85 pb-60">
    <div class="container">
        <div class="section-title text-center">
            <h2>great team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
        </div>
        <div class="row">
            @foreach ($about as $key)
                @if ($key->name === "Post 1" || $key->name === "Post 2" || $key->name === "Post 3")
                    <div class="col-md-4 col-sm-4">
                        <div class="team-wrapper mb-30">
                            <div class="team-member">
                                <img src="{{Storage::url($key->image)}}" alt="" height="300px" width="100px"/>
                                <div class="team-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-tumblr"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <div class="team-info text-center">
                                {!!$key->content !!}
                                <h3>{{$key->heading}}</h3>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- blog area start -->
<div class="blog-area pb-60">
    <div class="container">
        <div class="section-title text-center">
            <h2>Latest News</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-blog mb-30">
                    <a href="blog-details.html">
                        <img src="img/blog/1.jpg" alt="">
                    </a>
                    <div class="blog-title">
                        <span>December 8, 2017</span>
                        <h3><a href="blog-details.html">Lorem Ipsum is simply dummy</a></h3>
                        <a href="blog-details.html">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-blog mb-30">
                    <a href="blog-details.html">
                        <img src="img/blog/2.jpg" alt="">
                    </a>
                    <div class="blog-title">
                        <span>December 8, 2017</span>
                        <h3><a href="blog-details.html">Lorem Ipsum is simply dummy</a></h3>
                        <a href="blog-details.html">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm">
                <div class="single-blog mb-30">
                    <a href="blog-details.html">
                        <img src="img/blog/3.jpg" alt="">
                    </a>
                    <div class="blog-title">
                        <span>December 8, 2017</span>
                        <h3><a href="blog-details.html">Lorem Ipsum is simply dummy</a></h3>
                        <a href="blog-details.html">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
