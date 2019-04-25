@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Categorie bewerken</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <p>Er is iets mis gegaan bij het bewerken van de categorie.</p>
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
                    <label>Categorie naam:</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                    <br>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">Bewerkingen opslaan</button>
                </div>
            </div>
        </form>
    </div>
@endsection