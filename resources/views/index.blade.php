@extends('layouts.main-layout')
@section('pageTitle',isset($pageTitle) ? $pageTitle : "Home")
@section('content')
    @include('about')
    @include('experience')
    @include('services')
    @include('counters')
    @include('portfolio')
    @include('testimonials')
    @include('contact')
@endsection