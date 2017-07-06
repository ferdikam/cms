<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header>
        @include('partials.admin-nav')
    </header><!-- Top Header -->

    <div class="page-container">
        <div class="columns">
            <div class="column is-mobile page-content-wrapper">
                <div class="page-content m-t-20 m-l-20">
                    @yield('page-header')
                </div>
                <div class="wrapper-content">
                    @yield('content')
                </div><!-- wrapper-content -->
            </div>
        </div>
    </div>

</div>
</body>
</html>
