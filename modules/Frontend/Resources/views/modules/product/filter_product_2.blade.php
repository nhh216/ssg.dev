<div class="row">
    <div class="product-filter-container" id="list-product">
        <div class="block-container">
            <div class="top-article">
                <div class="header">Bảng giá <h1>Điện thoại</h1> tháng 4/2018</div>
                <div class="content">
                    <p>
                        Bảng giá điện thoại cập nhật mới nhất gồm các thương hiệu hàng đầu Samsung, LG, Apple,
                        Nokia,...Giá điện thoại được thu thập từ các website bán hàng trực tuyến Lazada, Tiki,
                        Adayroi, Lotte... và các cửa hàng lớn Thế giới di động, FPT Shop, CellphoneS, Viettel
                        Store....
                        Các sản phẩm Điện thoại phổ biến nhất tháng 4/2018 như: Xiaomi Redmi Note 4 3GB/32GB,
                        Samsung Galaxy J7 Pro, Samsung Galaxy J3 Pro 16GB 2017 </p>
                </div>
            </div>

            <div class="breadcrumb-wrapper">
                <ul class="ssg-breadcrumb">
                    <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                        <a itemprop="url" href="/">
                            <span itemprop="title">Trang chủ</span>
                        </a>
                    </li>
                    <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                        <a itemprop="url" href="/dien-thoai/">
                            <span itemprop="title">Điện thoại di động</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div class="productlist-container">
        <div class="col-lg-3 col-md-3">
            <div class="productlist-filter-container">
                <div class="filter-container">
                    <div class="selected-filter hidden">
                        <div class="header">Sản phẩm lọc theo</div>
                        <div class="filter-content">
                            <ul class="filter-ls" id="pick-filter-container">
                            </ul>
                        </div>
                    </div>
                    <div class="section-collapse hide" id="author-section">
                        <a class='section-collapse-trigger' role="button" data-toggle="collapse"
                           href="#collapseFilterAuthor">
                            <div class="collapse-label">Tác giả<span
                                        class="ssg-icon icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse in" id="collapseFilterAuthor">
                            <div class="scroll-container scroll-height">
                                <ul id="authors" class="scrollbox">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='section-collapse'>
                        <a class='section-collapse-trigger' role="button" data-toggle="collapse"
                           href="#collapseFilterBrand">
                            <div class="collapse-label">Nhãn hiệu<span
                                        class="ssg-icon icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse in" id="collapseFilterBrand">
                            <div class="scroll-container scroll-height"
                                 style="overflow: hidden;position: relative;outline: none;">
                                <ul id="brands" class="scrollbox">
                                    @foreach($listmanufacture as $manufacture)
                                        <li>
                                            <a href="{{$manufacture->slug}}"
                                               data-pick="false"
                                               data-filter="b"
                                               data-value="{{$manufacture->id}}">{{$manufacture->name}}
                                                <span class="filter-count">({{ $manufacture->products->count()}})</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='section-collapse'>
                        <a class='section-collapse-trigger' role="button" data-toggle="collapse"
                           href="#collapseFilterPrice">
                            <div class="collapse-label">Mức giá<span
                                        class="ssg-icon icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse in" id="collapseFilterPrice">
                            <ul id="price-ranges-ls">
                                <li>
                                    <a href="/dien-thoai/?pr=1"
                                       data-filter="price"
                                       data-value="0-10000000">
                                        Dưới 3 triệu<span
                                                class="filter-count"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?pr=2"
                                       data-filter="price"
                                       data-value="30000000-50000000">
                                        3 triệu - 5 triệu<span
                                                class="filter-count"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?pr=3"
                                       data-filter="price"
                                       data-value="20000000-30000000">
                                        5 triệu - 10 triệu<span
                                                class="filter-count"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?pr=4"
                                       data-filter="price"
                                       data-value="30000000-40000000">
                                        10 triệu - 15 triệu<span
                                                class="filter-count"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?pr=5"
                                       data-filter="price"
                                       data-value="40000000-50000000">
                                        15 triệu - 20 triệu<span
                                                class="filter-count"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?pr=6"
                                       data-filter="price"
                                       data-value="60000000-70000000">
                                        Trên 20 triệu <span
                                                class="filter-count"> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class='section-collapse'>
                        <a class="section-collapse-trigger collapsed" role="button"
                           data-toggle="collapse"
                           href="#collapseFilter2"
                           aria-expanded="false">
                            <div class="collapse-label">Độ phân giải<span
                                        class="ssg-icon icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse"
                             id="collapseFilter2">
                            <ul class="features-filter">
                                <li>
                                    <a href="/dien-thoai/?r=1125p"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="22">
                                        2436 x 1125 pixel </a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?r=2280p"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="22">
                                        1080 x 2280 pixels</a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?r=750p"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="22">
                                        1334 x 750 pixels </a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?r=1920p"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="22">
                                        1920 x 1080 pixels</a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?r=1440p"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="2229">
                                        1440 x 720 pixel</a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?r=1280p"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="957">
                                        720 x 1280 pixels</a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?r=540p"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="1198">
                                        540 x 960 pixels</a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?r=480p"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="2229">
                                        480 x 800 pixels</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class='section-collapse'>
                        <a class="section-collapse-trigger collapsed" role="button"
                           data-toggle="collapse"
                           href="#collapseFilter3"
                           aria-expanded="false">
                            <div class="collapse-label">Màn hình rộng<span
                                        class="ssg-icon icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse"
                             id="collapseFilter3">
                            <ul class="features-filter">
                                <li>
                                    <a href="#f=6"
                                       data-filter="feature"
                                       data-valueid="3"
                                       data-value="1051">
                                        Lớn hơn.</a>
                                </li>
                                <li>
                                    <a href="#f=6"
                                       data-filter="feature"
                                       data-valueid="3"
                                       data-value="1051">
                                        6"</a>
                                </li>
                                <li>
                                    <a href="#f=5.5"
                                       data-filter="feature"
                                       data-valueid="3"
                                       data-value="1051">
                                        5.5"</a>
                                </li>
                                <li>
                                    <a href="#f=5.2"
                                       data-filter="feature"
                                       data-valueid="3"
                                       data-value="1051">
                                        5.2"</a>
                                </li>
                                <li>
                                    <a href="#f=5"
                                       data-filter="feature"
                                       data-valueid="3"
                                       data-value="506">
                                        5"</a>
                                </li>
                                <li>
                                    <a href="#f=4.7"
                                       data-filter="feature"
                                       data-valueid="3"
                                       data-value="120">
                                        4.7"</a>
                                </li>
                                <li>
                                    <a href="#f=4.5"
                                       data-filter="feature"
                                       data-valueid="3"
                                       data-value="1575">
                                        4.5"</a>
                                </li>
                                <li>
                                    <a href="/#m-size=4" @click="getFilterRes(4)"
                                       data-filter="feature"
                                       data-valueid="3"
                                       data-value="97">
                                        4"</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class='section-collapse'>
                        <a class="section-collapse-trigger collapsed" role="button"
                           data-toggle="collapse"
                           href="#collapseFilter19"
                           aria-expanded="false">
                            <div class="collapse-label">Bộ nhớ trong<span
                                        class="ssg-icon icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse"
                             id="collapseFilter19">
                            <ul class="features-filter">
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=116"
                                       data-filter="feature"
                                       data-valueid="19"
                                       data-value="116">
                                        32 GB</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=369"
                                       data-filter="feature"
                                       data-valueid="19"
                                       data-value="369">
                                        16 GB</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=961"
                                       data-filter="feature"
                                       data-valueid="19"
                                       data-value="961">
                                        8 GB</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1776"
                                       data-filter="feature"
                                       data-valueid="19"
                                       data-value="1776">
                                        4 GB</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=39"
                                       data-filter="feature"
                                       data-valueid="19"
                                       data-value="39">
                                        128 GB</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class='section-collapse'>
                        <a class="section-collapse-trigger collapsed" role="button"
                           data-toggle="collapse"
                           href="#collapseFilter39"
                           aria-expanded="false">
                            <div class="collapse-label">Dung lượng pin<span
                                        class="ssg-icon icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse"
                             id="collapseFilter39">
                            <ul class="features-filter">
                                <li>
                                    <a href="/dien-thoai/?p=1"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="399">
                                        < 2000 mAh</a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?p=2"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="399">
                                        2000 - 3000 mAh</a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?p=3"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="399">
                                        3000 - 4000 mAh</a>
                                </li>
                                <li>
                                    <a href="/dien-thoai/?p=4"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="399">
                                        > 4000 mAh</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="socials">
                        <div class="fb-like-btn">
                            <div class="fb-like" data-href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html"
                                 data-layout="button_count" data-action="like"
                                 data-size="small" data-show-faces="false" data-share="false"></div>
                        </div>
                        <div class="fb-share-btn">
                            <div class="fb-share-button"
                                 data-href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html"
                                 data-layout="button"
                                 data-size="small"
                                 data-mobile-iframe="false"></div>
                        </div>
                        <div class="fb-save-btn">
                            <div class="fb-save" data-uri="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html"
                                 data-size="large"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
