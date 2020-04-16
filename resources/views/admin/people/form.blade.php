@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'url',
        'label' => 'URL',
    ])

    @formField('medias', [
        'name' => 'profile',
        'label' => 'Profile image',
    ])
@stop
