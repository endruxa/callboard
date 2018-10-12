<div class="list-group">
    @forelse($profiles as $profile)

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="{{route('profile.show.show', $profile->id)}}">{{$profile->description}}</a></h3>
            </div>
            {{--<div class="panel-body">
                <p>{{str_limit($thread->thread, 100)}}
                    <br>
                    Posted by <a href="{{route('profile.show', $profile->user->name)}}">{{$thread->user->name}}</a>{{$thread->created_at->diffforHumans()}}
                </p>
            </div>--}}
        </div>

    @empty

        <h5>No profile</h5>

    @endforelse

</div>