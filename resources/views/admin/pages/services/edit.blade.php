@extends('admin.layouts.app')

@section('content')
<div class="content">
    <div class="form-group">
        <h1>Services</h1><br>
        <label for="defaultSelect">Section</label>
        <br>
        <td>
            <a onclick="myFunction(this)" href="{{ route('services.edit',1)}}" class="btn btn-primary">Background Picture</a>
            <a onclick="myFunction(this)" href="{{ route('services.edit',2)}}" class="btn btn-primary">Content 1</a>
            <a onclick="myFunction(this)" href="{{ route('services.edit',3)}}" class="btn btn-primary">Content 2</a>
            <a onclick="myFunction(this)" href="{{ route('services.edit',4)}}" class="btn btn-primary">Content 3</a>
            <a onclick="myFunction(this)" href="{{ route('services.edit',5)}}" class="btn btn-primary">Content 4</a>
            <a onclick="myFunction(this)" href="{{ route('services.edit',6)}}" class="btn btn-primary">Content 5</a>
            <a onclick="myFunction(this)" href="{{ route('services.edit',7)}}" class="btn btn-primary">Content 6</a>
        </td>
        {{-- <select class="form-control form-control" id="defaultSelect">
            <option href="{{ route('services.edit',1)}}">1</option>
            <option href="{{ route('services.edit',2)}}">2</option>
            <option href="{{ route('services.edit',3)}}">3</option>
            <option href="{{ route('services.edit',4)}}">4</option>
            <option href="{{ route('services.edit',5)}}">5</option>
        </select> --}}
    </div>

        <div class="form-group">

            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <form id="file-upload-form" class="uploader"  action="{{ route('services.update', $services->id) }}"  method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <h3> <b> {{$services->name}}</b></h3>
                <br>
                @if ($services->name ==="Background Picture")

                @else
                    <label for="heading">Headline</label>
                    <textarea class="form-control" id="heading" name="heading" rows="1"  >{{ $services->heading }}</textarea>
                    <br>
                    <label for="editor">Content</label>
                    <textarea class="form-control" id="editor" name="editor"  >{{ $services->content }}</textarea>
                    <br>
                @endif

                @if ($services->name ==="Background Picture")
                    <br>
                    <img src=" {{Storage::url( $services->image)}} " height="30%" width="30%">
                    <br>
                    <br>
                    <input type="file" id="file-input" name="image" multiple />
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    <div id="thumb-output"></div>
                    <br>
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
