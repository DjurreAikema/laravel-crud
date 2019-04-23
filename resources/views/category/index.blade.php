@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>Categories</h3>
            </div>
            <div class="col-md-2">
                <a class="btn btn-sm btn-success" href="{{ route('category.create') }}">Create new category</a>
            </div>
        </div>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row">
            <div class="col-md-10">
                <ul>
                    @foreach($categories as $category)
                        <li>
                            {{ $category->name }}
                            <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                <a class="btn btn-sm btn-warning"
                                   href="{{ route('category.edit', $category->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>

                {!! $categories->links() !!}
            </div>
        </div>
    </div>
@endsection