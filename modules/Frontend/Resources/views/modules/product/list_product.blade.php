<div class="col-lg-9 col-md-9" id="vue-app">
    <div class="productlist-products-container">
        <div class="block-container-1">
            <div class="product-grid no-grid-ads">
                @foreach($listproduct as $product)
                <div id="{{$product->id}}" class="product-cell" data-link="{{asset('/dien-thoai/').'/'.$product->slug}}">
                    <a href="{{asset('/dien-thoai/').'/'.$product->slug}}" >
                        <div class="product-img">
                            <img src="{{$product->thumb}}"
                                 alt="{{$product->name}}">
                        </div>
                        <div class="btn-wrapper">
                            <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                        </div>
                        <div class="product-info">
                            <div class="product-name">{{$product->name}}</div>
                            <div class="product-price">
                                <span class="p-price-number">{{$min->price}}</span>
                            </div>
                        </div>
                    </a>
                    {{--<span class="product-more" onclick="showProductMore(event)"></span>--}}
                    {{--<div class="product-description">--}}
                        {{--<div class="description-inner">--}}
                            {{--<div class="short-des-content">--}}
                                {{--Màn hình: IPS LCD, 5.5", Full HD<br>Hệ điều hành: Android 6.0--}}
                                {{--(Marshmallow)<br>Camera sau: 13 MP/Camera trước: 5 MP<br>CPU: Snapdragon 625--}}
                                {{--8 nhân 64-bit<br>RAM: 3 GB/Bộ nhớ trong: 32 GB..--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            {{--// Pagination--}}
            {{$listproduct->render()}}
        </div>
    </div>
</div>
</div>
</div>