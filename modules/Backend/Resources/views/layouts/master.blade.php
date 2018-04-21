<!DOCTYPE html>
<html>
    @include ('backend::include.script_top')
    @stack('top')
<body class="app">
<div id="loader">
    <div class="spinner"></div>
</div>

    @include('backend::modules.sidebar')
    @include('backend::modules.header')

    @include ('backend::include.script_bot')
    @stack('bot')
</body>

</html>