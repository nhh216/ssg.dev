@extends('frontend::layouts.master_new')
@push('top')
    <link rel="stylesheet" href="css/style-new.css">
@endpush
@section('content')



    <div class="row">

        @include('frontend::modules.new.list_new')
        @include('frontend::modules.new.sidebar')

    </div>
@endsection
