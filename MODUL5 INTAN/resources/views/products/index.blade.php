@extends('products.theme')

@section('content')
@if(!$products->isEmpty())
<div class="container w-75 text-center mt-3">
    <h3>List Product</h3>
</div>

<div class="container">
    <div class="row mb-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-3">
                <a class="btn btn-primary" href="{{ route('products.create') }}">Add Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th class="w-50">Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>

        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$product->name}}</td>
            <td>${{$product->price}}</td>

            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
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


{!! $products->links() !!}

@endsection