@extends('layouts.main')

@section('heading', "Create Profile")

@section('content')

    <div class="row">

        <div class="container-fluid">

            <form class="form-group" action="{{route('store_profile')}}" method="post" role="form" id="create-profile-form">
                {{csrf_field()}}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name..."
                           value="{{old('first_name')}}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="" placeholder="Enter Last Name..."
                           value="{{old('last_name')}}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="main_activity">Activity</label>
                    <select class="form-control" multiple name="main_activity[]" id="main_activity">
                        <option value="Tennis">Tennis</option>
                        <option value="Paintball">Paintball</option>
                        <option value="Yoga">Yoga</option>
                    </select>
                </div>

                    <div class="form-row">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="3" name="description" id="description" required>{{old('description')}}</textarea>
                    </div>

                <br>
                <hr>

                {{--<div class="form-group">
                    <label for="add_file">Add file</label>
                    <input type="file" multiple class="form-control-file" name="add_file[]" id="add_file">
                </div>--}}

                <hr>

                <button type="submit" class="btn btn-primary">Submit</button>

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