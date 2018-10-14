
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel-panel-default">
            <div class="panel-heading">

                <div class="panel-body">
                    <div class="row">

                        @forelse($profiles as $profile)

                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3><a href="{{route('edit_profile', ['id' => $profile->id])}}">{{$profile->name}}</a></h3>
                                        <p>{{str_limit($profile->description, 50)}}</p>
                                        @can('update-profile')
                                            <p>
                                                <a href="{{route('edit_profile', ['id' => $profile->id])}}" class="btn btn-sm btn-default"
                                                role="button">Edit</a>
                                            </p>
                                        @endcan
                                    </div>
                                </div>
                            </div>

                        @empty

                            <h5>No profile</h5>

                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


