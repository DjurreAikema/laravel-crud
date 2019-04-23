@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Edit product</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <p>There were some problems with your input.</p>
                <u>
                    @foreach($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </u>
            </div>
        @endif

        <form action="{{ route('product.update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <label>Product name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product price:</label>
                    <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                    <br>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Update product</button>
                </div>
            </div>
        </form>
    </div>
@endsection