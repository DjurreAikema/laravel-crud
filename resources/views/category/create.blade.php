@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Maak een nieuwe categorie aan</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <p>Er is iets mis gegaan bij het maken van een nieuwe categorie.</p>
                <u>
                    @foreach($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </u>
            </div>
        @endif

        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>Categorie naam:</label>
                    <input type="text" name="name" class="form-control" placeholder="Categorie naam">
                    <br>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">Categorie opslaan</button>
                </div>
            </div>
        </form>
    </div>
@endsection