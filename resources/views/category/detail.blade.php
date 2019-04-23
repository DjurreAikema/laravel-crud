@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $category->name }}</h3>
            </div>
            <hr>
            <div class="col-md-9">
                @include('includes.product')
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