<!DOCTYPE html>
<html>
<head>
    @include('layouts.partials._meta')

    <title>{{ config('app.name', 'Callboard') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css">
</head>

<body class="main">

<div id="app">

    @include('layouts.partials._navbar')

    <div class="container">

    @include('layouts.partials._errors')

    @include('layouts.partials._success')


        <div class="row">

            @section('profile')
                @include('layouts.partials._main_activities')
            @show

            <div class="col-md-9">
                <div class="row">

                    <h4>@yield('heading')</h4>

                </div>
                <div class="text-left" >

                    @yield('content')

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Scripts -->

{{--<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
--}}
<script src="{{ asset('js/app.js') }}"></script>

@yield('js')

</body>
</html>
