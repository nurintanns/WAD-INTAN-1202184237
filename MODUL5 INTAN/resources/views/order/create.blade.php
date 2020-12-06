@extends('products.bootstrap')

@section('content')
<div class="container w-75 text-center mt-4">
    <h3>Order</h3>
</div>

<div class="container">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ asset($product->img_path) }}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Stock: {{ $product->stock }}</small></p>
                    <h3>${{ $product->price }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('error'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif


<div class="container">
    <div class="card mb-3">
        <div class="container w-75 text-center mt-4">
            <h3>Buyer Information</h3>
        </div>
        <div class="container w-75">
            <form action="{{ route('order.store') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="form-group">
                    <label for="buyer_name">Name</label>
                    <input type="text" class="form-control" id="buyer_name" name="buyer_name" placeholder= "Name">
                </div>
                <div class="form-group">
                    <label for="buyer_contact">Contact</label>
                    <input type="text" class="form-control" id="buyer_contact" name="buyer_contact" placeholder= "Contact">
                </div>
                <div class="form-group">
                    <label for="amount">Quantity</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder= "Quantity">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>

    </div>
</div>


@endsection