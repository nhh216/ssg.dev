@extends('frontend::layouts.master')
@push('top')
    <link rel="stylesheet" href="css/homepage_style.css">
    <title>Mã giảm giá - So sánh giá</title>
@endpush
@section('content')
    @include('frontend::modules.header')

    @include('frontend::modules.banner_1')

    @include('frontend::modules.navi_category')

        @include('frontend::modules.coupon.list_coupon')

    @include('frontend::modules.banner_2')

    @include('frontend::modules.new')

    @include('frontend::modules.footer')

    @include('frontend::includes.script_bot')

@endsection
