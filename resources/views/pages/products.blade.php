@extends('WebLayouts.app')
@section('content')
    @foreach ($products as $item)
        @if ($item->name==="Background Picture")
            <section class="breadcrumbs-area ptb-110 port bread-card breadcrumbs-img" style="background-image: url({{Storage::url( $item->image)}});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="breadcrumbs">
                                <h2 class="page-title">PRODUCTS AND FACILITIES</h2>
                                <ul>
                                    <li>
                                        <a class="active" href="{{ url('/', []) }}">Home</a>
                                    </li>
                                    <li>Products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
    <!-- portfolio area start -->
    <div class="portfolio-area ptb-90">
        <div class="container">
            <div class="portfolio-menu text-center mb-50">
                <button class="active" data-filter="*">ALL</button>
                <button data-filter=".cat1">DEVELOPMENT</button>
                <button data-filter=".cat2">WORK</button>
            </div>
            <div class="row portfolio-style-2">
                <div class="grid">
                    @foreach ($products as $item)
                        @if ($item->name ==="Background Picture")

                        @else
                            <div class="col-md-3 col-sm-6 col-xs-12 grid-item {{ ($item->content === "Development") ? 'cat1' : 'cat2' }}  ">
                                <div class="portfolio hover-style another-hover-style">
                                    <div class="portfolio-img">
                                        <img src=" {{Storage::url( $item->image)}} " alt="" />
                                        <div class="portfolio-view">
                                            <a class="img-poppu" href="{{Storage::url( $item->image)}}">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="another-portfolio-title text-center">
                                        <h3><a href="#">{{$item->heading}}</a></h3>
                                        <span>{{$item->content}}</span>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
