<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @include('../includes/styles')

</head>
<body>
<div class="app">
    @include('../includes/nav')
    @yield('content')
    @include('../includes/footer')
</div>

<!-- Scripts -->
@include('../includes/scripts')

</body>
</html>
