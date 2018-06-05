@extends('frontend::layouts.new_layoyut')
@push('top')
    <link rel="stylesheet" type="text/css" href="css/style-detail-product.css"/>
@endpush
@section('content')

    @include('frontend::modules.detail_product.detail_product')

    @include('frontend::modules.product.bot_new')

    <div id="go-top" title="Lên đầu trang">
        <i class="ssg-icon icon-arrow-right"></i>
    </div>
@endsection
@push('bot')

@endpush