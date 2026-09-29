@extends('layout')

@section('seo')
    <title>{{ trans('about.meta-title') }}</title>
    <meta name="description" content="{{ trans('about.meta-description') }}">
    <meta name="author" content="Velina Grebenska">
@endsection

@section('css')

<style>
    .about-page{
        margin-top:200px;
        padding-bottom:60px;
    }
    .about-page ul li{
        font-size:1.2rem;
        text-align: left;
        overflow-wrap: anywhere;
    }
    .about-page p.font-weight-bold{
        font-size:1.6rem;
        font-weight:bold;
        color:#a81c51;
    }
    .about-page h5{
        font-size:1.6rem;
    }
</style>
@endsection

@section('content')
{{-- #main is closed in the footer component --}}
<div id="main">
    <div class="container about-page">
        <div class="main-title">
            <h3>{{ trans('welcome.about') }}</h3>
        </div>
        <h5 style="text-align: center;">{{ trans('about.biography') }}</h5>

        @foreach(['education', 'solo', 'group', 'projects', 'plein-air', 'awards'] as $section)
            <hr>
            <p class="font-weight-bold">{{ trans("about.$section-heading") }}</p>
            <ul>
                @foreach(trans("about.$section") as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endforeach
    </div>
@endsection
