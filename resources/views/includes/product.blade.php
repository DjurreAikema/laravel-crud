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
    </div>
@endforeach
{!! $products->links() !!}
