@extends('frontend::layouts.new_layoyut')
@push('top')
    <link rel="stylesheet" href="css/style-new.css">
@endpush
@section('content')
    <div class="row">

        @include('frontend::modules.new.detail_new')
        @include('frontend::modules.new.sidebar')

        @include('frontend::modules.new.sp_lienquan')
    </div>

@endsection
