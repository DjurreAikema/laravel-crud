@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Nieuwe categorie aanmaken</h3>
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

        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>Naam categorie:</label>
                    <input type="text" name="name" class="form-control" placeholder="Naam categorie">
                    <br>
                </div>
                <div class="col-md-12">
                    <a style="font-size: 20px" href="{{ route('admin.index') }}" class="btn btn-sm btn-success">Terug</a>
                    <button style="font-size: 20px"  type="submit" class="btn btn-sm btn-primary">Categorie aanmaken</button>
                </div>
            </div>
        </form>
    </div>
@endsection