<div class="list-group">
    @forelse($profiles as $profile)

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="#">{{$profile->first_name}}</a></h3>
            </div>
        </div>

    @empty

        <h5>No profile</h5>

    @endforelse

</div>