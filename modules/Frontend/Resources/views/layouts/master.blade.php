<!DOCTYPE html>
<html lang="en">
<head>
        @include('frontend::includes.script_top')
</head>
<body>
<div class="contain-fluid">
    @include('frontend::modules.header')

    @include('frontend::modules.slider')

    @include('frontend::modules.navi_category')

    @include('frontend::modules.banner')

    @include('frontend::modules.new')

    @include('frontend::modules.footer')
</div>
@include('frontend::includes.script_bot')
</body>
</html>
