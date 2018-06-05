<div class="related-products container">
    <div class="section-title">
        <h4 class="center">Sản phẩm liên quan</h4>
    </div>
    <div class="related-product-container">
        <div class="product-grid">
            @foreach($splq as $value)
                    <div id="{{$value->id}}" class="product-cell" data-link="{{asset('/dien-thoai/').'/'.$value->slug}}">
                        <a href="{{asset('/dien-thoai/').'/'.$value->slug}}" class="product-link">
                            <div class="product-img">
                                <img src="{{$value->thumb}}" alt="{{$value->name}}">
                            </div>
                            <div class="btn-wrapper">
                                <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                            </div>
                            <div class="product-info">
                                <div class="product-name">{{$value->name}}</div>
                                <div class="product-price"><span class="p-price-number">{{$value->min_price}}</span>
                                </div>
                            </div>
                        </a>
                        <span class="product-more" onclick="showProductMore(event)"></span>
                        <div class="product-description">
                            <div class="description-inner">
                                <div class="short-des-content">
                                    Dual-core 1.3GHz<br>Android OS, v4.2 (Jelly Bean)<br>4.5 TFT 480 x 854px<br>Wi-Fi,
                                    3G, Bluetooth v4.0<br>Pin Li-Ion 1800mAh..
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</div>