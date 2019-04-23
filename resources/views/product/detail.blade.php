@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $product->name }}</h3>
            </div>
            <hr>
            <div class="col-md-12">
                {{ $product->price }}
            </div>
            <div class="col-md-12">
                <a href="{{ route('product.index') }}" class="btn btn-sm btn-success">Back</a>
            </div>
        </div>
    </div>
@endsection