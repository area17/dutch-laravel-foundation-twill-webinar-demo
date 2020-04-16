@extends('site.layouts.app')

@section('header')
    <div class="header--intro header--center">
        <h1>Agenda</h1>
    </div>
@stop

@section('headerBackground')
    <img class="header--background-small" src="https://dutchlaravelfoundation.nl/img/linesD@2x.png" alt="Dutch Laravel Foundation">
@stop

@section('content')
    <section class="section-about">
        <div class="container container--small">
            <article class="section-about--calendar">
                @foreach($upcomingEvents as $event)
                    <a href="{{ route('event.show', [app()->getLocale(), $event->slug]) }}" class="section-about--calendar--article">
                        <div class="section-about--calendar--article--date-holder">
                            {{ $event->date }}
                        </div>
                        <div class="section-about--calendar--article--text-holder">
                            <p>{{ $event->title }}</p>
                            <p>
                                <em>
                                    {{ $event->description }}
                                </em>
                            </p>
                        </div>
                        {{-- <div class="section-about--calendar--article--image-holder" style="background-image: url('')"></div> --}}
                    </a>
                @endforeach
                <div class="section-about--calendar--divider">
                    <h2>Eerdere evenementen</h2>
                    <p>
                        <em>
                            Benieuwd welke evenementen de foundation in het verleden heeft georganiseerd? Zie onderstaand een overzicht van eerdere evenementen.
                        </em>
                    </p>
                </div>

                @foreach($pastEvents as $event)
                    <a href="{{ route('event.show', [app()->getLocale(), $event->slug]) }}" class="section-about--calendar--article">
                        <div class="section-about--calendar--article--date-holder">
                            {{ $event->date }}
                        </div>
                        <div class="section-about--calendar--article--text-holder">
                            <p>{{ $event->title }}</p>
                            <p>
                                <em>
                                    {{ $event->description }}
                                </em>
                            </p>
                        </div>
                        {{-- <div class="section-about--calendar--article--image-holder" style="background-image: url('')"></div> --}}
                    </a>
                @endforeach
            </article>
        </div>
    </section>
@stop
