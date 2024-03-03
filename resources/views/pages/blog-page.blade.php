@extends('layouts.welcome-layout')
@section('content')
    @include('components.welcome.home.menubar')
    @include('components.welcome.blog.blogDetails')
    @include('components.welcome.home.footer')
@endsection