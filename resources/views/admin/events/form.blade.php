@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('date_picker', [
        'name' => 'date',
        'label' => 'Date',
        'withTime' => false
    ])
@stop
