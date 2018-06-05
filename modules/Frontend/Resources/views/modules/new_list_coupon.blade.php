
<div class="row">
    <div class="block-container">
        <div class="section-title">
            <h4 class="center"> Mã Giảm Giá Hot </h4>
        </div>
    </div>
</div>
<div class="row">
    @foreach($listcoupon as $coupon)
        @if(isset($coupon['code']))
            <div class="offers-details">
                <div class="offers_voucher_bl">
                    <div class="clearfix">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 polyxgo_discount">
                                        <a href="link offer">
                                            <div><img style="height: 160px; width: 200px;"
                                                      src="https://upload.wikimedia.org/wikipedia/commons/1/17/Lazada.vn_Logo.png">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 polyxgo_title">
                                        <div class="polyxgo-tags">
                                            <span class="tag recommended">Được yêu thích</span>
                                            <div class="tag verified">
                                                <i class="glyphicon glyphicon-ok-sign"></i><span>&nbsp;Xác nhận coupon</span>
                                            </div>
                                            <div class="tag tag-hide validity">
                                                <i class="glyphicon glyphicon-certificate"></i><span>&nbsp;<span
                                                            class="polyxgo_coupon_date">Còn 17 ngày nữa</span></span>
                                            </div>
                                        </div>
                                        <a class="link-offers-voucher-title test" id="3172"
                                           onclick="window.open('http://ho.lazada.vn/SHd7xS'); s=prompt('Sử dụng Voucher bên dưới khi thanh toán:', '{{$coupon['code']}}')">
                                            <span class="offers-voucher-title">{{$coupon['title']}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="polyxgo_get_coupon pull-right ">
                                    <a class="btn-your-voucher-code" id="3172"
                                       onclick="var person = prompt('Nhập mã giảm giá bên dưới khi thanh toán, vui lòng đọc kỹ quy định sử dụng. Sau khi copy, hệ thống sẽ tự chuyển bạn đến trang khuyến mãi:', '{{$coupon['code']}}'); window.open('{{$coupon['link_offer']}}')">
                                        <div class="code-coupon">
                                            <span>{{$coupon['code']}}</span>
                                        </div>
                                        <span class="coupon-button">Mã Giảm Giá	</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end cleaerfix -->
                </div>
                <div class="clearfix polyxgo_rm">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-right porm" id="coupon_'+'{{$coupon['id']}}">
                        Chi tiết <i class="glyphicon glyphicon-menu-down"></i>
                    </div>
                    <div class="holder polyxgo_details" id="details_{{$coupon['id']}}">
                        <div class="holder col-lg-12 clearfix">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    @if(isset($coupon['exp_date']))
                                        <div><span class="polyxgo_bold">Ngày hết hạn:</span>{{$coupon['exp_date']}}
                                        </div>
                                    @endif
                                    <div><span class="polyxgo_bold">Áp dụng cho:</span> Dùng được chi nhiều sản phẩm
                                    </div>
                                    <div><span>{{$coupon['title']}}</span></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <div class="polyxgo_get_coupon pull-right ">
                                        <a class="btn-your-voucher-code" id="{{$coupon['id']}}"
                                           onclick="window.open('http://ho.lazada.vn/SHd7xS'); s=prompt('Sử dụng Voucher bên dưới khi thanh toán:', '{{$coupon['code']}}')">
                                            <div class="code-coupon">
                                                <span>{{$coupon['code']}}</span>
                                            </div>
                                            <span class="coupon-button">Mã Giảm Giá	</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <script>
                    jQuery(document).ready(function () {
                        jQuery('#coupon+'+'_'+'{{$coupon['id']}}').click(function () {
                            jQuery('#details'+'_'+'{{$coupon['id']}}').toggle();
                        });
                    });
                </script>
            </div>
        @endif
        @if(!isset($coupon['code']))
            <div class="offers-vouchers polyxgo_popup modal fade offers-lucky-3172" url="{{$coupon['link_offer']}}"
                 id="offers-lucky-{{$coupon['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            <h3 class="modal-title" id="exampleModalLabel">{{$coupon['title']}}</h3>
                            <div class="text-center">
                                <a href="http://ho.lazada.vn/SHd7xS" target="_blank" rel="nofollow">
                                    <img src="">
                                </a></div>
                        </div>
                        <div class="modal-body">
                            <div class="clearfix">
                                <div>
                                    Bạn <strong>sao chép Mã Giảm Giá (Ctrl+C)</strong> dưới, sau đó sử dụng mã trong
                                    phần thanh toán đơn hàng áp dụng tại <strong>
                                        <a class="" href="http://ho.lazada.vn/SHd7xS" ref="nofollow" target="_blank"
                                           title="Mẹ &amp; Bé">Mẹ &amp;Bé</a></strong>!
                                </div>
                                <div class="clearfix ">
                                    <div class="col-lg-6 good-luck-to-you text-center">
                                        {{$coupon['code']}}
                                    </div>
                                    <div class="col-lg-6 btn-holder text-center">
                                        <a class="btn-good-luck-to-you" href="http://ho.lazada.vn/SHd7xS"
                                           ref="nofollow"
                                           target="_blank" title="Mẹ &amp; Bé">Đến trang Mẹ &amp; Bé</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            Mã này bạn có sử dụng tốt không? Hãy chia sẻ giúp mọi người cùng mua sắm bạn nhé?
                        </div>
                    </div>
                </div>
            </div>

            <div class="offers-details ">
                <div class="offers_voucher_bl">
                    <div class="clearfix">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 polyxgo_discount"> Giảm 12%
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 polyxgo_title"><span
                                                class="offers-voucher-title"> {{$coupon['title']}}</span>
                                        <div class="polyxgo-tags"><span class="tag recommended"> <i
                                                        class="glyphicon glyphicon-check"></i>Đã xác nhận</span>
                                            <div class="tag verified"><i class="glyphicon glyphicon-time"></i><span>&nbsp;Được yêu thích</span>
                                            </div>
                                            <div class="tag tag-hide validity"><i
                                                        class="glyphicon glyphicon-time"></i><span>&nbsp;<span
                                                            class="">Coupon đã hết hạn</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="polyxgo_get_coupon pull-right polyxgo_no_coupons"><a
                                            class="btn-your-voucher-code pull-right" target="_blank"
                                            href=" {{$coupon['link_offer']}}"
                                            id="  {{$coupon['id']}} " data-wpel-link="external"
                                            rel="nofollow external noopener noreferrer">
                                        <div class="code-coupon"><span> </span></div>
                                        <span class="coupon-button"> Nhận Ưu Đãi <i class="fa fa-angle-right"
                                                                                    aria-hidden="true"></i> </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix polyxgo_rm">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-right porm" id="porm_'+'{{$coupon['id']}}"> Chi tiết <i
                                class="glyphicon glyphicon-menu-down"></i></div>
                    <div class="holder polyxgo_details" id="details_'+'{{$coupon['id']}}">
                        <div class="holder col-lg-12 clearfix">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 polyxgo_details_minimize text-center">
                                            Giảm tối đa 50.000đ
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                            <div><span class="polyxgo_bold">Ngày hết hạn:</span>{{$coupon['exp_date']}}</div>
                                            <div><span class="polyxgo_bold">Khuyến mãi:</span> 12%</div>
                                            <div><span class="polyxgo_bold">Áp dụng cho:</span> Dùng được chi nhiều
                                                sản phẩm
                                            </div>
                                            <div><span class="polyxgo_bold">Đơn hàng từ:</span>100.000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <div class="polyxgo_get_coupon pull-right polyxgo_no_coupons"><a
                                                class="btn-your-voucher-code pull-right" target="_blank"
                                                rel="nofollow external noopener noreferrer"
                                                href="{{$coupon['link_offer']}}"
                                                id="{{$coupon['id']}}" data-wpel-link="external">
                                            <div class="code-coupon"><span> </span></div>
                                            <span class="coupon-button"> Nhận Ưu Đãi <i class="fa fa-angle-right"
                                                                                        aria-hidden="true"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        jQuery(document).ready(function () {
                            jQuery('#porm'+'_'+'{{$coupon['id']}}').click(function () {
                                jQuery('#details'+'_'+'{{$coupon['id']}}').toggle();
                            });
                        });
                    </script>
                </div>
            </div>
        @endif
    @endforeach
</div>
