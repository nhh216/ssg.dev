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
            <table style="margin-top: 10px; font-size: small;" id="listCategoryTable" class="table table-striped table-bordered"
                   cellspacing="0">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Danh Mục Gốc</th>
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
@endsection
@push('bot')
    <script>
        $(document).ready( function () {
            $('#listCategoryTable').DataTable({
            });
        } );
    </script>
@endpush
