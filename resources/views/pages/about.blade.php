@extends('Weblayouts.app')
@section('content')
    <section class="breadcrumbs-area ptb-100 port bread-card pattern-bread gray-bg border-bread">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumbs">
                        <h2 class="page-title">About Us</h2>
                        <ul>
                            <li>
                                <a class="active" href="#">Home</a>
                            </li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumbs end -->
    <div class="about-area ptb-90">
        <div class="container">
            <div class="row">
                @foreach ($about as $key)
                @if ($key->name === "Content 1" || $key->name === "Content 2" || $key->name === "Content 3")
                <div class="col-md-4 col-sm-4">
                    <div class="single-about">
                        <i class="icon-genius"></i>
                        <h3>{{$key->heading}}</h3>
                        {!!$key->content !!}
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="history-area pb-90">
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
    <div >
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
    </div>
    <div class="team-area pt-90 pb-60">
        <div class="container">
            <div class="section-title text-center">
                <h2>great team</h2>
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
@endsection
