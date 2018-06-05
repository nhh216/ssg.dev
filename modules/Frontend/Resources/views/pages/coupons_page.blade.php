@extends('frontend::layouts.new_layoyut')
@push('top')
    <link rel="stylesheet" href="css/style-new.css">
    <link rel="stylesheet" href="css/homepage_style.css">
    <link rel="stylesheet" type="text/css" href="css/style-product.css"/>
@endpush
@section('content')

    <div class="row">
        <div class="col-md-8">
        @include('frontend::modules.coupon.list_all_coupon')
            {{$listcoupon->render()}}
        </div>
        <div class="col-md-4">
        @include('frontend::modules.coupon.sidebar')
        </div>
    </div>
@endsection
