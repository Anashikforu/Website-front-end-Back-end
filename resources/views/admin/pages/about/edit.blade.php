@extends('admin.layouts.app')

@section('content')
<div class="content">
    <div class="form-group">
        <h1>About</h1><br>
        <label for="defaultSelect">Section</label>
        <br>
        <td>
            <a onclick="myFunction(this)" href="{{ route('about.edit',1)}}" class="btn btn-primary">Background Picture</a>
            <a onclick="myFunction(this)" href="{{ route('about.edit',2)}}" class="btn btn-primary">Post 1</a>
            <a onclick="myFunction(this)" href="{{ route('about.edit',3)}}" class="btn btn-primary">Post 2</a>
            <a onclick="myFunction(this)" href="{{ route('about.edit',4)}}" class="btn btn-primary">Post 3</a>
            <a onclick="myFunction(this)" href="{{ route('about.edit',5)}}" class="btn btn-primary">Content 1</a>
            <a onclick="myFunction(this)" href="{{ route('about.edit',6)}}" class="btn btn-primary">Content 2</a>
            <a onclick="myFunction(this)" href="{{ route('about.edit',7)}}" class="btn btn-primary">Content 3</a>
            <a onclick="myFunction(this)" href="{{ route('about.edit',8)}}" class="btn btn-primary">Content 4</a>
        </td>
        {{-- <select class="form-control form-control" id="defaultSelect">
            <option href="{{ route('home.edit',1)}}">1</option>
            <option href="{{ route('home.edit',2)}}">2</option>
            <option href="{{ route('home.edit',3)}}">3</option>
            <option href="{{ route('home.edit',4)}}">4</option>
            <option href="{{ route('home.edit',5)}}">5</option>
        </select> --}}
    </div>

        <div class="form-group">

            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <form id="file-upload-form" class="uploader"  action="{{ route('about.update', $about->id) }}"  method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <h3> <b> {{$about->name}}</b></h3>
                <br>
                @if ( $about->name ==="Background Picture")

                @else
                    @if ($about->name ==="Post 1" || $about->name ==="Post 2" || $about->name ==="Post 3")
                    <h4><b style="color: #2f76db !important">BOARD OF DIRECTORS</b></h4><br>
                    <label for="heading">Position</label>

                    @else
                        <label for="heading">Headline</label>
                    @endif

                    <textarea class="form-control" id="heading" name="heading" rows="1">{{$about->heading}}</textarea>
                    <br>

                @endif

                @if ( $about->name ==="Background Picture" || $about->name ==="Post 1" || $about->name ==="Post 2" || $about->name ==="Post 3" )
                    <label for="editor">Name</label>
                    <textarea class="form-control" id="editor" name="editor">{{$about->content}}</textarea>
                    <br>
                @else
                    <label for="editor">Content</label>
                    <textarea class="form-control" id="editor" name="editor">{{$about->content}}</textarea>
                    <br>
                @endif

                @if ( $about->name ==="Background Picture" || $about->name ==="Post 1" || $about->name ==="Post 2" || $about->name ==="Post 3" )
                    <label for="file-input">Image</label>
                    <br>
                    <img src=" {{Storage::url( $about->image)}} " height="30%" width="30%">
                    <br>
                    <br>
                    <input type="hidden"  name="oldImage"  value="{{$about->image}}"/>
                    <input type="file" id="file-input" name="image" multiple />
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    <div id="thumb-output"></div>
                    <br>
                @else

                @endif

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
