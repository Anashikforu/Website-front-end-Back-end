@extends('admin.layouts.app')

@section('content')
<div class="content">
    <div class="form-group">
        <h1>Product</h1><br>
    </div>

        <div class="form-group">

            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <form id="file-upload-form" class="uploader"  action="{{ route('product.update', $product->id) }}"  method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <h3> <b> Section {{$product->id}}</b></h3>
                <br>
                <label for="heading">Headline</label>
                <textarea class="form-control" id="heading" name="heading" rows="1"  >{{ $product->heading }}</textarea>
                <br>
                <label for="editor">Category :</label>
                <select class="form-control" id="editor" name="editor">
                    <option value=" ">------Select------</option>
                    <option value="Development">Development</option>
                    <option value="Work">Work</option>
                </select>
                <br>
                <br>
                <label for="file-input">Featured Picture</label>
                <br>
                <img src=" {{Storage::url( $product->image)}} " height="30%" width="30%">
                <br>
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


