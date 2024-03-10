@extends('layouts.dashboard-layout')
@section('content')
    @include('components.admin.category.category-list')
    @include('components.admin.category.category-create')
@endsection