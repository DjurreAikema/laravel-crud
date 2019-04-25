@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Maak een nieuw product aan</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <p>Er is iets mis gegaan bij het maken van het product.</p>
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
                    <label>Product naam:</label>
                    <input type="text" name="name" class="form-control" placeholder="Product naam">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product prijs:</label>
                    <input type="text" name="price" class="form-control" placeholder="Product prijs">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product categorie:</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option class="form-control" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product foto:</label>
                    <input type="file" name="product_image" class="form-control">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product beschrijfing kort:</label>
                    <textarea class="form-control" name="summary" rows="4">Korte beschrijving van maximaal 225 karakters...</textarea>
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product beschrijfing:</label>
                    <textarea class="form-control" name="description" rows="17"></textarea>
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