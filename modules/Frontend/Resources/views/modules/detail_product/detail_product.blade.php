<div id="product-detail" style="margin-bottom: 20px;">
    <div class="row">

    </div>

    <div class="row">
        <div class="block-container container">

            <div class="product-slide-container">
                <div class="big-image">
                    @foreach($thisProduct as $product)
                        @if(isset($product['thumb']))
                            <img src="{{$product['thumb']}}"
                                 alt="{{$product['name']}}">
                        @endif
                </div>
            </div>
            <div class="product-info-container">
                @if(isset($product['slug']) && isset($product['name']))
                    <a href="{{asset('/') . $product['slug']}}"
                       title="{{$product['name']}}" onclick="return false">
                        <h1>{{$product['name']}}</h1>
                    </a>
                @endif
                @endforeach

                <div class="rating-star">
                    <i class="icon icon-star blue-star"></i>
                    <i class="icon icon-star blue-star"></i>
                    <i class="icon icon-star blue-star"></i>
                    <i class="icon icon-star grey-star"></i>
                    <i class="icon icon-star grey-star"></i>
                </div>

                <div class="clearfix"></div>
                <div class="product-short-desc">
                    @foreach($config as $key => $conf)
                        @if($key <10 )
                            <label><?php echo $conf->attribute->name ?></label>
                            <span>{{$conf->value->value}}</span><br>
                        @endif
                    @endforeach
                    <div id="spoiler" style="display: none;">
                        @foreach($config as $key => $conf)
                            @if($key >10 )
                                <label><?php echo $conf->attribute->name ?></label>
                                <span>{{$conf->value->value}}</span><br>
                            @endif
                        @endforeach
                    </div>
                    <a style="color: blue; " onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}"
                            title="Click to show/hide" >Thông tin chi tiết.
                    </a>
                </div>

                <div class="clearfix"></div>
                <div class="priority-store">
                    <div class="row">
                        <div class="col-md-6">
                            <span>Giá tốt từ nơi bán:</span>
                            <span class="store-price product-price">{{$min->price}}</span>
                        </div>
                        <div class="col-md-3">
                            <div class="merchant-logo-wrapper">
                                <div class="merchant-logo">
                                    <img src="{{$min->site->logo}}"
                                         title="Lazada">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="{{$min->url}}"
                               class="ssg-btn price-btn link-btn-1 red-text"
                               title="Đến nơi bán {{$min->name}}}" target="_blank"
                               rel="nofollow" ssg-track="true" ssg-category="product" ssg-action="Top priority"
                               ssg-label="Click Lazada" ssg-event="click">Đến nơi bán</a>

                        </div>
                    </div>
                </div>
                <div class="stores-summrary">
                    Có {{$count}} sản phẩm giá từ :
                    <span class="product-price">{{$min->price}}</span> - <span class="product-price">{{$max}}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="merchant-container">
            <ul class="product-merchants">
                @foreach($allProduct as $site)
                    @if(($site->allProducts->count()) !=0)
                        <li class="merchant-item">
                            @foreach($site->allProducts as $key => $detail)
                                @if($key ==0)
                                    <div class="first-product">
                                        <div class="store-product-img-wrapper">
                                            <div class="store-product-img">
                                                <img src="{{$detail['thumb']}}"
                                                     alt=" {{$detail['thumb']}} - {{$detail['shop_name']}}">
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="product-name">{{$detail['name']}}
                                                <span>{{$site->name}}</span>
                                                <div class="sub-merchant">
                                                    Cung cấp bởi: {{$detail['shop_name']}}
                                                </div>
                                                <div class="promotions">
                                                </div>
                                            </div>
                                            <div class="merchant-logo-wrapper">
                                                <div class="merchant-logo">
                                                    <img src="{{$detail->site->logo}}"
                                                         title="{{$detail->site->name}}">
                                                </div>
                                            </div>
                                            <div class="price-wrapper">
                                                <div class="product-price grey-text"> {{$detail['price']}}</div>
                                                <div class="date-update">Cập nhật mấy giờ trước</div>
                                            </div>
                                            <div class="product-go-action">

                                                <a href=" {{$detail['url']}}"
                                                   class="ssg-btn price-btn link-btn-1  grey-text" target="_blank"
                                                   rel="nofollow"
                                                   ssg-track="true" ssg-category="product"
                                                   ssg-action="Price table - Merchant"
                                                   ssg-label="Click Lotte"
                                                   ssg-event="click"><span>Đến nơi bán</span></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="related-products">
                                <ul class="related-product-ls collapse" id="collapseExample{{$site->id}}">
                                    @foreach($site->allProducts as $key => $detail)
                                        @if($key !=0)
                                            <li class="related-product-item">
                                                <div class="product-image">
                                                    <img src="{{$detail['thumb']}}"
                                                         title="{{$detail['name']}}"
                                                         alt="{{$detail['name']}} - {{$detail['shop_name']}} ">
                                                </div>
                                                <div class="product-name">
                                                    {{$detail['name']}}<br>
                                                    <span>Cung cấp bởi: {{$detail['shop_name']}}</span></div>
                                                <div class="price-wrapper">
                                                    <div class="product-price">{{$detail['price']}}</div>
                                                    <div class="date-update">Cập nhật 1 giờ trước</div>
                                                </div>
                                                <div class="product-action">
                                                    <a href="{{$detail['url']}}"
                                                       class="ssg-btn grey-text price-btn link-btn-1" target="_blank"
                                                       rel="nofollow"
                                                       ssg-track="true" ssg-category="product"
                                                       ssg-action="Price table - Merchant expanded"
                                                       ssg-label="Click Lotte"
                                                       ssg-event="click"><span>Đến nơi bán</span></a>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>

                                <div class="submerchant-expand">
                                    <a class="expand" data-toggle="collapse" href="#collapseExample{{$site->id}}"
                                       role="button">Xem thêm
                                        @foreach($site->allProducts as $key => $detail)
                                            {{sizeof($site->allProducts) - 1}}
                                            @break
                                        @endforeach
                                        sản phẩm
                                    </a>
                                </div>

                            </div>
                            @endif
                        </li>
                        @endforeach
            </ul>
        </div>
    </div>
</div>