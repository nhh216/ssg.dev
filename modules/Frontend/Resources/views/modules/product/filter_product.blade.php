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
            <div class="product-filter-wrapper">
                <div class="product-filter">
                    <div class='pull-right list-sort product-filter-sort'>
                        <a class="btn-filter" id="filter-sort" data-toggle="modal"
                           data-target="#product-filter-box">Sắp xếp:
                            <span id="sort-selected">
                                                                    Phổ biến                                                        </span>
                            <i class="icon arrow-down-s"></i>
                        </a>
                        <div class="sort-options">
                            <div class="option-row">
                                <a href="#"
                                   class="sort-label active"
                                   data-sort="popularity">Phổ biến</a>
                            </div>
                            <div class="option-row">
                                <a href="#"
                                   class="sort-label"
                                   data-sort="priceAsc">Giá tăng dần</a>
                            </div>
                            <div class="option-row">
                                <a href="#"
                                   class="sort-label"
                                   data-sort="priceDesc">Giá giảm dần</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
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

                    <div class='section-collapse'>
                        <a class='section-collapse-trigger' role="button" data-toggle="collapse"
                           href="#collapseFilterCategory">
                            <div class="collapse-label">Danh mục<span
                                        class="icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse in" id="collapseFilterCategory">
                            <div class="scroll-container scroll-height">
                                <ul class="scrollbox" id="categories">
                                    <li class="selected">
                                        <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html"
                                           title="Điện thoại di động">Điện thoại di động <span class="filter-count">(1546)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t39-may-tinh-bang.html"
                                           title="Máy tính bảng">Máy tính bảng <span
                                                    class="filter-count">(324)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t1097-phu-kien-dien-thoai.html"
                                           title="Phụ kiện điện thoại">Phụ kiện điện thoại <span
                                                    class="filter-count">(106870)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t1108-thiet-bi-deo-cong-nghe.html"
                                           title="Thiết bị đeo công nghệ">Thiết bị đeo công nghệ <span
                                                    class="filter-count">(3042)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t355-sac-du-phong.html"
                                           title="Sạc dự phòng">Sạc dự phòng <span
                                                    class="filter-count">(1527)</span></a>
                                    </li>
                                </ul>
                            </div>
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
                            <div class="scroll-container scroll-height" style="overflow: hidden;position: relative;outline: none;">
                                <ul id="brands" class="scrollbox">
                                    @foreach($listmanufacture as $manufacture)
                                    <li>
                                        <a href="{{$manufacture->slug}}"
                                           data-pick="false"
                                           data-filter="b"
                                           data-value="{{$manufacture->id}}">{{$manufacture->name}}
                                            <span class="filter-count">({{ $manufacture->products->count() }})</span></a>
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
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?price=0-10000000"
                                       data-filter="price"
                                       data-value="0-10000000">
                                        Dưới 10 triệu<span
                                                class="filter-count"> (1413)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?price=10000000-20000000"
                                       data-filter="price"
                                       data-value="10000000-20000000">
                                        10 triệu - 20 triệu<span
                                                class="filter-count"> (93)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?price=20000000-30000000"
                                       data-filter="price"
                                       data-value="20000000-30000000">
                                        20 triệu - 30 triệu<span
                                                class="filter-count"> (39)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?price=30000000-40000000"
                                       data-filter="price"
                                       data-value="30000000-40000000">
                                        30 triệu - 40 triệu<span
                                                class="filter-count"> (2)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?price=40000000-50000000"
                                       data-filter="price"
                                       data-value="40000000-50000000">
                                        40 triệu - 50 triệu<span
                                                class="filter-count"> (1)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?price=60000000-70000000"
                                       data-filter="price"
                                       data-value="60000000-70000000">
                                        60 triệu - 70 triệu<span
                                                class="filter-count"> (1)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?price=80000000-90000000"
                                       data-filter="price"
                                       data-value="80000000-90000000">
                                        80 triệu - 90 triệu<span
                                                class="filter-count"> (1)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?price=90000000-100000000"
                                       data-filter="price"
                                       data-value="90000000-100000000">
                                        90 triệu - 100 triệu<span
                                                class="filter-count"> (2)</span>
                                    </a>
                                </li>
                            </ul>
                            <ul id="custom-price">
                                <li>
                                    <input id="price-slider" type="text" value="" style="display: none;"
                                           data-slider-min="105000"
                                           data-slider-max="99000000"
                                           data-slider-step="1000"
                                           data-slider-value="[105000,99000000]"/>
                                    <div class="custom-price-range">
                                        <form id="custom-price-form">
                                            <div class="input-container">
                                                <div class="input-wrapper">
                                                    <input type="text" class="inpt-custom-price"
                                                           id="min-price" autocomplete="off"
                                                           value="105.000"
                                                           data-value="105000">
                                                </div>
                                                <div class="input-wrapper">
                                                    <input type="text" class="inpt-custom-price"
                                                           id="max-price" autocomplete="off"
                                                           value="99.000.000"
                                                           data-value="99000000">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="action-wrapper">
                                                <button type="submit"
                                                        class="ssg-btn blue-text full-width">Áp dụng
                                                </button>
                                            </div>
                                        </form>
                                    </div>
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
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=22"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="22">
                                        1080 x 1920 pixels</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=957"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="957">
                                        720 x 1280 pixels</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1198"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="1198">
                                        540 x 960 pixels</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=2914"
                                       data-filter="feature"
                                       data-valueid="2"
                                       data-value="2914">
                                        480 x 854 pixels</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=2229"
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
                                    <a href="/dien-thoai/#m-size=4" @click="getFilterRes(4)"
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
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=399"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="399">
                                        2600 mAh</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1885"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="1885">
                                        2500 mAh</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=944"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="944">
                                        2300 mAh</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=2704"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="2704">
                                        2200 mAh</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1204"
                                       data-filter="feature"
                                       data-valueid="39"
                                       data-value="1204">
                                        2100 mAh</a>
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
