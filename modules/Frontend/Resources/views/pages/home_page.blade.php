@extends('frontend::layouts.new_layoyut')
@push('top')
    <link rel="stylesheet" href="css/homepage_style.css">
    <link rel="stylesheet" type="text/css" href="css/style-product.css"/>
    <title>Mã giảm giá - So sánh giá</title>
@endpush
@section('content')


    @include('frontend::modules.banner_top')

    @include('frontend::modules.navi_category_2')

    @include('frontend::modules.new_list_coupon')

    @include('frontend::modules.banner_2')

    @include('frontend::modules.post_in_home')

    @include('frontend::modules.footer_home')


@endsection