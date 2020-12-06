@extends('layouts.master')

@section('konten')
<!-- input product -->
<div class="container">
    <div class="text-center mt-3">
        <h3>Input Product</h3>
    </div>

    <form action="/add" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">$USD</div>
                </div>
                <input type="text" class="form-control" id="price" name="price">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
        </div>
        <div class="form-row form-group">
            <div class="col-3">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
        </div>
        <div class="form-group form-row">
            <div class="col-3">
                <label for="img_path">Image file input</label>
                <div class="custom-file">
                    <input type="file" name="img_path" class="custom-file-input" id="img_path">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
        <button class="btn btn-dark mr-2" type="submit">Submit</button>
    </form>
</div>

@endsection