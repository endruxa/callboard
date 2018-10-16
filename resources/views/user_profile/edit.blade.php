@extends('layouts.main')

@section('heading', "Create Profile")

@section('content')

    <div class="row">

        <div class="container-fluid">

            <form class="form-group" action="{{route('userProfile.edit', $userProfile->id)}}" method="post" role="form" id="create-profile-form">
                {{csrf_field()}}
                {{method_field('put')}}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name"
                               placeholder="Enter First Name..."
                               value="{{$userProfile->first_name}}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="" placeholder="Enter Last Name..."
                               value="{{$userProfile->last_name}}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="main_activity">Activity</label>
                    <select class="form-control" multiple name="main_activity[]" id="main_activity">
                        @foreach($activities as $activity)
                        <option value="{{$activity->id}}">{{$activity->main_activity}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-row">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" name="description" id="description"
                              required>{{$userProfile->description}}</textarea>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">Edit</button>

            </form>

        </div>

    </div>

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>

    <script>
        $(function () {
            $('#main_activity').selectize();
        });
        $(function () {
            $('#role').selectize();
        })
    </script>
@endsection
