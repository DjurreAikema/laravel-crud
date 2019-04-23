@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Edit category</h3>
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

        <form action="{{ route('category.update', $category->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <label>Category name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                    <br>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">Update category</button>
                </div>
            </div>
        </form>
    </div>
@endsection