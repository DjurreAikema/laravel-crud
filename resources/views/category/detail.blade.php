@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $category->name }}</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-9">
                @include('includes.product')
            </div>
            <div class="col-md-3 card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong style="margin-left:-10px;">Categories:</strong></li>
                    @foreach($other_categories as $category)
                        <li class="list-group-item"><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection