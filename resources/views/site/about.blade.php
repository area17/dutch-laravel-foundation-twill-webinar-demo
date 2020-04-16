@extends('site.layouts.app')

@section('header')
    <div class="header--intro header--center">
        <h1>Over ons</h1>
    </div>
@stop

@section('headerBackground')
    <img class="header--background-small" src="https://dutchlaravelfoundation.nl/img/linesD@2x.png" alt="Dutch Laravel Foundation">
@stop

@section('content')
    <section class="section-about">
        <div class="container container--small">
            @component('site.partials.text-section')
                <h2>De kennis- en brancheorganisatie voor Laravel developers</h2>

                <p>
                    Met goedkeuring van Taylor Otwell, bedenker van het Laravel Framework, heeft een
                    zevental bedrijven het initiatief genomen om het gebruik van Laravel in Nederland verder te
                    professionaliseren. In juni 2019 is daarom de Dutch Laravel Foundation opgericht.
                </p>

                <p>
                    Het doel van de stichting is tweeledig. Enerzijds mogen opdrachtgevers, die één van onze leden inschakelt voor het bouwen van een webapplicatie, ervan uitgaan dat ze met professionele Laravel developers in zee gaan.
                    Dat is prettig werken! Anderzijds zorgt de
                    stichting voor onderlinge kennisuitwisseling tussen de leden, om zo de kennis en kwaliteit
                    van het Laravel framework in Nederland naar een nog hoger niveau te tillen.
                </p>

                <p>
                    Als stichting zijn we in Nederland tevens actief in het promoten van Laravel onder potentiële
                    opdrachtgevers voor nieuwe webapplicaties.
                </p>
            @endcomponent

            <article class="section-about--management">
                <h3>Het bestuur</h3>

                <p>
                    De Dutch Laravel Foundation wordt gerund door een enthousiast bestuur van vijf vrijwilligers die in de dagelijkse praktijk ook met Laravel werken
                </p>

                @include('site.partials.members')

                <h3>Founding partners</h3>
                <p>
                    De volgende bedrijven hebben in 2019 gezamenlijk gewerkt aan de oprichting van de Dutch
                    Laravel Foundation.
                </p>

                @include('site.partials.founders')
            </article>
        </div>
    </section>
@stop
