@extends('site.layouts.app')

@section('header')
    <div class="header--intro header--center">
        <h1>{{ $item->title }}</h1>
    </div>
@stop

@section('headerBackground')
    <img class="header--background-small" src="https://dutchlaravelfoundation.nl/img/linesD@2x.png" alt="Dutch Laravel Foundation">
@stop

@section('content')
    <section class="section-about">
        <div class="container container--small">
            {!! $item->renderBlocks() !!}
        </div>
    </section>
@stop
