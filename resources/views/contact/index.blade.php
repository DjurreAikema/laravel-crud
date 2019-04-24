@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <h1 style="margin: -5px 0px">Contact</h1>
                    </div>
                </div>
                <hr>
                {{-- Introduction card --}}
                <div class="card mb-3">
                    <div class="card-body">
                        <p style="font-size: 18px; line-height: 130%" class="card-text">
                            Praktijk voor alternatieve geneeswijzen P.I. Mulder<br>
                            Ten Hooringerlaan 27<br>
                            8431 AL Oosterwolde<br><br>
                            Telefoon: 0516-514973<br>
                            of Email: pietmulder@kpnplanet.nl<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 card align-self-start">
                @include('includes.aside')
            </div>
        </div>
    </div>
@endsection