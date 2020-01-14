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
                <table class="table">
                  <thead>
                      <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Headline</td>
                        <td>Content</td>
                        <td>Image</td>
                        <td colspan="2">Action</td>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($product as $product)
                      <tr>
                          <td>{{$product->id}}</td>
                          <td style="width: 15% !important">{{$product->name}}</td>
                          <td style="width: 15% !important">{{$product->heading}}</td>
                          <td>{{$product->content}}</td>
                          <td>
                              @if ( $product->image === NULL)
                                No Image
                              @else
                                <img src=" {{Storage::url( $product->image)}} " height="100%" width="30%">
                              @endif
                          </td>
                          <td><a href="{{ route('product.edit',$product->id)}}" class="btn btn-xs btn-primary">Edit</a></td>
                          <td>
                              <form action="{{ route('product.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
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
