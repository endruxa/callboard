@extends('layouts.main')

@section('heading', "Create Profile")

@section('content')

    <div class="row">

        <div class="container-fluid">

            <form class="form-group" action="{{route('user.store')}}" method="post" role="form" id="create-profile-form">
                {{csrf_field()}}

                {{--Form include--}}
                @include('user_profile.partials._form')

                {{--<div class="form-group">
                    <label for="add_file">Add file</label>
                    <input type="file" multiple class="form-control-file" name="add_file[]" id="add_file">
                </div>--}}

                <hr>

                <button type="submit" class="btn btn-primary">Create</button>

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