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
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group  col-md-2">
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
                                    <option class="form-control"  v-for="obj in list_manufacure" :value="obj.id">@{{obj.name}}</option>
                                </select>
                                <label style="margin-top: 10px;">Ảnh demo:</label>
                                <input class="form-control" type="file" name="thumb" accept="image/*" @change="getIMGPath">

                            </div>
                            <div class="form-group  col-md-5" style="overflow: scroll;  height: 500px;">

                                <div class="name-product"   v-for="obj in configProduct" >
                                    @{{obj.attribute.name }} <input  class="form-control" type="text" name="battery" v-model="obj.value.value">
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