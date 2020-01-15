@extends('Weblayouts.app')
@section('content')
    <!-- breadcrumbs start -->
		<section class="breadcrumbs-area gray-bg ptb-100 port bread-card solid-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">USES</h2>
                            <ul>
                                <li>
                                    <a class="active" href="{{ url('/', []) }}">Home</a>
                                </li>
                                <li>Uses</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- breadcrumbs end -->
	   <section class="blog-area ptb-100">
            <div class="container">
                <div class="row">
                    @foreach ($uses as $item)
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-part mb-60">
                                <div class="blog-img">
                                    <a href="#"> <img src="{{Storage::url($item->image)}}" alt="" /></a>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <span>
                                            <i class="fa fa-user"></i>
                                            {{$item->author}}
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{$item->created_at}}
                                        </span>
                                        <span>
                                            <a href="#">
                                                <i class="fa fa-comment" aria-hidden="true"></i>
                                                0 Comments
                                            </a>
                                        </span>
                                    </div>
                                    <h3>{{$item->heading}}</h3>
                                    {!!$item->content!!}
                                    <a href="#">Load More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-md-12 text-center pt-60">
                        <div class="page">
                            <ul>
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection


@push('css')
<style>
    section.breadcrumbs-area.gray-bg.ptb-100.port.bread-card.solid-color {
    background-color: powderblue;
}
</style>
@endpush
