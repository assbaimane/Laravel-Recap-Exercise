@extends('front.layouts.app')

@section('content')
    @include('front/partials.preloader')
    @include('front/partials.popup')
    @include('front/partials.nav')
    @include('front/partials.banner')
    @include('front/partials.service')
    @include('front/partials.about')
    @include('front/partials.client')
    @include('front/partials.pricing')
    @include('front/partials.footer')
@endsection