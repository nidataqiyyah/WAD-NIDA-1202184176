@extends('layouts.master')

@section('konten')
@section('title', 'History')
@if ($products->count())
<div class="container">
    <div class="text-center mt-3">
        <h3>List Product</h3>
    </div>
    <a href="/addproduct" class="btn btn-dark">Add Product</a>

    <table class="table text-center mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=1
            @endphp
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}.00</td>
                <td class="align-content-left">
                    <div>
                        <form action="/delete/{{$product->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/update/{{ $product->id }}" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" type="submit"> Delete</button>
                        </form>
                </td>
            </tr>
            @php
            $i++
            @endphp
            @endforeach
        </tbody>
    </table>
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