@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-10">
                        <h3>{{ $category->name }} producten</h3>
                    </div>
                    <div class="col-md-2" style="margin-left: -100px">
                        <a class="btn btn-success" href="{{ route('product.create') }}">Nieuw product toevoegen</a>
                    </div>
                </div>
                <hr>

                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                @foreach($products as $product)
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img style="height: 220px" src="{{url("/media/{$product->product_image}")}}" class="card-img" alt="Product image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-md-10">
                                            <h3 class="card-title">{{ $product->name }}</h3>
                                        </div>
                                        <div class="col-md-2">
                                            <h3 class="card-text">&euro; {{ $product->price }}</h3>
                                        </div>
                                    </div>
                                    <p class="card-text">{{ $product->summary }}</p>
                                    <p style="margin-bottom: -15px" class="card-text">
                                        Te bestellen via telefoon: 0516-514973<br>of Email: pietmulder@kpnplanet.nl<br>
                                        <small class="text-muted"><a href="#">Verkoopvoorwaarden</a></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                <a class="btn btn-sm btn-primary"
                                   href="{{ route('product.edit', $product->id) }}">Product bewerken</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Product verwijderen</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                {!! $products->links() !!}

            </div>
            <div class="col-md-3 align-self-start">
                <div class="row">
                    <div class="col-md-12">
                        <h3>categorieën</h3>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-success" href="{{ route('category.create') }}">Nieuwe categorie toevoegen</a>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h3 style="margin-left:-10px;margin-bottom: -7px;font-size: 20px">Product categorieën:</h3>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('admin.index') }}">Alle producten</a>
                        </li>
                        @foreach($other_categories as $category)
                            <li class="list-group-item">
                                <a href="{{ route('admin.category.show', $category->id) }}">{{ $category->name }}</a>
                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                    <a class="btn btn-sm btn-primary"
                                       href="{{ route('product.edit', $product->id) }}">Product bewerken</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Product verwijderen</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection