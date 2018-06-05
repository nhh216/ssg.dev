<div class="modal" id="edit-post" role="dialog">
    <div class="modal-dialog" style=" max-width: 90%; margin: auto;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Chi Tiết</h4>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">

                <form method="POST" action="/admin/update/post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <input hidden name="id" v-model="curentPost.id">
                    <div class="row">
                        <h4 style="margin-left: 10px;">Tiêu Đề:</h4>
                        <div class="col-md-6" class="form-group">
                            <input class="form-control" type="text" name="title" style="width:100%;" required v-model="curentPost.title" >
                        </div>
                        <div class="col-md-5" class="form-group">
                 <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                       class="btn btn-outline-danger">
                                    <i class="fa fa-picture-o"></i> Thumb
                                    </a>
                                    </span>
                            <input class="form-control" id="thumbnail" class="form-control" type="img" name="thumb" v-model="curentPost.thumb" >
                        </div>
                    </div>
                    <div class="row" id="vu-app" style="margin-bottom: 10px;">
                        <h4 style="margin-left: 10px;">Chuyên Mục Tin:</h4>
                        <div class="col-md-3" class="form-group">
                            <select style=" font-size: 16px; height: 35px;" name="category_id" class="form-control" id="category" v-model="curentPost.category_id" >
                                <option v-for="obj in listCategories" :value="obj.id"> @{{obj.title}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <h4 style="margin-left: 10px;">Tóm Tắt:</h4>
                        <div class="col-md-6" class="form-group">
                            <input class="form-control" name="short_desc" type="text" style="width:100%;" required v-model="curentPost.short_des">
                        </div>
                    </div>
                    <div class="row" STYLE="margin-top: 10px;">
                        <div class="col-md-12" class="form-group">
            <textarea name="editor" id="editor" class="form-control" v-model="curentPost.content">
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
                        <div class="col-sm-10"  v-for="obj in curentPost.tags">
                            <input type="text" id="tags" class="form-control col-md-5" value="" name="tags" data-role="tagsinput" id="tags" v-model="obj.value" >
                        </div>

                    </div>
                    <div class="row" style="margin-top: 30px">
                        <div class="col-md-4"></div>
                        <div class="col-md-2" class="form-group">
                            <button type="submit"  class="form-control btn btn-primary">Cập Nhật</button>
                        </div>

                        <div class="col-md-2" class="form-group">
                            <button type="button" class="form-control btn btn-danger" data-dismiss="modal">Hủy Bỏ</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>

</div>
