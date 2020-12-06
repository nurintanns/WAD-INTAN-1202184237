@extends('products.theme')

@section('content')
@if(!$order->isEmpty())
<div class="container w-75 text-center mt-4 mb-4">
    <h3>History</h3>
</div>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th class="w-50">Product</th>
                <th>Buyer Name</th>
                <th>Contact</th>
                <th>Amount</th>
            </tr>
        </thead>
    @foreach($order as $key => $order)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $order->product->name }}</td>
            <td>{{ $order->buyer_name }}</td>
            <td>{{ $order->buyer_contact }}</td>
            <td>{{ $order->amout }}</td>
        </tr>
    @endforeach
    </table>
</div>
@else
<div class="container w-75 text-center mt-4">
    <p>There is no data...</p>
    <div class="container text-center">
        <div class="row mb-2">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right mb-3">
                    <a class="btn btn-primary" href="{{ route('order.index') }}">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection