@extends('WebLayouts.app')
@section('content')
    <section class="breadcrumbs-area ptb-110 bg-2 port bread-card breadcrumbs-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumbs">
                        <h2 class="page-title">Portfolio Card Style</h2>
                        <ul>
                            <li>
                                <a class="active" href="#">Home</a>
                            </li>
                            <li>
                                <a class="active2" href="#">portfolio</a>
                            </li>
                            <li>portfolio 4</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio area start -->
    <div class="portfolio-area ptb-90">
        <div class="container">
            <div class="portfolio-menu text-center mb-50">
                <button class="active" data-filter="*">ALL</button>
                <button data-filter=".cat1">ART WORK</button>
                <button data-filter=".cat2">Web Design</button>
                <button data-filter=".cat3">Design</button>
            </div>
            <div class="row portfolio-style-2">
                <div class="grid">
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat2 cat3">
                        <div class="portfolio hover-style another-hover-style">
                            <div class="portfolio-img">
                                <img src="{{ asset('/') }}img/portfolio/style-5/5.jpg" alt="" />
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="{{ asset('/') }}img/portfolio/style-5/5.jpg">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="another-portfolio-title text-center">
                                <h3><a href="#">TITLE GOES HERE</a></h3>
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                        <div class="portfolio hover-style">
                            <div class="portfolio-img">
                                <img src="{{ asset('/') }}img/portfolio/style-5/6.jpg" alt="" />
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="{{ asset('/') }}img/portfolio/style-5/6.jpg">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="another-portfolio-title text-center">
                                <h3><a href="#">TITLE GOES HERE</a></h3>
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat3">
                        <div class="portfolio hover-style">
                            <div class="portfolio-img">
                                <img src="{{ asset('/') }}img/portfolio/style-5/9.jpg" alt="" />
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="{{ asset('/') }}img/portfolio/style-5/9.jpg">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="another-portfolio-title text-center">
                                <h3><a href="#">TITLE GOES HERE</a></h3>
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat2 cat3">
                        <div class="portfolio hover-style">
                            <div class="portfolio-img">
                                <img src="{{ asset('/') }}img/portfolio/style-5/7.jpg" alt="" />
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="{{ asset('/') }}img/portfolio/style-5/7.jpg">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="another-portfolio-title text-center">
                                <h3><a href="#">TITLE GOES HERE</a></h3>
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat3">
                        <div class="portfolio hover-style">
                            <div class="portfolio-img">
                                <img src="{{ asset('/') }}img/portfolio/style-5/8.jpg" alt="" />
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="{{ asset('/') }}img/portfolio/style-5/8.jpg">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="another-portfolio-title text-center">
                                <h3><a href="#">TITLE GOES HERE</a></h3>
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                        <div class="portfolio hover-style">
                            <div class="portfolio-img">
                                <img src="{{ asset('/') }}img/portfolio/style-5/10.jpg" alt="" />
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="{{ asset('/') }}img/portfolio/style-5/10.jpg">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="another-portfolio-title text-center">
                                <h3><a href="#">TITLE GOES HERE</a></h3>
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                        <div class="portfolio hover-style">
                            <div class="portfolio-img">
                                <img src="{{ asset('/') }}img/portfolio/style-5/11.jpg" alt="" />
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="{{ asset('/') }}img/portfolio/style-5/11.jpg">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="another-portfolio-title text-center">
                                <h3><a href="#">TITLE GOES HERE</a></h3>
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                        <div class="portfolio hover-style">
                            <div class="portfolio-img">
                                <img src="{{ asset('/') }}img/portfolio/style-5/12.jpg" alt="" />
                                <div class="portfolio-view">
                                    <a class="img-poppu" href="{{ asset('/') }}img/portfolio/style-5/12.jpg">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="another-portfolio-title text-center">
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
@endsection
