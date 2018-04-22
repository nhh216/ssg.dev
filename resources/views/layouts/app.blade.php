<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('top')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

</body>
@stack('tail')
</html>
