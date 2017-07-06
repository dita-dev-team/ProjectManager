<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Project Manager') }}</title>

    <!-- Styles -->
    @include('../includes/styles')

</head>
<body>
<div class="app">
    @include('../includes/nav')
    @yield('content')
</div>

@include('../includes/footer')

<!-- Scripts -->
@include('../includes/scripts')

</body>
</html>
