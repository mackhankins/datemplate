<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    {!! seo_helper()->render() !!}--}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{ asset('openlayers/ol.css') }}" />--}}
@stack('styles')
{{--    @if(function_exists('era_localheader')) era_localheader(); @endif--}}
</head>
<body class="antialiased">
<header class="container-fluid header">
    <div class="container">
    <div class="logo-container">
        <img class="img-fluid" src="{{ asset('images/mdah.png') }}" />
    </div>
    @include('partials.nav')
    </div>
</header>
<div id="app">
