<!DOCTYPE html>
<html>
<head>
    @include ('backend::include.script_top_2')
    @stack('top')
</head>
<body class="app">
@include('backend::modules.sidebar_2')
@include('backend::modules.header')

@yield('content')

@include ('backend::modules.footer')
@include ('backend::include.script_bot_2')
@stack('bot')
</body>
</html>