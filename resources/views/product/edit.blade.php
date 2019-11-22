@extends('layouts.app')

@section('script_header')
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.tinymce'
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Product bewerken</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <p>Er is iets mis gegaan bij het maken van het product.</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.update', $product->id) }}" method="post">
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
                    <label>Product category:</label>
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
                <div class="col-md-12">
                    <label>Product foto:</label>
                    <input type="file" name="product_image" class="form-control">
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product beschrijfing kort:</label>
                    <textarea class="form-control tinymce" name="summary" rows="10">{{ $product->summary }}</textarea>
                    <br>
                </div>
                <div class="col-md-12">
                    <label>Product beschrijfing:</label>
                    <textarea class="form-control tinymce" name="description" rows="20">{{ $product->description }}</textarea>
                    <br>
                </div>

                <div class="col-md-12">
                    <a style="font-size: 20px" href="{{ route('admin.index') }}" class="btn btn-sm btn-success">Terug</a>
                    <button style="font-size: 20px" type="submit" class="btn btn-sm btn-primary">Update product</button>
                </div>
            </div>
        </form>
    </div>
@endsection