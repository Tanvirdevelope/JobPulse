@extends('layouts.welcome-layout')
@section('content')
    @include('components.welcome.home.menubar')
    @include('components.welcome.about.aboutBanner')
    @include('components.welcome.home.topCompanies')
    @include('components.welcome.home.footer')
@endsection