
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/src/assets/img/favicon.png')}}" />
    @include('layouts/sections/layout')

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    @include('layouts/sections/style')
</head>
<body class="layout-boxed">
    @include('layouts/sections/loader')
    @include('layouts/panels/navbar')

    <div class="main-container" id="container">
        @include('layouts/sections/overlay')
        @include('layouts/panels/sidebar')
        @include('layouts/panels/content')
    </div>

    @include('layouts/sections/script')
</body>
</html>