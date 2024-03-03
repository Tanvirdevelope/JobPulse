@extends('layouts.welcome-layout')
@section('content')
    @include('components.welcome.home.menubar')
    @include('components.welcome.contact.contactDetails')
    @include('components.welcome.home.footer')
@endsection