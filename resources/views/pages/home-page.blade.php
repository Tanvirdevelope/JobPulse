@extends('layouts.app')
@section('content')
    @include('components.welcome.home.menubar')
    @include('components.welcome.home.heroSlider')
    @include('components.welcome.home.recentJob')
    @include('components.welcome.home.topCompanies')
    @include('components.welcome.home.footer')
@endsection