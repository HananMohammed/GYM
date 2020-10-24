@extends('front.layouts.app')
@section('title','About Us')
@section('page' ,__('front.about'))
@section('content')
    @include('front.internal-slider.index')
    @include('front.about.about')
    @include('front.about.cards')
    @include('front.gallary.index')
@endsection
