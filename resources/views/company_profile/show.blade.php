@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $profile->slug }}
                        <a class="btn btn-sm btn-default pull-right" href="{{ route('list_profiles') }}">Return</a>
                    </div>

                    <div class="panel-body">
                        {{ $profile->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

