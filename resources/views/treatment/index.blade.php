@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <h1 style="margin: -10px 0px">Behandelingen</h1>
                    </div>
                </div>
                <hr>
                {{-- Magenetiseren card --}}
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-md-10">
                                <h1 class="card-title">Magnetiseren</h1>
                            </div>
                            <div class="col-md-2">
                                <h1>&euro; 22.50</h1>
                            </div>
                        </div>
                        <h2 style="font-size: 25px" class="card-subtitle mb-2 text-muted">Een krachtige methode van
                            herstel voor lichaam en geest</h2>
                        <p style="font-size: 18px; line-height: 130%" class="card-text">Door magnetiseren wordt de
                            balans tussen lichaam en geest herstelt en worden blokkades opgeruimd. Als magnetiseur
                            gebruik ik de universele energie die overal aanwezig is. Deze energie, ook wel kosmische of
                            Goddelijke energie genoemd, breng ik over op u zodat het herstelproces in gang wordt gezet.
                            De energie breng ik via mijn handen (strijken of handoplegging) over naar andere lichamen.
                            Een lichaam dat niet goed functioneert, hetzij
                            geestelijk en/of lichamelijk, heeft energie tekort of heeft een onbalans in de positieve en
                            negatieve energie. Door handoplegging hebben spiritueel genezers de mogelijkheid om een
                            uitwisseling te maken tussen negatieve en positieve energieën. Mede hierdoor kan er in het
                            lichaam een nieuwe balans gemaakt worden die, op zijn beurt, weer tot genezing kan leiden.
                            Sommige cliënten ervaren tijdens het magnetiseren lichamelijke en geestelijke
                            gewaarwordingen. Deze sensaties verschillen per persoon. Enkele mogelijke sensaties zijn
                            warm of koud gevoel, tintelingen, ontspanning, spiertrekkingen, vrijkomende emoties. Deze
                            ervaringen onstaan door opnieuw of anders stromen van de energiestroom van de client.</p>
                    </div>
                </div>

                {{-- Voetreflex card --}}
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-md-10">
                                <h1 class="card-title">Voetreflexologie</h1>
                            </div>
                            <div class="col-md-2">
                                <h1>&euro; 22.50</h1>
                            </div>
                        </div>
                        <p style="font-size: 18px; line-height: 130%" class="card-text">Dit is een therapie,
                            drukpuntmassage, die aan de voeten wordt uitgevoerd. Op de voeten zijn klachten te herkennen
                            middels prikkelingen en pijnpunten. Deze zones geven een indicatie voor de mogelijke oorzaak
                            van
                            de klacht. Alle meridianen van het lichaam komen uit onder de voeten en langs de zijkanten
                            van
                            de voeten. Door hier een lichte acupressuur op uit te oefenen komt er een tegendruk in de
                            meridiaan die de eventuele blokkades op kan heffen en als zodanig tot genezing kan leiden.
                            Anders gezegd, door het masseren van de voeten wordt de doorstroming van energie bevorderd,
                            waardoor blokkades kunnen worden opgeruimd en het lichaam zijn kracht hervindt. De
                            voetreflexzonetherapie behandelt de gehele mens en niet alleen het ziekteverschijnsel.</p>
                    </div>
                </div>

                {{-- Fotodiagnose card --}}
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-md-10">
                                <h1 class="card-title">Fotodiagnose</h1>
                            </div>
                            <div class="col-md-2">
                                <h1>&euro; 7.50</h1>
                            </div>
                        </div>
                        <p style="font-size: 18px; line-height: 130%" class="card-text">Bij fotodiagnose doet u mij een
                            foto
                            toekomen. Deze foto kan ik spiritueel lezen en zo vaststellen waar blokkades in het lichaam
                            zitten welke voor pijn en eventueel ziektes kunnen zorgen. Naar aanleiding van deze
                            blokkades
                            wordt u advies gegeven wat mogelijkerwijs een passende behandeling is.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 card align-self-start">
                @include('includes.aside')
            </div>
        </div>
    </div>
@endsection