<!DOCTYPE html>
<html>
<head>
    @include ('backend::include.script_top')
    @stack('top')
</head>
<body class="app">


    @yield('content')


    @stack('bot')
</body>
</html>