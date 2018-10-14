<div class="list-group">
    @forelse($userProfile as $profile)

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="{{route('user.show', $profile->id)}}">{{$profile->subject}}</a></h3>
            </div>
            <div class="panel-body">
                <p>{{str_limit($profile->description, 100)}}
                    <br>
                    Posted by <a href="{{route('user.index', $profile->first_name)}}">{{$profile->first_name}}</a>{{$profile->created_at->diffforHumans()}}
                </p>
            </div>
        </div>

    @empty

        <h5>No profile</h5>

    @endforelse

</div>

