@extends('admin.layouts.app')

@section('content')
<div class="content">
        <div class="form-group">
            <h1>Products</h1><br>
            <div>
                <a href="{{ route('product.create')}}" class="btn btn-info btn-xs">New Product</a>
            </div>
            <br>
            <div >
                @if(session()->get('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}
                  </div>
                  <br>
                @endif
                <div class="row">
                    @foreach ($product as $item)
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-part mb-60">
                                <hr>
                                <div class="blog-img">
                                    <a href="#"> <img src="{{Storage::url($item->image)}}" alt="" width="600px" height="350px"/></a>
                                </div>
                                <hr>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <a>
                                            <i class="fa fa-star"></i>
                                            {{$item->name}}
                                        </a>
                                    </div>
                                    <hr>
                                    <h3>{{$item->heading}}</h3>
                                     <p href="">Category - {!!$item->content!!} </p>
                                    <hr>
                                    <div class="row">
                                        <a href="{{ route('product.edit',$item->id)}}" class="btn btn-xs btn-primary"  style=" margin:5px;">Edit</a>
                                        <form action="{{ route('product.destroy', $item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-xs" style=" margin:5px;" type="submit">Delete</button>
                                        </form>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>


@endsection


@push('css')
<style>
    .modal-body {
    width: 300%;
}
</style>
@endpush

@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script>
        let theEditor;
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        theEditor = editor;
                } )
                .catch( error => {
                        console.error( error );
                } );

                // function getDataFromTheEditor() {
                // alert(theEditor.getData());
                // }

                function myFunction(x) {
                x.classList.toggle("btn-success");
                }

    </script>
@endpush
