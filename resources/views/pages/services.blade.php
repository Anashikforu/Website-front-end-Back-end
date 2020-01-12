@extends('WebLayouts.app')
@section('content')
@foreach ($services as $item)
    @if ($item->name==="Background Picture")
        <section class="breadcrumbs-area ptb-110 port bread-card breadcrumbs-img" style="background-image: url({{Storage::url( $item->image)}});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">Service</h2>
                            <ul>
                                <li>
                                    <a class="active" href="{{ url('/', []) }}">Home</a>
                                </li>
                                <li>Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach

<!-- portfolio start -->
<!-- service-area start -->
<div class="service-area gray-bg border-top pt-90 pb-60">
    <div class="container">
        <div class="section-title text-center">
            <h2>our services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
        </div>
        <div class="row">
            @foreach ($services as $item)
                @if ($item->name ==="Background Picture")

                @else
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service white-bg text-center">
                            <i class="icon-laptop"></i>
                            <h3>{{$item->heading}}</h3>
                            {!!$item->content!!}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
