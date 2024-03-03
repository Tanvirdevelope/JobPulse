@extends('layouts.welcome-layout')
@section('content')
    @include('components.welcome.home.menubar')
    @include('components.welcome.job.job-details')
    @include('components.welcome.home.footer')
@endsection