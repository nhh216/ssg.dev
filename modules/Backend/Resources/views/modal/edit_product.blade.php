<div class="modal" id="edit-product" role="dialog">
    <div class="modal-dialog" style=" max-width: 75%; margin: auto; margin-top: 50px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Chi tiết sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/update/product" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <input hidden name="id" v-model="curentProduct.id">
                    <input hidden name="config_id" v-model="configProduct.id">
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group  col-md-3">
                                <img style="max-width: 100%; max-height: 100%;" v-bind:src="curentProduct.thumb" >

                            </div>
                            <div class="form-group  col-md-4">
                                <label style="margin-top: 10px;">Tên sản phẩm:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="name" v-model="curentProduct.name">
                                </div>
                                <label style="margin-top: 10px;">Hãng sản xuất:</label>
                                <select class="form-control" id="list-manufacture" v-model="curentProduct.manufacture_id" name="manufacture" >
                                    <option disabled value="0">Hãng sản xuất</option>
                                    <option  v-for="obj in list_manufacure" :value="obj.id">@{{obj.name}}</option>
                                </select>
                                <label style="margin-top: 10px;">Ảnh demo:</label>
                                <input class="form-control" type="file" name="thumb" accept="image/*" @change="getIMGPath">
                                <label style="margin-top: 10px;">Độ Phân Giải Màn Hình:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="resolution" v-model="configProduct.resolution">
                                </div>
                                <label style="margin-top: 10px;">Camera Trước:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="camera" v-model="configProduct.behind_cam">
                                </div>
                                <label style="margin-top: 10px;">Camera Sau:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="camera" v-model="configProduct.front_cam">
                                </div>
                            </div>
                            <div class="form-group  col-md-5">
                                <label style="margin-top: 10px;">Pin:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="pin" v-model="configProduct.pin">
                                </div>
                                <label style="margin-top: 10px;">Dung Lượng RAM:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="ram" v-model="configProduct.ram">
                                </div>
                                <label style="margin-top: 10px;">CPU:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="cpu" v-model="configProduct.cpu_speed">
                                </div>
                                <label style="margin-top: 10px;">Số Nhân:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="cpu" v-model="configProduct.cpu_core">
                                </div>
                                <label style="margin-top: 10px;">Hệ Điều Hành:</label>
                                <div class="name-product" >
                                    <input  class="form-control" type="text" name="os" v-model="configProduct.os">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-3" style="display: inline-flex;">
                            <div class="form-group col-md-12">
                                <button type="button" class="form-control btn btn-danger" data-dismiss="modal">Hủy Bỏ</button>
                            </div>
                        </div>
                        <div class="col-md-3" style="display: inline-flex;">
                            <div class="form-group col-md-12">
                                <button type="submit" class="form-control btn btn-primary">Cập Nhật</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>