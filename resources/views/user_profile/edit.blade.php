@extends('layouts.main')

@section('heading', "Create Profile")

@section('content')

    <div class="row">

        <div class="container-fluid">

            <form class="form-group" action="{{route('userProfile.edit', $userProfile->id)}}" method="post" role="form" id="create-profile-form">
                {{csrf_field()}}
                {{method_field('put')}}

                {{--Form include--}}
                @include('user_profile.partials._form')

                <hr>

                <button type="submit" class="btn btn-primary">Edit</button>

            </form>

        </div>

    </div>

@endsection
