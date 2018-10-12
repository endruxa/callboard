@extends('layouts.main')

@section('heading', "Create Profile")

@section('content')

    <div class="row">
        <div class="container-fluid">
            <form class="form-group" action="{{route('profile.store')}}" method="post" role="form" id="create-profile-form">
                {{csrf_field()}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" value="{{old('first_name')}}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value="{{old('last_name')}}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address" {{ $errors->has('email') ? ' is-invalid' : '' }}  value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Sex</label>
                        <select name="gender" class="form-control">
                            <option value="no">No selected</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-line">
                        <div class="input">
                            <label for="birth_date_day">Day of birth</label>
                            <select name="birth_date_day" id="birth_date_day" class="select">
                                <option value="">{{date('')}}</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="birth_date_day">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value="{{old('last_name')}}" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value="{{old('last_name')}}" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value="{{old('last_name')}}" required>
                </div>


                <hr>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

@endsection