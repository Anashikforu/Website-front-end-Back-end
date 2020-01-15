@extends('admin.layouts.app')

@section('content')
<div class="content">
    <div class="form-group">
        <h1>USE</h1><br>
        <h4>New blog</h4>
    </div>


        <div class="form-group">

            <form id="file-upload-form" class="uploader"  action="{{url('admin/pages/uses')}}"  method="post" accept-charset="utf-8" enctype="multipart/form-data">
                @csrf
                <label for="author">Author</label>
                <textarea class="form-control" id="author" name="author" rows="1" ></textarea>
                <br>
                <label for="heading">Headline</label>
                <textarea class="form-control" id="heading" name="heading" rows="1"></textarea>
                <br>
                <label for="editor">Content </label>
                <textarea class="form-control" id="editor" name="editor"></textarea>
                <br>
                <br>
                <label for="file-input">Featured Picture</label>
                <br>
                <input type="file" id="file-input" name="image" multiple />
                <span class="text-danger">{{ $errors->first('image') }}</span>
                <div id="thumb-output"></div>
                <br>
                <button class="btn btn-success" id="submit" >Submit</button>
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
