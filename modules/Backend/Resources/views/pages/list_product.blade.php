@extends('backend::layouts.master_layout_2')
@push('top')

@endpush
@section('content')
    <div class="row">
        <div class="col-md-3">
            <h4>Danh Sách Sản Phẩm</h4>
        </div>
        <div class="col-md-1">
            <button v-on:click="showModalAddProduct" type="submit" class="form-control btn btn-primary" style="width: 100px;">Thêm Mới</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table style="margin-top: 10px; font-size: small;" id="listProductTable" class="table table-striped table-bordered"
                   cellspacing="0">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Hãng Sản Xuất</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listproduct as $key => $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->manufacture->name}}</td>
                        <td>
                            <button type="button"  v-on:click="showModalEditProduct({{$product->id}})" class="btn btn-primary"
                               style="color: white">Sửa</button>
                        </td>
                        <td>
                            <form method="post" action="/deletestation/{{$product->id}}">
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
    <div class="row">
        @include('backend::modal.modal_edit_produt')
        {{--@include('backend::modal.add_product')--}}
    </div>

@endsection
@push('bot')
    <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#listProductTable').DataTable({
            });
        } );
    </script>
    <script type="text/javascript">
        var app = new Vue({
            el: '#mainContent',
            data: {
                id: '',
                thumb: '',
                name: '',
                manufacture: '',
                manufacture_id:'',
                resolution:'',
                behind_cam:'',
                front_cam:'',
                pin:'',
                ram:'',
                cpu_speed:'',
                cpu_core:'',
                os:'',
                list_manufacure: [],
                curentProduct: {},
                configProduct: {},

            },
            methods: {
                /*Hiện thị modal sửa sản phẩm*/
                showModalEditProduct: function (id) {
                    axios.get('/admin/show-product/'+id)
                        .then((response)=> {
                            this.curentProduct = response.data.product[0];
                            this.getListManufactures();
                            this.configProduct = response.data.att_value
                            console.log(this.configProduct);
                            $('#edit-product').modal().show();
                        }).catch(function (error) {
                        console.log(error);
                    });
                },
                /*Hiện thị danh sách các hãng sản xuất*/
                getListManufactures: function () {
                    axios.get('/admin/list-manufacture/')
                        .then((response)=>{

                            this.list_manufacure = response.data;
                        }).catch(function (error) {
                        console.log(error);
                    });
                },
                /*Hiện thị modal thêm sản phẩm*/
                showModalAddProduct: function () {
                    this.getListManufactures();
                    this.thumb = '';
                    $('#new-product').modal().show();
                },
                /* Make preview while changing image*/
                getIMGPath(event){
                    const file = event.target.files[0];
                    this.thumb =  URL.createObjectURL(file);
                    this.curentProduct.thumb =  URL.createObjectURL(file);
                },
                getFilteProduct: function () {
                    axios.get('')
                        .then((response)=>{

                        }).catch(function (error) {
                            console.log(error);
                    });
                }
            }
        })
    </script>
@endpush