@extends('site.layouts.app')

@section('header')
    <div class="header--intro">
        <h1>De kennis- en brancheorganisatie voor Laravel developers</h1>
        <p>
            De Dutch Laravel Foundation zorgt voor de promotie van Laravel en stimuleert kennisuitwisseling
            tussen Laravel developers in Nederland. Opdrachtgevers van webapplicaties kunnen via de stichting
            geschikte Laravel developers vinden.
        </p>
    </div>

    <div class="header--buttons">
        <a href="https://dutchlaravelfoundation.nl/our-members" class="button button--black">Zoek een lid</a>
        <a href="https://dutchlaravelfoundation.nl/become-member" class="button button--white">Lid worden</a>
    </div>
@stop

@section('headerBackground')
    <img class="header--background" src="https://dutchlaravelfoundation.nl/img/background_logo.png" alt="Dutch Laravel Foundation">
@stop

@section('content')
    <section class="section-about">
        <div class="container container--small">
            @component('site.partials.text-section', ['centered' => true])
                <h2>De populariteit van Laravel</h2>
                <p>
                    Wereldwijd zijn meer dan een miljoen websites en applicaties gebouwd met behulp van
                    Laravel. In Nederland is Laravel bekroond tot “Most popular in the Web App category”
                    <span class="source">(bron: BuiltWith.com)</span>. Met ruim 50.000 developers wereldwijd die gebruikmaken van het
                    framework, is het één van de grootste frameworks ter wereld.
                </p>
            @endcomponent

            @include('site.partials.stats')
        </div>
    </section>
@stop
