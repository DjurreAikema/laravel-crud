@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Create new product</h3>
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

        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>Product name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Product name">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product price:</label>
                    <input type="text" name="price" class="form-control" placeholder="Product price">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product category:</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option class="form-control" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product image:</label>
                    <input type="file" name="product_image" class="form-control">
                    <br>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Create product</button>
                </div>
            </div>
        </form>
    </div>
@endsection