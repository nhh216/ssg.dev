@extends('backend::layouts.master')
@push('top')

@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h4 style="margin-left: 10px;">Tiêu Đề Tin</h4>
            <div class="col-md-12">
                <input type="text" style="width:60%;" required>
            </div>
        </div>
        <div class="row" STYLE="margin-top: 10px;">
            <div class="col-md-12">
            <textarea name="editor" id="editor">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                    title="" data-original-title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                    title="" data-original-title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
            </textarea>
            </div>
        </div>
    </div>
@endsection
@push('bot')

    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('editor', options);
    </script>
@endpush