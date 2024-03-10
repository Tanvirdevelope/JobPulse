@extends('layouts.dashboard-layout')
@section('content')

    @include('profile.partials.profile-update')
    @include('profile.partials.update-password-form')
    @include('profile.partials.delete-user-form')

@endsection

