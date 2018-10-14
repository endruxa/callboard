@extends('layouts.main')

@section('heading')


        <a class="pull-right btn btn-sm btn-primary" href="{{route('create_profile')}}">Create profile</a>


@endsection

@section('content')

    @include('user_profile.partials._profile_list')

@endsection
