@extends('layouts.company.sidenav-layout')
@section('content')
    @include('components.company.category.category-list')
    @include('components.company.category.category-create')
    @include('components.company.category.category-edit')
@endsection