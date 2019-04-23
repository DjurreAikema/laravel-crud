@foreach($products as $product)
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="https://i.kym-cdn.com/photos/images/newsfeed/000/349/786/238.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">{{ $product->price }}</p>
                    <form action="{{ route('product.destroy', $product->id) }}" method="post">
                        <a class="btn btn-sm btn-success"
                           href="{{ route('product.show', $product->id) }}">Show</a>
                        <a class="btn btn-sm btn-warning"
                           href="{{ route('product.edit', $product->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{!! $products->links() !!}
