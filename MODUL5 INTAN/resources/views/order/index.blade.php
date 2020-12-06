@extends('products.theme')

@section('content')
@if(!$products->isEmpty())
<div class="container w-75 text-center mt-3 mb-3">
    <h3>Order</h3>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($products as $product)
        <div class="col mb-4">
            <div class="card h-100">
                <img src="{{ asset($product->img_path) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <h3 class="text-info"> ${{ $product->price }}</h3>
                </div>
                <div class="card-footer">
                    <a href="{{ route('order.show',$product->id) }}" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<div class="container w-75 text-center mt-3">
    <p>There is no data...</p>
    <div class="container text-center">
        <div class="row mb-2">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right mb-3">
                    <a class="btn btn-primary" href="{{ route('products.create') }}">Add Product</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection