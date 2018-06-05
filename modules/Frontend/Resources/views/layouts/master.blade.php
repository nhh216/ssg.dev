<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend::includes.script_top')
    @stack('top')
</head>
<body id="category">
<div class="container" id="app-5">
    @yield('content')

    @include('frontend::includes.script_bot')

    @stack('bot')
</div>
</body>
</html>
