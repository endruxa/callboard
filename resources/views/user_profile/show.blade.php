@extends('layouts.main')

@section('profile')

    <div class="col-md-3">
        <div class="dp">
            <img src="/uploads/avatars/{{$user->avatar}}" class="avatar">
        </div>
        <h3>
            {{$userProfile->name}}
        </h3>
    </div>

@endsection

@section('content')

    <div>
        <h3>{$userProfile->name}}'s latest Comments</h3>

        @forelse($userProfile as $profile)
            <h5>{{$profile->slug}}</h5>

        @empty
            <h5>No profile</h5>
        @endforelse
        <br>
        <hr>

        @forelse($comments as $comment)
            <h5>{{$user->name}} commented on <a href="{{route('userProfile.show', $comment->commentable->id)}}">{{$comment->commentable->subject}}</a> {{$comment->created_at->diffforHumans()}}</h5>
        @empty
            <h5>No comments yet</h5>
        @endforelse
    </div>

@endsection


