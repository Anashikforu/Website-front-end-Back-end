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
        </td>
    </div>

        <div class="form-group">

            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <form id="file-upload-form" class="uploader"  action="{{ route('home.update', $homepage->id) }}"  method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <h3> <b> {{$homepage->name}}</b></h3>
                <br>
                @if ( $homepage->name === "Background Picture" || $homepage->name === "Background Picture 2" || $homepage->name === "Background Picture 3" || $homepage->name === "Section Picture" )

                @else
                    <label for="heading">Headline</label>
                    <textarea class="form-control" id="heading" name="heading" rows="1"  >{{ $homepage->heading }}</textarea>
                    <br>
                @endif
                @if ( $homepage->name === "Background Picture" || $homepage->name === "Background Picture 2" || $homepage->name === "Background Picture 3" || $homepage->name === "Section Picture" )

                @else
                    <label for="editor">Content</label>
                    <textarea class="form-control" id="editor" name="editor"  >{{ $homepage->content }}</textarea>
                    <br>
                @endif

                @if ($homepage->name === "Background Picture" || $homepage->name === "Background Picture 2" || $homepage->name === "Background Picture 3" || $homepage->name === "Section Picture" )
                    <label for="file-input">Featured Picture</label>
                    <br>
                    @if ($homepage->image=== NULL)
                        <img src=" {{ url('admin\img\bg-abstract.png', []) }} " height="30%" width="30%">
                    @else
                        <img src=" {{Storage::url( $homepage->image)}} " height="30%" width="30%">
                    @endif
                        <br>
                        <br>
                        <input type="file" id="file-input" name="image"  />
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                        <div id="thumb-output"></div>
                        <br>
                @endif
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
