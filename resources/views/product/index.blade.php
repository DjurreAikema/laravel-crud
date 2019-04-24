@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <h1 style="margin: -10px 0px">Producten</h1>
                    </div>
                </div>
                <hr>

                @include('includes.product')
            </div>
            <div class="col-md-3 card align-self-start">
                @include('includes.aside')
            </div>
        </div>
    </div>
@endsection