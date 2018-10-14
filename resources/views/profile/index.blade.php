@extends('layouts.main')

@section('heading')

    <a class="btn btn-primary pull-right" href="{{route('profile.create')}}">Create profile</a>

@endsection

@section('content')

    @include('profile.partials._profile_list')

@endsection