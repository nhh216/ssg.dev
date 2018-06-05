@extends('backend::layouts.master_layout')
@push('top')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

    <style>

    </style>
@endpush
@section('content')
    <div class="container-fluid">
        <form action="/admin/save-post/" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <h4 style="margin-left: 10px;">Tiêu Đề:</h4>
                <div class="col-md-6" class="form-group">
                    <input class="form-control" type="text" name="title" style="width:100%;" required>
                </div>
                <div class="col-md-5" class="form-group">
                 <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                       class="btn btn-outline-danger">
                                    <i class="fa fa-picture-o"></i> Thumb
                                    </a>
                                    </span>
                    <input class="form-control" id="thumbnail" class="form-control" type="img" name="thumb">
                </div>
            </div>
            <div class="row" id="vu-app" style="margin-bottom: 10px;">
                <h4 style="margin-left: 10px;">Chuyên Mục Tin:</h4>
                <div class="col-md-3" class="form-group">
                    <select style=" font-size: 16px; height: 35px;" name="category_id" class="form-control" id="category" v-model="category" >
                        <option v-for="obj in listCategories" :value="obj.id"> @{{obj.title}}</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <h4 style="margin-left: 10px;">Tóm Tắt:</h4>
                <div class="col-md-6" class="form-group">
                    <input class="form-control" name="short_desc" type="text" style="width:100%;" required>
                </div>
            </div>
            <div class="row" STYLE="margin-top: 10px;">
                <div class="col-md-12" class="form-group">
            <textarea name="editor" id="editor" class="form-control">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse"
                                    data-toggle="tooltip"
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
            <div class="row" class="form-group">

                    <label for="name" class="col-md-2 col-form-label">Tag:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-md-5" value="" name="tags" data-role="tagsinput" id="tags">
                    </div>

            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-4"></div>
                <div class="col-md-2" class="form-group">
                    <button type="submit"  class="form-control btn btn-danger">Đăng Tin</button>
                </div>

                <div class="col-md-2" class="form-group">
                    <button type="submit"  class="form-control btn btn-primary">Hủy</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>

@endsection
@push('bot')
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script src="js/ckeditor/jquery.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('editor', {
            options,
            customConfig : '/js/ckeditor/config.js'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#lfm').filemanager('image');
        })
    </script>



    <script type="text/javascript">
        var app = new Vue({
            el: '#vu-app',
            data: {
                action: '',
                category: '',
                listCategories: [],


            },
            created() {
                this.getListCategories();

                action = @if(Session::has('noti')) '{{ Session::get('noti') }}'
                @else '0'
                @endif
                console.log(action);
                if(action === 'ok') {
                    alert('Cập Nhập Thành Công');
                }

            },
            methods: {
                getListCategories: function () {
                    axios.get('/backend/new-categories/')
                        .then((response)=>{
                            this.listCategories = response.data
                        }).catch(function (error) {
                        console.log(error);
                    });
                },

            }
        })
    </script>
@endpush
