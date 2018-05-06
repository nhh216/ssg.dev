@extends('frontend::layouts.master')
@section('content')

    @include('frontend::modules.header')

    @include('frontend::modules.slider')

    @include('frontend::modules.navi_category')

    @include('frontend::modules.banner')

    @include('frontend::modules.new')

    @include('frontend::modules.footer')

    @include('frontend::includes.script_bot')

@endsection
