@extends('front.layouts.app')
@section('title','Contact Us')
@section('page' ,__('front.about'))
@section('content')
    @include('front.internal-slider.index')
    @include('front.contact.form')
@endsection
