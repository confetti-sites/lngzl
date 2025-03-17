@php(newRoot(new \model\homepage))

@extends('website.layouts.main')

@section('head_title', 'LNGZL | Website Ontwerp & Ontwikkeling | Internetbureau')

@section('content')
    @include('website.homepage.hero')
    @include('website.homepage.cta')
    @include('website.homepage.feature')
    @include('website.homepage.newsletter')
@endsection
