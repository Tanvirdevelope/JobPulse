@extends('layouts.welcome-layout')
@section('content')
    @include('components.welcome.home.menubar')
    @include('components.welcome.job.jobBanner')
    @include('components.welcome.home.recentJob')
    @include('components.welcome.home.footer')
@endsection