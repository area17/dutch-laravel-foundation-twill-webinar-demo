@extends('site.layouts.app')

@section('header')
    <div class="header--intro header--center">
        <h1>Webinar Twill: an open source CMS toolkit for Laravel</h1>
    </div>
@stop

@section('headerBackground')
    <img class="header--background-small" src="https://dutchlaravelfoundation.nl/img/linesD@2x.png" alt="Dutch Laravel Foundation">
@stop

@section('content')
    <section class="section-about section-calendar">
        <div class="container">
            <article class="section-calendar--description">
                <ul>
                    <li>
                        <span>Soort event:</span>
                        Meetup
                    </li>
                    <li>
                        <span>Datum:</span>
                        16 April van 16:00 tot 17:30
                    </li>
                    <li>
                        <span>Locatie:</span>
                        Webinar
                    </li>
                    <li>
                        <span>Adres:</span>
                        -
                    </li>
                </ul>

                <p>Op 16 april van 16:00 tot +/- 17:30 organiseren we vanuit de Dutch Laravel Foundation een webinar over Twill (<a href="https://twill.io/" target="_blank">https://twill.io/</a>).</p>

                <p>Twill is een open source CMS toolkit voor Laravel. Voor eindgebruikers is er een intuïtieve GUI met alle moderne features die je van een CMS mag verwachten en voor developers zijn er enorm veel mogelijkheden om het CMS te customizen naar je eigen wensen.</p>

                <p>AREA17 (<a href="https://area17.com/" target="_blank">https://area17.com/</a>), een van de grootste Digital Agencies ter wereld, is de initiatiefnemer achter Twill en zij zullen dan ook speciaal voor de DLF dit webinar verzorgen.</p>

                <p>Tijdens het webinar wordt zowel de functionele, als de technische kant van Twill besproken. Ook is er ruimte voor een Q&amp;A met de mensen achter Twill. Het programma is als volgt:</p>

                <p>
                    Intro (5-10 min)<br>
                    Twill presentation (~30 min)<br>
                    Twill code demo (~30 min)<br>
                    Q&amp;A (15-20 min)<br>
                </p>

                <p>Ben je er (online) bij? Laat het dan even weten via onze meet-up, dan sturen we je t.z.t. de link. Tot de 16e!</p>

                <a href="https://www.meetup.com/nl-NL/meetup-group-NBzJdgRH/events/269886294/" target="_blank" class="button button--primary">Inschrijven</a>

            </article>

            <a href="https://dutchlaravelfoundation.nl/calendar">← Terug naar de agenda</a>
        </div>
    </section>
@stop
