@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="/uploads/avatars/{{$user->avatar}}" class="avatar">
                <h2>{{ $user->name }}'s Profile</h2>
                <form action="/profile" method="post" enctype="multipart/form-data">
                    <label for="">Update Profile Image</label>
                    <input type="file" name="avatar">
                    {{csrf_field()}}
                    <button type="submit" class="pull-right btn btn-sm btn-primary">Download</button>
                </form>
            </div>
        </div>
    </div>
@endsection
