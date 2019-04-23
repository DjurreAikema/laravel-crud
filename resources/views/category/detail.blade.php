@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $category->name }}</h3>
            </div>
            <hr>
            <div class="col-md-9">
                @foreach($products as $product)
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">{{ $product->price }}</p>
                                    <p class="card-text">{{ $product->category_id }}</p>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                        <a class="btn btn-sm btn-success"
                                           href="{{ route('product.show', $product->id) }}">Show</a>
                                        <a class="btn btn-sm btn-warning"
                                           href="{{ route('product.edit', $product->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $products->links() !!}
            </div>
            <div class="col-md-3">
                <ul>
                    @foreach($other_categories as $category)
                        <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection