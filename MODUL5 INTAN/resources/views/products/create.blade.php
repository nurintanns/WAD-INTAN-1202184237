@extends('products.bootstrap')

@section('content')
<div class="container w-50 text-center mt-3">
    <h3>Input Product</h3>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container w-50 mt-3">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="product name" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">$ USD</div>
                </div>
                <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="ex : 200" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="write description"
                required></textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" placeholder="ex: 3" required>
            </div>
        </div>

        <label>Image file input</label>
        <div class="form-group">
            <input type="file" name="img_path">
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>
@endsection
