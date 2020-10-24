@extends('front.layouts.app')
@section('title','Services')
@section('page' ,__('front.services'))
@section('content')
    @include('front.internal-slider.index')
    @include('front.services.services')
@endsection
