@extends('layouts.master')

@section('konten')

@if ($products->count())
<div class="container">
    <div class="text-center mt-3">
        <h1>Order</h1>
    </div>
    <!-- product ditambah -->
    <div class="row no-gutters">
        <div class="container mt-2">
            <div class="card-deck">
                <div class="col col-12">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-4 mt-3">
                            <div class="card card-home">
                                <img width="150" height="250" src="img/upload/{{ $product->img_path }}" class="card-img-top img-poster" alt="">
                                <div class="card-body">
                                    <h3>{{ $product->name }}</h3>
                                    <p class="card-text">
                                        <p>{{ $product->description }}</p>
                                        <h4>${{ $product->price }}.00</h4>
                                    </p>
                                    <a href="/ordernow/{{ $product->id }}" class="btn btn-success">Order Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <center>
        <div class="mt-5">
            <p>Theres no data</p>
            <a href="/addproduct" class="btn btn-dark">Add Product</a>
        </div>
    </center>
    @endif

    @endsection