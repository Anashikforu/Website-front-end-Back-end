@extends('admin.layouts.app')

@section('content')
<div class="content">
    <div class="form-group">
        <h1>Home</h1><br>
        <label for="defaultSelect">Section</label>
        <br>
        <td>
            <a onclick="myFunction(this)" href="{{ route('home.edit',1)}}" class="btn btn-primary">Background Picture</a>
            <a onclick="myFunction(this)" href="{{ route('home.edit',2)}}" class="btn btn-primary">Background Picture 2</a>
            <a onclick="myFunction(this)" href="{{ route('home.edit',3)}}" class="btn btn-primary">Background Picture 3</a>
            <a onclick="myFunction(this)" href="{{ route('home.edit',4)}}" class="btn btn-primary">Section Picture</a>
            <a onclick="myFunction(this)" href="{{ route('home.edit',5)}}" class="btn btn-primary">Content</a>
        </td>
        {{-- <select class="form-control form-control" id="defaultSelect">
            <option href="{{ route('home.edit',1)}}">1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select> --}}
    </div>


        <div class="form-group">

            <form id="file-upload-form" class="uploader"  action="{{url('admin/pages/home')}}"  method="post" accept-charset="utf-8" enctype="multipart/form-data">
                @csrf
                <label for="heading">Headline</label>
                <textarea class="form-control" id="heading" name="heading" rows="1">

                </textarea>
                <br>
                <label for="editor">Content</label>
                <textarea class="form-control" id="editor" name="editor">

                </textarea>
                <br>
                <label for="file-input">Featured Picture</label>
                <br>
                <input type="file" id="file-input" name="image" multiple />
                <span class="text-danger">{{ $errors->first('image') }}</span>
                <div id="thumb-output"></div>
                <br>
                <button class="btn btn-success" id="getData" >Submit</button>
            </form>
        </div>
</div>

@endsection

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
