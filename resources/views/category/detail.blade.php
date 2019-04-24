@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <h1 style="margin: -10px 0px">{{ $category->name }} producten</h1>
                    </div>
                </div>
                <hr>

                @include('includes.product')
            </div>
            <div class="col-md-3 card align-self-start">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h3 style="margin-left:-10px;margin-bottom: -7px;font-size: 20px">Product categorieën:</h3>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('product.index') }}">Alle producten</a>
                    </li>
                    @foreach($other_categories as $category)
                        <li class="list-group-item">
                            <a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection