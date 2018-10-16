@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="/uploads/avatars/{{$user->avatar}}" class="avatar">
                <h2>{{ $user->name }}'s Profile</h2>
                <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label for="">Update Profile Image</label>
                    <input type="file" name="avatar">
                    <button type="submit" class="pull-right btn btn-sm btn-primary">Add avatar</button>
                </form>
            </div>
            <div class="col-md-4">
                <a class="pull-right btn btn-sm btn-primary" href="{{route('userProfile.create')}}">Create profile</a>
            </div>
        </div>
    </div>
@endsection
