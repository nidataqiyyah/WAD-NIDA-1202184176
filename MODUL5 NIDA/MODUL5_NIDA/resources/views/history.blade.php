@extends('layouts.master')

@section('judul', 'History')

@section('konten')
@if ($orders->count())
<center>
  <div class="container mt-5 text-center">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Product</th>
          <th scope="col">Buyer Nama</th>
          <th scope="col">Contact</th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1
        @endphp
        @foreach ($orders as $order)

        <tr>
          <th scope="row">{{$i}}</th>
          <td>{{ $order->product_id }}</td>
          <td>{{ $order->buyer_name }}</td>
          <td>{{ $order->buyer_contact }}</td>
          <td>${{ $order->amount }}.00</td>
        </tr>
        @php
        $i++
        @endphp
        @endforeach
      </tbody>
    </table>
  </div>
</center>
@else
<center>
  <div class="mt-5">
    <p>Theres no data</p>
    <a href="/order" class="btn btn-dark">Order Yuk:)</a>
  </div>
</center>
@endif

@endsection