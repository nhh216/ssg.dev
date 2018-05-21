@extends('frontend::layouts.master')
@push('top')
    <link rel="stylesheet" type="text/css" href="css/style-product.css"/>
@endpush
@section('content')
    @include('frontend::modules.product.header_product_page')

    @include('frontend::modules.product.filter_product')

    @include('frontend::modules.product.list_product')

    @include('frontend::modules.product.bot_new')

    <div id="go-top" title="Lên đầu trang">
        <i class="ssg-icon icon-arrow-right"></i>
    </div>
@endsection
@push('bot')
    <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        var app = new Vue({
            el: '#vue-app',
            data: {
                listProduct: '',
            },
            methods: {
                getFilterRes: function(res) {
                    axios.get('dien-thoai/filter-res/'.res)
                        .then((response)=>{
                            console.log(res);
                                this.listProduct = response.data;
                                console.log(this.listProduct);
                        }).catch(function (error) {
                            console.log(error);
                    });

                },



            }



        })
    </script>
@endpush