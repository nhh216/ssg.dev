@extends('backend::layouts.master_layout')
@push('top')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <div class="block-header bg-dark">
                        <div class="block-title">
                            Thông tin
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="" method="post" id="form_gen">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <span class="input-group-btn">
                                    <a id="lfm-1" data-input="thumbnail" data-preview="holder"
                                       class="btn btn-outline-danger">
                                    <i class="fa fa-picture-o"></i>  Ảnh Banner 1
                                    </a>
                                    </span>
                                </div>
                                <div class="col-md-9">
                                    <input id="thumbnail" class="form-control" type="text" name="banner_3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <span>
                                    Link
                                    </span>
                                </div>
                                <div class="col-md-9">
                                    <input id="thumbnail" class="form-control" type="text" name="banner_3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <span class="input-group-btn">
                                    <a id="lfm-2" data-input="thumbnail" data-preview="holder"
                                       class="btn btn-outline-danger">
                                    <i class="fa fa-picture-o"></i>  Ảnh Banner 2
                                    </a>
                                    </span>
                                </div>
                                <div class="col-md-9">
                                    <input id="thumbnail" class="form-control" type="text" name="banner_3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <span>
                                    Link
                                    </span>
                                </div>
                                <div class="col-md-9">
                                    <input id="thumbnail" class="form-control" type="text" name="banner_3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <span class="input-group-btn">
                                    <a id="lfm-3" data-input="thumbnail" data-preview="holder"
                                       class="btn btn-outline-danger">
                                    <i class="fa fa-picture-o"></i>  Ảnh Banner 3
                                    </a>
                                    </span>
                                </div>
                                <div class="col-md-9">
                                    <input id="thumbnail" class="form-control" type="text" name="banner_3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <div class="col-md-3">
                                    <span>
                                    Link
                                    </span>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <input id="thumbnail" class="form-control" type="text" name="banner_3">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Lưu Lại</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block">
                    <div class="block-header bg-dark">
                        <div class="block-title">Xem trước</div>
                    </div>
                    <div class="block-content">
                        <div id="preview_content">
                            <div style="border:1px solid #eeeeee;max-width:720px; display: inline-flex;">
                                <div>
                                    <a href="#" class="maslink1" target="_blank"><img
                                                src="https://pub.masoffer.com/images/misc/cover_de.png"
                                                class="masbanner1" style="width:98%; height: 200px"></a>
                                </div>
                                <div>
                                    <a href="#" class="maslink1" target="_blank"><img
                                                src="https://pub.masoffer.com/images/misc/cover_de.png"
                                                class="masbanner1" style="width:98%; height: 200px"></a>
                                </div>
                                <div>
                                    <a href="#" class="maslink1" target="_blank"><img
                                                src="https://pub.masoffer.com/images/misc/cover_de.png"
                                                class="masbanner1" style="width:98%; height: 200px"></a>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('bot')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#lfm-1').filemanager('image');
            $('#lfm-2').filemanager('image');
            $('#lfm-3').filemanager('image');
        })
    </script>
@endpush
