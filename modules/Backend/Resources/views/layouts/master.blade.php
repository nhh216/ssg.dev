<!DOCTYPE html>
<html>
<head>
    @include ('backend::include.script_top')
    @stack('top')
</head>
<body class="app">
@include('backend::modules.sidebar')
@include('backend::modules.header')

    @yield('content')

@include ('backend::modules.footer')
@include ('backend::include.script_bot')
@stack('bot')
</body>
</html>