@extends('layouts.master')

@section('konten')
<!-- PROSES ORDER -->
<div class="container">
    <div class="text-center mt-3">
        <h2>Order</h2>
    </div>
    <div class=" mt-5 d-flex justify-content-center">
        <div class="card w-75">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/upload/{{ $products->img_path }}" class="card-img" alt="gambar">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $products->name }}</h3>
                            <p class="card-text">{{ $products->description }}</p>
                            <p class="card-text">Stock: {{ $products->stock }}</p>
                            <h3 class="card-text">${{ $products->price }}.00</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <div class="card w-75">
            <div class="card-body">
                <h3 class="card-title text-center">Buyer Information</h3>

                <form action="/order" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="name" value="{{ $products->name }}">
                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                    <input type="hidden" name="price" value="{{ $products->price }}">
                    @csrf
                    <div class="form-group">
                        <label for="buyer_name">Name</label>
                        <input type="text" class="form-control" id="buyer_name" name="buyer_name" placeholder="Name">

                    </div>
                    <div class="form-group">
                        <label for="buyer_contact">Contact</label>
                        <input type="text" class="form-control" id="buyer_contact" name="buyer_contact" placeholder="Contact">
                    </div>
                    <div class="form-row form-group">
                        <div class="col-5">
                            <label for="qty">Quantity</label>
                            <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity">
                        </div>
                    </div>
                    <button class="btn btn-success mr-2" name="submit" type="submit">Submit</button>
                    <input type="hidden" name="name" value="{{ $products->name }}">
                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                    <input type="hidden" name="price" value="{{ $products->price }}">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection