@extends('admin.layouts.app')

@section('content')
<div class="content">
    <div class="form-group">
        <h1>Products</h1><br>
        <h4>New Product</h4>
    </div>


        <div class="form-group">

            <form id="file-upload-form" class="uploader"  action="{{url('admin/pages/product')}}"  method="post" accept-charset="utf-8" enctype="multipart/form-data">
                @csrf
                <label for="heading">Headline</label>
                <textarea class="form-control" id="heading" name="heading" rows="1"></textarea>
                <br>
                <label for="editor">Content</label>
                <textarea class="form-control" id="editor" name="editor" rows="1"></textarea>
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


