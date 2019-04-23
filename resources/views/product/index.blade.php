@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>Products</h3>
            </div>
            <div class="col-md-2">
                <a class="btn btn-sm btn-success" href="{{ route('product.create') }}">Create new product</a>
            </div>
        </div>
        <hr>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row">
            <div class="col-md-9">
                @include('includes.product')
            </div>
            <div class="col-md-3">
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection