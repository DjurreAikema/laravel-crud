@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Bewerk {{ $product->name }}</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <p>Er is iets mis gegaan bij het bewerken van het product.</p>
                <u>
                    @foreach($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </u>
            </div>
        @endif

        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <label>Product naam:</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product prijs:</label>
                    <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product categorie:</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option class="form-control" value="{{ $category->id }}"
                                    @if($category->id == $product->category_id)
                                    selected
                                    @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                </div>
                {{-- TODO Figure this out --}}
                <div class="col-md-12">
                    <label>Product foto:</label>
                    <input type="file" name="product_image" class="form-control">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product beschrijfing kort:</label>
                    <textarea class="form-control" name="summary" rows="4">{{ $product->summary }}</textarea>
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product beschrijfing:</label>
                    <textarea class="form-control" name="description" rows="17">{{ $product->description }}</textarea>
                    <br>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('admin.index') }}" class="btn btn-sm btn-success">Terug</a>
                    <button type="submit" class="btn btn-sm btn-primary">Product opslaan</button>
                </div>
            </div>
        </form>
    </div>
@endsection