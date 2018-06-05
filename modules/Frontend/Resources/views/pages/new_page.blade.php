@extends('frontend::layouts.new_layoyut')
@push('top')
    <link rel="stylesheet" href="css/style-new.css">
@endpush
@section('content')
    @include('frontend::modules.bradcrumb.bradcrump')
    <div class="row">

        @include('frontend::modules.new.list_new')

        @include('frontend::modules.new.sidebar')

    </div>
@endsection
