@extends('frontend::layouts.new_layoyut')
@push('top')
    <link rel="stylesheet" type="text/css" href="css/style-product.css"/>
@endpush
@section('content')

    @include('frontend::modules.product.filter_product_2')

    @include('frontend::modules.product.list_product')

    @include('frontend::modules.product.footer_products')

@endsection
