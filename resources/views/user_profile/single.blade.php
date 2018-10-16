@extends('layouts.main')

@section('content')

<div class="container">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/uploads/avatars/{{$user->avatar}}">
        <div class="card-body">
            <h4 class="card-title">{{$user->name}}</h4>
            <p class="card-text">{{$userProfile->slug}}</p>

            {{-- //edit --}}
        @can('update', $userProfile)
            <div class="form-row">

                <a href="{{route('userProfile.edit', $userProfile->id)}}" class="btn btn-primary btn-xs">Edit</a>
                {{-- //delete --}}
                <form action="{{route('userProfile.destroy', $userProfile->id)}}" method="post" class="form-inline">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}

                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">

                </form>
            </div>
        </div>
    </div>
        @endcan

    {{-- Answer/comment --}}
    <div class="content">

        @foreach($userProfile->comments as $comment)

            <h4>{{$comment->body}}</h4>
            <legend>{{$comment->user->name}}</legend>

    </div>

</div>

<br>

    <div class="comment-form">
        <form action="{{route('userProfilecomment.store', $comment->id)}}" method="post" role="form">
            {{csrf_field()}}

            <legend>Create comment</legend>

            <div class="form-group">
                <input type="text" class="form-control" name="body" id="" placeholder="Input...">
            </div>

            <button type="submit" class="btn btn-primary">Comment</button>
        </form>
    </div>

@endforeach

@endsection