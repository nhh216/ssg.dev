@extends('backend::layouts.master')
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
                            <div class="form-group">
                                <label>Ảnh Banner 1</label>
                                <input type="image" name="img1_src" id="img_1" class="form-control">

                            </div>
                            <div class="form-group">
                                <label>Ảnh Banner 3</label>
                                <input type="image" name="img2_src" id="img_2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ảnh Banner 3</label>
                                <input type="image" name="img3_src" id="img_3" class="form-control">
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
                                    <a href="#" class="maslink1" target="_blank"><img src="https://pub.masoffer.com/images/misc/cover_de.png" class="masbanner1" style="width:98%; height: 200px"></a>
                                </div>
                                <div>
                                    <a href="#" class="maslink1" target="_blank"><img src="https://pub.masoffer.com/images/misc/cover_de.png" class="masbanner1" style="width:98%; height: 200px"></a>
                                </div>
                                <div>
                                    <a href="#" class="maslink1" target="_blank"><img src="https://pub.masoffer.com/images/misc/cover_de.png" class="masbanner1" style="width:98%; height: 200px"></a>
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
