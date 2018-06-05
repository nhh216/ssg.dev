@extends('backend::layouts.master_layout_2')
@push('top')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
    <style>
        .bootstrap-tagsinput {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            display: block;
            padding: 4px 6px;
            color: #555;
            vertical-align: middle;
            border-radius: 4px;
            max-width: 100%;
            line-height: 22px;
            cursor: text;
        }
        .bootstrap-tagsinput input {
            border: none;
            box-shadow: none;
            outline: none;
            background-color: transparent;
            padding: 0 6px;
            margin: 0;
            width: auto;
            max-width: inherit;
        }
        input[type="text"]
        {
            font-size:18px;
        }
        input[type="img"]
        {
            font-size:14px;
        }
        button[type="submit"]
        {
            font-size:16px;
        }
        button[type="button"]
        {
            font-size:16px;
        }

    </style>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h4>Danh Sách Tin</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table style="margin-top: 10px; font-size: medium;" id="listPostTable"
                       class="table table-striped table-bordered"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu Đề</th>
                        <th>Danh Mục Tin</th>
                        <th>Trạng Thái</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $key => $post)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->category->title}}</td>
                            <td>{{$post->status}}</td>
                            <td>
                                <button type="submit" v-on:click="showEditPostModal({{$post->id}})" class="btn btn-primary"
                                        style="color: white">Sửa</button>
                            </td>
                            <td>
                                <form method="post" action="/delete-post/{{$post->id}}">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        @include('backend::modal.modal_edit_post')
    </div>


@endsection
@push('bot')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#lfm').filemanager('image');
        })
    </script>
    <script>
        $(document).ready(function () {
            $('#listPostTable').DataTable({});
        });
    </script>

    <script type="text/javascript">
        var app = new Vue({
            el: '#mainContent',
            data: {
                curentPost: {},
                listCategories: [],

            },
            methods: {
                /*Hiện thị modal sửa tin*/
                showEditPostModal: function (id) {
                    axios.get('/admin/show-post/'+id)
                        .then((response)=> {
                            this.curentPost = response.data[0];
                            this.getPostCategories();
                            console.log(this.curentPost.tags);
                            CKEDITOR.instances['editor'].setData(this.curentPost.content);
                            $('#edit-post').modal().show();
                        }).catch(function (error) {
                        console.log(error);
                    });
                },
                getPostCategories: function () {
                    axios.get('/backend/new-categories')
                        .then((response)=>{
                            this.listCategories = response.data;
                        })
                }
            }
        })
    </script>

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

@endpush