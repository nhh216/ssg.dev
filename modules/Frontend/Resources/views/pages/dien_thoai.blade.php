
<!DOCTYPE html>
<html lang="vi">
<head>
    <base href="{{asset('')}}">
    <link rel="manifest" href="/manifest.json">
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
    <link rel="stylesheet" type="text/css" href="css/style-product.css" />
<body id="category">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 no-padding">
            <div id="header">
                <div class="block-container header-container">
                    <div class="logo-wrapper">
                        <div class="ssg-logo">
                            <a href="/"></a>
                        </div>
                    </div>
                    <div class="nav-btn-wrapper">
                        <div class="nav-btn">
                            <div class="hambuger-btn">
                                <div class="hambuger-btn-inner">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div><div class="nav-label">Tất cả<br/>danh mục</div>
                        </div>
                    </div>
                    <div class="search-wrapper">
                        <form action="/s" id="header-search-form">
                            <div class="search-control">
                                <input type="search" id="search-input" value=""
                                       placeholder="Tìm kiếm sản phẩm" autocomplete="off">
                                <button type="submit" title="Tìm kiếm">
                                    <i class="ssg-icon icon-search"></i>
                                </button>
                            </div>
                            <div class="header-search-result">
                                <div class="result-inner">
                                    <div id="search-suggestion"></div>
                                    <div id="search-history"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="user-wrapper"></div>
                </div>
                <div class="header-menu">
                    <div class="header-share-nav" id="header-menu">
                        <div class="block-container">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="product-filter-container">
            <div class="block-container">
                <div class="top-article">
                    <div class="header">Bảng giá <h1>Điện thoại</h1> tháng 4/2018</div>
                    <div class="content">
                        <p>
                            Bảng giá điện thoại cập nhật mới nhất gồm các thương hiệu hàng đầu Samsung, LG, Apple, Nokia,...Giá điện thoại được thu thập từ các website bán hàng trực tuyến Lazada, Tiki, Adayroi, Lotte... và các cửa hàng lớn Thế giới di động, FPT Shop, CellphoneS, Viettel Store....
                            Các sản phẩm Điện thoại phổ biến nhất tháng 4/2018  như: Xiaomi Redmi Note 4 3GB/32GB, Samsung Galaxy J7 Pro, Samsung Galaxy J3 Pro 16GB 2017                    </p>
                    </div>
                </div>

                <div class="breadcrumb-wrapper">
                    <ul class="ssg-breadcrumb">
                        <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="https://www.sosanhgia.com">
                                <span itemprop="title">Trang chủ</span>
                            </a>
                        </li>
                        <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="https://www.sosanhgia.com/t1002-thiet-bi-di-dong.html">
                                <span itemprop="title">Thiết bị di động</span>
                            </a>
                        </li>
                        <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html">
                                <span itemprop="title">Điện thoại di động</span>
                            </a>
                        </li>
                    </ul>
                </div>                        <div class="product-filter-wrapper">
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
                                        class="ssg-icon icon-plus"></span></div>
                        </a>
                        <div class="section-collapse-body collapse in" id="collapseFilterCategory">
                            <div class="scroll-container scroll-height">
                                <ul class="scrollbox" id="categories">
                                    <li class="selected">
                                        <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html"
                                           title="Điện thoại di động">Điện thoại di động                                                <span class="filter-count">(1546)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t39-may-tinh-bang.html"
                                           title="Máy tính bảng">Máy tính bảng                                                <span class="filter-count">(324)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t1097-phu-kien-dien-thoai.html"
                                           title="Phụ kiện điện thoại">Phụ kiện điện thoại                                                <span class="filter-count">(106870)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t1108-thiet-bi-deo-cong-nghe.html"
                                           title="Thiết bị đeo công nghệ">Thiết bị đeo công nghệ                                                <span class="filter-count">(3042)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t355-sac-du-phong.html"
                                           title="Sạc dự phòng">Sạc dự phòng                                                <span class="filter-count">(1527)</span></a>
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
                            <div class="scroll-container scroll-height">
                                <ul id="brands" class="scrollbox">
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b3-dien-thoai-di-dong-samsung.html" data-pick="false"
                                           data-filter="b"
                                           data-value="3">Samsung                                                <span class="filter-count">(112)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b50-dien-thoai-di-dong-nokia.html" data-pick="false"
                                           data-filter="b"
                                           data-value="50">Nokia                                                <span class="filter-count">(103)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b47-dien-thoai-di-dong-apple.html" data-pick="false"
                                           data-filter="b"
                                           data-value="47">Apple                                                <span class="filter-count">(69)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b216-dien-thoai-di-dong-xiaomi.html" data-pick="false"
                                           data-filter="b"
                                           data-value="216">Xiaomi                                                <span class="filter-count">(67)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b84-dien-thoai-di-dong-oppo.html" data-pick="false"
                                           data-filter="b"
                                           data-value="84">OPPO                                                <span class="filter-count">(60)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b52-dien-thoai-di-dong-asus.html" data-pick="false"
                                           data-filter="b"
                                           data-value="52">Asus                                                <span class="filter-count">(35)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b7-dien-thoai-di-dong-sony.html" data-pick="false"
                                           data-filter="b"
                                           data-value="7">Sony                                                <span class="filter-count">(33)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b57-dien-thoai-di-dong-lenovo.html" data-pick="false"
                                           data-filter="b"
                                           data-value="57">Lenovo                                                <span class="filter-count">(29)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b5-dien-thoai-di-dong-lg.html" data-pick="false"
                                           data-filter="b"
                                           data-value="5">LG                                                <span class="filter-count">(28)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b49-dien-thoai-di-dong-htc.html" data-pick="false"
                                           data-filter="b"
                                           data-value="49">HTC                                                <span class="filter-count">(25)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b42-dien-thoai-di-dong-philips.html" data-pick="false"
                                           data-filter="b"
                                           data-value="42">Philips                                                <span class="filter-count">(25)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b17-dien-thoai-di-dong-sharp.html" data-pick="false"
                                           data-filter="b"
                                           data-value="17">Sharp                                                <span class="filter-count">(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b399-dien-thoai-di-dong-tp-link.html" data-pick="false"
                                           data-filter="b"
                                           data-value="399">TP-Link                                                <span class="filter-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b304-dien-thoai-di-dong-khac.html" data-pick="false"
                                           data-filter="b"
                                           data-value="304">KHÁC                                                <span class="filter-count">(185)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b118-dien-thoai-di-dong-masstel.html" data-pick="false"
                                           data-filter="b"
                                           data-value="118">Masstel                                                <span class="filter-count">(98)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b117-dien-thoai-di-dong-fpt.html" data-pick="false"
                                           data-filter="b"
                                           data-value="117">FPT                                                <span class="filter-count">(57)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b82-dien-thoai-di-dong-mobiistar.html" data-pick="false"
                                           data-filter="b"
                                           data-value="82">Mobiistar                                                <span class="filter-count">(54)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b539-dien-thoai-di-dong-goly.html" data-pick="false"
                                           data-filter="b"
                                           data-value="539">Goly                                                <span class="filter-count">(37)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b116-dien-thoai-di-dong-mobell.html" data-pick="false"
                                           data-filter="b"
                                           data-value="116">Mobell                                                <span class="filter-count">(36)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b527-dien-thoai-di-dong-suntek.html" data-pick="false"
                                           data-filter="b"
                                           data-value="527">Suntek                                                <span class="filter-count">(34)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b541-dien-thoai-di-dong-itel.html" data-pick="false"
                                           data-filter="b"
                                           data-value="541">ITEL                                                <span class="filter-count">(33)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b69-dien-thoai-di-dong-huawei.html" data-pick="false"
                                           data-filter="b"
                                           data-value="69">Huawei                                                <span class="filter-count">(30)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b549-dien-thoai-di-dong-zip-mobile.html" data-pick="false"
                                           data-filter="b"
                                           data-value="549">Zip Mobile                                                <span class="filter-count">(28)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b119-dien-thoai-di-dong-wiko.html" data-pick="false"
                                           data-filter="b"
                                           data-value="119">Wiko                                                <span class="filter-count">(26)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b115-dien-thoai-di-dong-gionee.html" data-pick="false"
                                           data-filter="b"
                                           data-value="115">Gionee                                                <span class="filter-count">(22)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b525-dien-thoai-di-dong-vivo.html" data-pick="false"
                                           data-filter="b"
                                           data-value="525">Vivo                                                <span class="filter-count">(19)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b68-dien-thoai-di-dong-motorola.html" data-pick="false"
                                           data-filter="b"
                                           data-value="68">Motorola                                                <span class="filter-count">(16)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b518-dien-thoai-di-dong-lv-mobile.html" data-pick="false"
                                           data-filter="b"
                                           data-value="518">LV Mobile                                                <span class="filter-count">(16)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b48-dien-thoai-di-dong-blackberry.html" data-pick="false"
                                           data-filter="b"
                                           data-value="48">BlackBerry                                                <span class="filter-count">(16)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b742-dien-thoai-di-dong-forme.html" data-pick="false"
                                           data-filter="b"
                                           data-value="742">Forme                                                <span class="filter-count">(14)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b508-dien-thoai-di-dong-coolpad.html" data-pick="false"
                                           data-filter="b"
                                           data-value="508">Coolpad                                                <span class="filter-count">(14)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b121-dien-thoai-di-dong-bavapen.html" data-pick="false"
                                           data-filter="b"
                                           data-value="121">Bavapen                                                <span class="filter-count">(13)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b281-dien-thoai-di-dong-meizu.html" data-pick="false"
                                           data-filter="b"
                                           data-value="281">MEIZU                                                <span class="filter-count">(12)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b67-dien-thoai-di-dong-q-mobile.html" data-pick="false"
                                           data-filter="b"
                                           data-value="67">Q-Mobile                                                <span class="filter-count">(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b315-dien-thoai-di-dong-zte.html" data-pick="false"
                                           data-filter="b"
                                           data-value="315">ZTE                                                <span class="filter-count">(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b768-dien-thoai-di-dong-s-mobile.html" data-pick="false"
                                           data-filter="b"
                                           data-value="768">S-Mobile                                                <span class="filter-count">(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b515-dien-thoai-di-dong-arbutus.html" data-pick="false"
                                           data-filter="b"
                                           data-value="515">Arbutus                                                <span class="filter-count">(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b921-dien-thoai-di-dong-wing.html" data-pick="false"
                                           data-filter="b"
                                           data-value="921">Wing                                                <span class="filter-count">(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b537-dien-thoai-di-dong-bluboo.html" data-pick="false"
                                           data-filter="b"
                                           data-value="537">BLUBOO                                                <span class="filter-count">(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b913-dien-thoai-di-dong-leagoo.html" data-pick="false"
                                           data-filter="b"
                                           data-value="913">Leagoo                                                <span class="filter-count">(7)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b533-dien-thoai-di-dong-hyundai.html" data-pick="false"
                                           data-filter="b"
                                           data-value="533">Hyundai                                                <span class="filter-count">(7)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b215-dien-thoai-di-dong-alcatel.html" data-pick="false"
                                           data-filter="b"
                                           data-value="215">Alcatel                                                <span class="filter-count">(7)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b550-dien-thoai-di-dong-zono.html" data-pick="false"
                                           data-filter="b"
                                           data-value="550">Zono                                                <span class="filter-count">(7)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b926-dien-thoai-di-dong-telego.html" data-pick="false"
                                           data-filter="b"
                                           data-value="926">Telego                                                <span class="filter-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b932-dien-thoai-di-dong-tecno.html" data-pick="false"
                                           data-filter="b"
                                           data-value="932">Tecno                                                <span class="filter-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b909-dien-thoai-di-dong-tht.html" data-pick="false"
                                           data-filter="b"
                                           data-value="909">THT                                                <span class="filter-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b139-dien-thoai-di-dong-sky-pantech.html" data-pick="false"
                                           data-filter="b"
                                           data-value="139">Sky Pantech                                                <span class="filter-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b906-dien-thoai-di-dong-infinix.html" data-pick="false"
                                           data-filter="b"
                                           data-value="906">Infinix                                                <span class="filter-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b509-dien-thoai-di-dong-oukitel.html" data-pick="false"
                                           data-filter="b"
                                           data-value="509">Oukitel                                                <span class="filter-count">(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b222-dien-thoai-di-dong-massgo.html" data-pick="false"
                                           data-filter="b"
                                           data-value="222">Massgo                                                <span class="filter-count">(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b911-dien-thoai-di-dong-freetel.html" data-pick="false"
                                           data-filter="b"
                                           data-value="911">Freetel                                                <span class="filter-count">(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b312-dien-thoai-di-dong-intex.html" data-pick="false"
                                           data-filter="b"
                                           data-value="312">INTEX                                                <span class="filter-count">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b1183-dien-thoai-di-dong-viettel.html" data-pick="false"
                                           data-filter="b"
                                           data-value="1183">Viettel                                                <span class="filter-count">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b218-dien-thoai-di-dong-obi.html" data-pick="false"
                                           data-filter="b"
                                           data-value="218">Obi                                                <span class="filter-count">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b54-dien-thoai-di-dong-archos.html" data-pick="false"
                                           data-filter="b"
                                           data-value="54">Archos                                                <span class="filter-count">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b924-dien-thoai-di-dong-connspeed.html" data-pick="false"
                                           data-filter="b"
                                           data-value="924">CONNSPEED                                                <span class="filter-count">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b426-dien-thoai-di-dong-asanzo.html" data-pick="false"
                                           data-filter="b"
                                           data-value="426">Asanzo                                                <span class="filter-count">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b58-dien-thoai-di-dong-fujitsu.html" data-pick="false"
                                           data-filter="b"
                                           data-value="58">Fujitsu                                                <span class="filter-count">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b1999-dien-thoai-di-dong-maxx.html" data-pick="false"
                                           data-filter="b"
                                           data-value="1999">Maxx                                                <span class="filter-count">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b2001-dien-thoai-di-dong-gamma.html" data-pick="false"
                                           data-filter="b"
                                           data-value="2001">Gamma                                                <span class="filter-count">(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b460-dien-thoai-di-dong-cutepad.html" data-pick="false"
                                           data-filter="b"
                                           data-value="460">CutePad                                                <span class="filter-count">(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b915-dien-thoai-di-dong-hotwav.html" data-pick="false"
                                           data-filter="b"
                                           data-value="915">Hotwav                                                <span class="filter-count">(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b914-dien-thoai-di-dong-epic.html" data-pick="false"
                                           data-filter="b"
                                           data-value="914">EPIC                                                <span class="filter-count">(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b920-dien-thoai-di-dong-admet.html" data-pick="false"
                                           data-filter="b"
                                           data-value="920">Admet                                                <span class="filter-count">(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b1653-dien-thoai-di-dong-bkav.html" data-pick="false"
                                           data-filter="b"
                                           data-value="1653">Bkav                                                <span class="filter-count">(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b930-dien-thoai-di-dong-muphone.html" data-pick="false"
                                           data-filter="b"
                                           data-value="930">Muphone                                                <span class="filter-count">(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b1283-dien-thoai-di-dong-hphone.html" data-pick="false"
                                           data-filter="b"
                                           data-value="1283">Hphone                                                <span class="filter-count">(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.sosanhgia.com/t6.b0-dien-thoai-di-dong.html" data-pick="false"
                                           data-filter="b"
                                           data-value="0">...                                                <span class="filter-count">(44)</span></a>
                                    </li>
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
                                                        class="ssg-btn blue-text full-width">Áp dụng</button>
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
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=22" data-filter="feature"
                                       data-valueid="2"
                                       data-value="22">
                                        1080 x 1920 pixels</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=957" data-filter="feature"
                                       data-valueid="2"
                                       data-value="957">
                                        720 x 1280 pixels</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1198" data-filter="feature"
                                       data-valueid="2"
                                       data-value="1198">
                                        540 x 960 pixels</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=2914" data-filter="feature"
                                       data-valueid="2"
                                       data-value="2914">
                                        480 x 854 pixels</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=2229" data-filter="feature"
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
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1051" data-filter="feature"
                                       data-valueid="3"
                                       data-value="1051">
                                        5.2"</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=506" data-filter="feature"
                                       data-valueid="3"
                                       data-value="506">
                                        5"</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=120" data-filter="feature"
                                       data-valueid="3"
                                       data-value="120">
                                        4.7"</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1575" data-filter="feature"
                                       data-valueid="3"
                                       data-value="1575">
                                        4.5"</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=97" data-filter="feature"
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
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=116" data-filter="feature"
                                       data-valueid="19"
                                       data-value="116">
                                        32 GB</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=369" data-filter="feature"
                                       data-valueid="19"
                                       data-value="369">
                                        16 GB</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=961" data-filter="feature"
                                       data-valueid="19"
                                       data-value="961">
                                        8 GB</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1776" data-filter="feature"
                                       data-valueid="19"
                                       data-value="1776">
                                        4 GB</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=39" data-filter="feature"
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
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=399" data-filter="feature"
                                       data-valueid="39"
                                       data-value="399">
                                        2600 mAh</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1885" data-filter="feature"
                                       data-valueid="39"
                                       data-value="1885">
                                        2500 mAh</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=944" data-filter="feature"
                                       data-valueid="39"
                                       data-value="944">
                                        2300 mAh</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=2704" data-filter="feature"
                                       data-valueid="39"
                                       data-value="2704">
                                        2200 mAh</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?f=1204" data-filter="feature"
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
                            <div class="fb-like" data-href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html" data-layout="button_count" data-action="like"
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
                            <div class="fb-save" data-uri="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html" data-size="large"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productlist-products-container">
                <div class="block-container-1">
                    <div class="product-grid no-grid-ads">

                        <div id="p57241"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p57241-xiaomi-redmi-note-4-3gb-32gb.html">
                            <a href="https://www.sosanhgia.com/p57241-xiaomi-redmi-note-4-3gb-32gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/cc448c9d385847499721ac808d0be3e6/xiaomi-redmi-note-4-3gb/32gb.jpg" alt="Xiaomi Redmi Note 4 3GB/32GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Xiaomi Redmi Note 4 3GB/32GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">3.041.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: IPS LCD, 5.5", Full HD<br>Hệ điều hành: Android 6.0 (Marshmallow)<br>Camera sau: 13 MP/Camera trước: 5 MP<br>CPU: Snapdragon 625 8 nhân 64-bit<br>RAM: 3 GB/Bộ nhớ trong: 32 GB..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p60310"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p60310-samsung-galaxy-j7-pro.html">
                            <a href="https://www.sosanhgia.com/p60310-samsung-galaxy-j7-pro.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/7cca7f53855f4b63bb30f5ef2b8c9645/samsung-galaxy-j7-pro.jpeg" alt="Samsung Galaxy J7 Pro">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy J7 Pro</div>
                                    <div class="product-price"><span
                                                class="p-price-number">4.490.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình Super AMOLED 5.5 inch FHD<br>- Camera trước Trước 13MP, khẩu độ f1.9<br>- Camera sau 13MP khẩu độ f1.7<br>- 3GB RAM + 32GB ROM<br>- Pin 3600mAh, chế độ siêu tiết kiệm pin..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p48704"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p48704-samsung-galaxy-j3-pro-16gb-2017.html">
                            <a href="https://www.sosanhgia.com/p48704-samsung-galaxy-j3-pro-16gb-2017.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/9d1ec8ef6a9343d2af75374ede668582/samsung-galaxy-j3-pro-16gb.jpg" alt="Samsung Galaxy J3 Pro 16GB 2017">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy J3 Pro 16GB 2017</div>
                                    <div class="product-price"><span
                                                class="p-price-number">2.490.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Hệ điều hành Android 7.0 (Nougat)<br>Bộ nhớ trong 16GB<br>RAM 2GB<br>Chipset Exynos 7570 Quad<br>Chip đồ họa Mali-T720<br>Camera sau 13 (MP)<br>Kích thước màn hình 5 (inches)<br>Camera trước 5 (MP)<br>Dung lượng pin 2.400 (mAh)..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p46939"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p46939-samsung-galaxy-j7-prime.html">
                            <a href="https://www.sosanhgia.com/p46939-samsung-galaxy-j7-prime.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/48a73eaf5e8c404aa2bba1dffe7e45bd/samsung-galaxy-j7-prime.jpg" alt="Samsung Galaxy J7 Prime">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy J7 Prime</div>
                                    <div class="product-price"><span
                                                class="p-price-number">4.355.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Hệ điều hành Android 6.0 (Marshmallow)<br>Loại màn hình TFT<br>Màn hình rộng 5.5 inch<br>Camera sau 13 MP<br>Tốc độ CPU 1.6 GHz<br>Loại pin Pin chuẩn Li-Ion..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p60292"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p60292-nokia-3.html">
                            <a href="https://www.sosanhgia.com/p60292-nokia-3.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/64d8bc553d994416bb2bc07836df1ab0/nokia-3.jpg" alt="Nokia 3">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Nokia 3</div>
                                    <div class="product-price"><span
                                                class="p-price-number">2.347.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: IPS LCD, 5", HD<br>Hệ điều hành: Android 7.0 (Nougat)<br>Camera trước/sau: 8 MP/ 8 MP<br>CPU: MT6737 4 nhân<br>RAM: 2 GB<br>Bộ nhớ trong: 16 GB<br>Loại Pin 2630 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p59638"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p59638-dien-thoai-nokia-3310-(2017).html">
                            <a href="https://www.sosanhgia.com/p59638-dien-thoai-nokia-3310-(2017).html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/58d7faf37e38417bb88133ab6572c4af/dien-thoai-nokia-3310-phien-ban-2017.jpeg" alt="Điện thoại Nokia 3310 (2017)">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Điện thoại Nokia 3310 (2017)</div>
                                    <div class="product-price"><span
                                                class="p-price-number">750.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: TFT, 2.4", 65.536 màu<br>Danh bạ: Chưa xác định<br>Camera: 2 MP<br>Jack cắm tai nghe: 3.5 mm<br>Radio FM: Có<br>Dung lượng pin: 1200 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p57628"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p57628-samsung-galaxy-s8-plus.html">
                            <a href="https://www.sosanhgia.com/p57628-samsung-galaxy-s8-plus.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/c3aa7e88321b489ba5d1d5aec22790d7/samsung-galaxy-s8-plus.jpg" alt="Samsung Galaxy S8 Plus">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy S8 Plus</div>
                                    <div class="product-price"><span
                                                class="p-price-number">13.190.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Kích thước màn hình:6.2"";<br>Chip xử lý (CPU):Qualcomm MSM8998 Snapdragon 835<br>Hệ điều hành : Android 7.0 (Nougat)<br>RAM:4 GB<br>Máy ảnh chính:12.0 MP<br>Bộ nhớ trong:64 GB<br>Dung lượng pin (mAh):3500 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63574"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63574-samsung-galaxy-note-8-64gb-6gb.html">
                            <a href="https://www.sosanhgia.com/p63574-samsung-galaxy-note-8-64gb-6gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/644e983c0a9a4d27ad0bdd4c94b03e0c/samsung-galaxy-note-8.jpg" alt="Samsung Galaxy Note 8 64GB/6GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy Note 8 64GB/6GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">15.990.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">

                                        Màn hình:Super AMOLED,
                                        6.3", Quad HD<br>Hệ điều hành:Android 7.1<br>Camera sau:2 camera 12 MP<br>Camera trước:8 MP<br>CPU:Exynos 8895 8 nhân 64-bit<br>RAM:6 GB<br>Bộ nhớ trong:64 GB<br>Thẻ nhớ:MicroSD, hỗ trợ tối đa 256
                                        GB<br>Thẻ SIM:2 Nano SIM, hỗ trợ 4G<br>Dung lượng pin:3300 mAh, có sạc
                                        nhanh..                </div>
                                </div>
                            </div>
                        </div>                                                <div class="product-list-promotions has-promo">
                            <div class="block-container">
                                <div class="promotions collapsed">
                                    <div class="promo-row">
                                        <div class="merchant-logo-wrapper">
                                            <div class="merchant-logo">
                                                <img src="https://img.sosanhgia.com/images/80x0/188ccd667f4448b78b3f9188f95fc102/lazada.jpg">
                                            </div>
                                        </div>
                                        <div class="promo-content-wrapper">
                                            <div class="promo-content">Giá rẻ cuối tuần giảm đến 49%</div>
                                        </div>
                                        <div class="cta">
                                            <a href="http://redirect.sosanhgia.com/redirect.php?pr_id=854&asub=direct~CUOI-TUAN-SALE"
                                               class="ssg-btn md-btn link-btn-promo red-text"
                                               target="_blank"
                                               rel="nofollow"><span>Click xem</span></a>
                                        </div>
                                    </div>
                                    <div class="promo-row">
                                        <div class="merchant-logo-wrapper">
                                            <div class="merchant-logo">
                                                <img src="https://img.sosanhgia.com/images/80x0/188ccd667f4448b78b3f9188f95fc102/lazada.jpg">
                                            </div>
                                        </div>
                                        <div class="promo-content-wrapper">
                                            <div class="promo-content">Top điện thoại giá giảm sâu</div>
                                        </div>
                                        <div class="cta">
                                            <a href="http://redirect.sosanhgia.com/redirect.php?pr_id=500&asub=direct~DIEN-THOAI"
                                               class="ssg-btn md-btn link-btn-promo blue-text"
                                               target="_blank"
                                               rel="nofollow"><span>Click xem</span></a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div id="p60326"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p60326-nokia-5.html">
                            <a href="https://www.sosanhgia.com/p60326-nokia-5.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/348bff393eff4ea78bb0c89f5e52a6d1/nokia-5.jpg" alt="Nokia 5">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Nokia 5</div>
                                    <div class="product-price"><span
                                                class="p-price-number">3.540.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: IPS LCD, 5.2", HD<br>Hệ điều hành: Android 7 (Nougat)<br>Camera sau: 13 MP<br>Camera trước: 8 MP<br>CPU: Qualcomm Snapdragon 430 8 nhân 64 bit<br>RAM: 2 GB<br>Bộ nhớ trong: 16 GB..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p57632"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p57632-samsung-galaxy-s8.html">
                            <a href="https://www.sosanhgia.com/p57632-samsung-galaxy-s8.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/10f34ae04f7840abb9c10892e620dcc1/samsung-galaxy-s8.jpg" alt="Samsung Galaxy S8">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy S8</div>
                                    <div class="product-price"><span
                                                class="p-price-number">12.290.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Kích cỡ màn hình 1440 x 2560 pixels, 5.8 inches, (<br>568 ppi)<br>Bộ nhớ trong 64 GB, 4 GB RAM<br>Camera chính 12 MP, f/1.7, phase detection autofocus, OIS, quad-LED
                                        (dual tone) flash<br>Camera phụ 8 MP, f/2.0, autofocus<br>Hệ điều hành Android v7.0.x (Nougat)<br>Chipset Exynos 8895 Octa<br>Pin chuẩn Li-Ion 3000 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63900"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63900-dien-thoai-nokia-105-dual-2017.html">
                            <a href="https://www.sosanhgia.com/p63900-dien-thoai-nokia-105-dual-2017.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/4302cd9df0c64473ba2f701f11d87b88/dien-thoai-nokia-105-dual-2017.jpg" alt="Điện Thoại Nokia 105 dual 2017">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Điện Thoại Nokia 105 dual 2017</div>
                                    <div class="product-price"><span
                                                class="p-price-number">321.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Kiểu dáng bỏ tròn, gợi cảm<br>- Màn hình QVGA 1,8" đã cải thiện<br>- Dung lượng pin 800mAh<br>- Thời gian thoại lên tới 15 giờ..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p60330"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p60330-nokia-6-32gb.html">
                            <a href="https://www.sosanhgia.com/p60330-nokia-6-32gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/c0d2b7e5280545908fb679fb16b6f5d8/nokia-6.jpg" alt="Nokia 6 32GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Nokia 6 32GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">3.967.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Hệ điều hành: Android 7.0<br>Màn hình: AMOLED, 5.5" độ phân giải 1080 x 1920 pixels<br>Bộ vi xử lý: Qualcomm Snapdragon 430 8 nhân<br>RAM: 4 GB - Bộ nhớ trong: 32 GB<br>Camera chính: 16 MP, quay phim Full HD<br>Camera phụ: 8 MP<br>Pin: 3000 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63905"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63905-oppo-a71.html">
                            <a href="https://www.sosanhgia.com/p63905-oppo-a71.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/cf169741267643cb96f897d289c896aa/oppo-a71.jpg" alt="OPPO A71">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">OPPO A71</div>
                                    <div class="product-price"><span
                                                class="p-price-number">3.085.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Chính hãng, Nguyên seal, Mới 100%, Chưa Active<br>Miễn phí giao hàng toàn quốc<br>Thiết kế nguyên khối<br>Màn hình HD 5.2 inch<br>Camera Trước/Sau: 5MP/13MP<br>CPU: Mediatek MT6750 8 nhân<br>Bộ Nhớ: 16GB<br>RAM: 3GB<br>SIM tương thích: NanoSIM..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p82591"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p82591-samsung-galaxy-j2-pro-(2018).html">
                            <a href="https://www.sosanhgia.com/p82591-samsung-galaxy-j2-pro-(2018).html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/114a65d817a9484599e5d0fa441d4ab9/samsung-galaxy-j2-pro-(2018).jpeg" alt="Samsung Galaxy J2 Pro (2018)">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy J2 Pro (2018)</div>
                                    <div class="product-price"><span
                                                class="p-price-number">1.990.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        • Màn hình: Super AMOLED, 5 inch, qHD<br>• CPU: Qualcomm Snapdragon 425 4 nhân 64-bit<br>• RAM/ROM: 1.5 GB/16 GB<br>• Camera: 8 MP/5 MP<br>• Pin: Li-Ion 2600 mAh<br>• 4G: Có hỗ trợ..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63577"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63577-iphone-8-plus-64gb.html">
                            <a href="https://www.sosanhgia.com/p63577-iphone-8-plus-64gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/b736a099f13141feb4833715b7b01f07/iphone-8-plus-64gb.jpg" alt="iPhone 8 Plus 64GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">iPhone 8 Plus 64GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">18.690.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: 5.5 inch, độ phân giải 1080 x 1920 pixels tấm nền
                                        LED-backlit IPS LCD<br>Hệ điều hành: IOS 11<br>Chip xử lý : Apple A11 Bionic, Hexa-core<br>RAM: 3 GB<br>Bộ nhớ trong: 64 GB<br>Camera: Chính Dual 12 MP, (28mm, f/1.8, OIS &amp; 56mm, f/2.8),
                                        autofocus, 2x optical zoom, quad-LED (dual tone) flash, phụ 7
                                        MP<br>Pin : 2675 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p41338"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p41338-oppo-neo-9-(a37).html">
                            <a href="https://www.sosanhgia.com/p41338-oppo-neo-9-(a37).html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/fa0a160583dd427d984ff387839df5b2/oppo-neo-9-(a37).jpg" alt="OPPO Neo 9 (A37)">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">OPPO Neo 9 (A37)</div>
                                    <div class="product-price"><span
                                                class="p-price-number">2.500.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: IPS LCD, 5", HD<br>Hệ điều hành: Android 5.1 (Lollipop)<br>Camera sau: 8 MP/Camera trước: 5 MP<br>CPU: Qualcomm Snapdragon 410 4 nhân 64-bit, 1.2 GHz<br>RAM: 2 GB/Bộ nhớ trong: 16 GB..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p82590"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p82590-samsung-galaxy-a8-plus-(2018).html">
                            <a href="https://www.sosanhgia.com/p82590-samsung-galaxy-a8-plus-(2018).html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/a17850e5d4034001b66617ade98a4497/samsung-galaxy-a8-plus-(2018).jpeg" alt="Samsung Galaxy A8 Plus (2018)">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy A8 Plus (2018)</div>
                                    <div class="product-price"><span
                                                class="p-price-number">11.000.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Thiết kế viền cong<br>Màn hình: Super AMOLED, 6", FullHD+<br>Camera Trước/Sau: 16MP và 8MP/16MP<br>CPU: Exynos 7880 8 nhân 64-bit<br>Bộ Nhớ: 64GB<br>RAM: 6GB..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p64187"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p64187-xiaomi-mi-a1-(4gb-64gb).html">
                            <a href="https://www.sosanhgia.com/p64187-xiaomi-mi-a1-(4gb-64gb).html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/4bb483ed240a451094138c2c2b05c0b2/xiaomi-mi-a1.jpg" alt="Xiaomi Mi A1 (4GB/64GB)">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Xiaomi Mi A1 (4GB/64GB)</div>
                                    <div class="product-price"><span
                                                class="p-price-number">4.090.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">

                                        CPU:Snapdragon 625 8 nhân 64-bit<br>RAM:4 GB<br>Bộ nhớ trong:64 GB<br>Thẻ nhớ:MicroSD, hỗ trợ tối đa 128 GB..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63586"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63586-iphone-x-64gb.html">
                            <a href="https://www.sosanhgia.com/p63586-iphone-x-64gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/2f91e37a79754dce98b7f0f946aa0c90/iphone-x-64gb.jpg" alt="iPhone X 64GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">iPhone X 64GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">23.490.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: 5.8 inch, độ phân giải 1125 x 2436 pixels tấm nền Super AMOLED<br>Hệ điều hành: IOS 11<br>Chip xử lý : Apple A11 Bionic, Hexa-core<br>RAM: 3GB<br>Bộ nhớ trong: 64 GB<br>Camera: Chính Dual 12 MP, f/1.8 &amp; f/2.4, autofocus, OIS, 2x optical zoom, quad-LED (dual tone) flash, phụ 7 MP..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63903"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63903-dien-thoai-nokia-105-single-2017.html">
                            <a href="https://www.sosanhgia.com/p63903-dien-thoai-nokia-105-single-2017.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/43782e6b0f8542ccac329fc124c92f42/dien-thoai-nokia-105-single-2017.jpg" alt="Điện thoại Nokia 105 Single 2017">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Điện thoại Nokia 105 Single 2017</div>
                                    <div class="product-price"><span
                                                class="p-price-number">299.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Kiểu dáng bỏ tròn, gợi cảm<br>- Màn hình QVGA 1,8" đã cải thiện<br>- Dung lượng pin 800mAh<br>- Thời gian thoại lên tới 15 giờ..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p50598"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p50598-dien-thoai-nokia-216.html">
                            <a href="https://www.sosanhgia.com/p50598-dien-thoai-nokia-216.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/a944b4513559497096c7c5d422cda20f/dien-thoai-nokia-216.jpg" alt="Điện thoại Nokia 216">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Điện thoại Nokia 216</div>
                                    <div class="product-price"><span
                                                class="p-price-number">647.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình : QVGA, 5.4 inches<br>Thẻ nhớ MicroSD, lên đến 32GB<br>Camera: VGA<br>Pin: 1020 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p15180"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p15180-nokia-230.html">
                            <a href="https://www.sosanhgia.com/p15180-nokia-230.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/81996750b1e54b40b1704699340876a7/nokia-230.jpeg" alt="Nokia 230">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Nokia 230</div>
                                    <div class="product-price"><span
                                                class="p-price-number">1.057.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: WVGA, 65.536 màu, 2.8", 240 x 320 Pixels<br>SIM: 2 SIM 2 sóng<br>Camera: 2.0 MP<br>Danh bạ: 1000 số<br>Hỗ trợ thẻ tối đa:32G..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p72810"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p72810-nokia-2.html">
                            <a href="https://www.sosanhgia.com/p72810-nokia-2.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/ac0f788cfcf54ae39bacd085775b5075/nokia-2.jpeg" alt="Nokia 2">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Nokia 2</div>
                                    <div class="product-price"><span
                                                class="p-price-number">1.969.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình LTPS 5" HD<br>Mặt kính chống trầy Gorilla Glass 3<br>Thiết kế khung nhôm nguyên khối<br>Vi xử lý Qualcomm Snapdragon 210<br>RAM 1 GB, Bộ nhớ trong 8 GB..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63563"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63563-iphone-8-64gb.html">
                            <a href="https://www.sosanhgia.com/p63563-iphone-8-64gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/0ead3cd9b997466b8919c2d0300c780c/iphone-8-64gb.jpg" alt="iPhone 8 64GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">iPhone 8 64GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">13.390.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: 4.7 inch, độ phân giải 750 x 1334 pixels tấm nền
                                        LED-backlit IPS LCD<br>Hệ điều hành: IOS 11<br>Chip xử lý : Apple A11 Bionic, Hexa-core<br>RAM: 2GB<br>Bộ nhớ trong: 64GB<br>Camera: Chính 12 MP, f/1.8, autofocus, OIS, quad-LED (dual tone)
                                        flash quay phim 4K, phụ 7 MP, f/2.2<br>Pin : 1821 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p59292"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p59292-xiaomi-redmi-4x-32gb-3gb.html">
                            <a href="https://www.sosanhgia.com/p59292-xiaomi-redmi-4x-32gb-3gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/7aaa1dbac4f1477ba5b96507226806db/xiaomi-redmi-4x-32gb.jpg" alt="Xiaomi Redmi 4X 32GB/3GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Xiaomi Redmi 4X 32GB/3GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">2.950.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: IPS LCD, 5", HD<br>Hệ điều hành: Android 6.0 (Marshmallow)<br>Camera sau: 13 MP, camera trước: 5 MP<br>CPU: Snapdragon 435 8 nhân<br>RAM: 3 GB - Bộ nhớ trong: 32 GB<br>Dung lượng pin: 4100 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63938"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63938-samsung-galaxy-j7-plus-c710.html">
                            <a href="https://www.sosanhgia.com/p63938-samsung-galaxy-j7-plus-c710.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/5e5c92692aac4a819cca607308dec070/samsung-galaxy-j7-plus-c710.jpg" alt="Samsung Galaxy J7 Plus C710">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy J7 Plus C710</div>
                                    <div class="product-price"><span
                                                class="p-price-number">6.150.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình:Super AMOLED, 5.5", Full HD<br>Hệ điều hành:Android 7.0<br>Camera sau:13 MP và 5 MP (2 camera)<br>Camera trước:16 MP<br>CPU:Mediatek Helio P25 Lite<br>RAM: 4GB<br>Bộ nhớ trong:32 GB<br>Dung lượng pin: 3000 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p82589"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p82589-dien-thoai-samsung-galaxy-a8-(2018).html">
                            <a href="https://www.sosanhgia.com/p82589-dien-thoai-samsung-galaxy-a8-(2018).html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/c59e46732131495d862d8397d08e8012/dien-thoai-samsung-galaxy-a8-(2018).jpeg" alt="Điện Thoại Samsung Galaxy A8 (2018)">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Điện Thoại Samsung Galaxy A8 (2018)</div>
                                    <div class="product-price"><span
                                                class="p-price-number">9.050.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Thiết kế viền cong<br>Màn hình: Super AMOLED, 5.5", FullHD+<br>Camera Trước/Sau: 16MP và 8MP/16MP<br>CPU: Exynos 7880 8 nhân 64-bit<br>Bộ Nhớ: 32GB<br>RAM: 4GB..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p60688"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p60688-sony-xperia-l1-g3312.html">
                            <a href="https://www.sosanhgia.com/p60688-sony-xperia-l1-g3312.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/8608485caedd43e6afe58aebb4ff6d0a/sony-xperia-l1-g3312.jpg" alt="Sony Xperia L1 G3312">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Sony Xperia L1 G3312</div>
                                    <div class="product-price"><span
                                                class="p-price-number">3.100.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình:IPS LCD, 5.5", HD<br>Hệ điều hành:Android 7.0<br>Camera sau:13 MP<br>Camera trước:5 MP<br>CPU:MT6737T, 4 nhân<br>RAM:2 GB<br>Bộ nhớ trong:16 GB<br>Dung lượng pin:2620 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p54068"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p54068-samsung-galaxy-j2-prime-g532.html">
                            <a href="https://www.sosanhgia.com/p54068-samsung-galaxy-j2-prime-g532.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/e35149b896cd45fcae5c352dd2b903ae/samsung-galaxy-j2-prime-g532.jpg" alt="Samsung Galaxy J2 Prime G532">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy J2 Prime G532</div>
                                    <div class="product-price"><span
                                                class="p-price-number">2.090.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn h́ình: 5". AMOLED, 540 x 960 pixels<br>CPU: MT6737 4 nhân<br>RAM/ROM: 1.5 GB/8 GB<br>Camera: 8 MP/5 MP<br>Pin: Li-Ion 2600 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p57021"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p57021-xiaomi-redmi-4a-16gb.html">
                            <a href="https://www.sosanhgia.com/p57021-xiaomi-redmi-4a-16gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/b5e4c436b0be47288f81fc5879b9350a/xiaomi-redmi-4a-16gb.jpg" alt="Xiaomi Redmi 4A 16GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Xiaomi Redmi 4A 16GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">1.858.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: IPS LCD, 5.5", HD<br>Hệ điều hành: Android 6.0 (Marshmallow)<br>Camera sau: 13 MP<br>Camera trước: 5 MP<br>RAM: 2 GB<br>Bộ nhớ trong: 16 GB<br>Dung lượng pin: 3120 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63919"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63919-sony-xperia-xa1-plus-g3416.html">
                            <a href="https://www.sosanhgia.com/p63919-sony-xperia-xa1-plus-g3416.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/b55def160b864e6a8dc37a901b22571e/sony-xa1-plus-g3416.jpg" alt="Sony XPERIA XA1 Plus G3416">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Sony XPERIA XA1 Plus G3416</div>
                                    <div class="product-price"><span
                                                class="p-price-number">5.090.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình 5.5 inch FullHD<br>Camera Trước/Sau: 8MP/23MP<br>CPU: MediaTek Helip P20<br>ROM/RAM: 32GB/4GB<br>Dung lượng Pin: 3430 mAh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p39233"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p39233-dien-thoai-philips-e181.html">
                            <a href="https://www.sosanhgia.com/p39233-dien-thoai-philips-e181.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/83d713bb5d924ae287af9a251ab7e62b/dien-thoai-philips-e181.jpg" alt="Điện thoại Philips E181">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Điện thoại Philips E181</div>
                                    <div class="product-price"><span
                                                class="p-price-number">546.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: 2.4 inches<br>2 sim 2 sóng <br>Camera: VGA<br>Pin: 3100 mAh<br>Bluetooth, FM, Ghi âm..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p63583"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p63583-iphone-x-256gb.html">
                            <a href="https://www.sosanhgia.com/p63583-iphone-x-256gb.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/311fb087680c4a3bbc27adb673d2b273/iphone-x-256gb.jpg" alt="iPhone X 256GB">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">iPhone X 256GB</div>
                                    <div class="product-price"><span
                                                class="p-price-number">26.250.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: 5.8 inch, độ phân giải 1125 x 2436 pixels tấm nền Super AMOLED<br>Hệ điều hành: IOS 11<br>Chip xử lý : Apple A11 Bionic, Hexa-core<br>RAM: 3GB<br>Bộ nhớ trong: 256 GB<br>Camera: Chính Dual 12 MP, f/1.8 &amp; f/2.4, autofocus, OIS, 2x optical zoom, quad-LED (dual tone) flash, phụ 7 MP..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p21923"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p21923-samsung-galaxy-s7-edge.html">
                            <a href="https://www.sosanhgia.com/p21923-samsung-galaxy-s7-edge.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/1091e6e0f0dc4ac99fc4f508057dc686/samsung-galaxy-s7-edge.jpeg" alt="Samsung Galaxy S7 Edge">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Samsung Galaxy S7 Edge</div>
                                    <div class="product-price"><span
                                                class="p-price-number">6.690.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: Super AMOLED, 5.5", Quad HD<br>Hệ điều hành: Android 6.0 (Marshmallow)<br>Camera sau: 12 MP - Camera trước: 5 MP<br>CPU: Exynos 8890 8 nhân 64-bit<br>RAM: 4 GB - Bộ nhớ trong: 32 GB<br>Thẻ SIM: 1 Sim, Nano SIM<br>Kết nối: WiFi, 3G, 4G LTE Cat 9<br>Dung lượng pin: 3600 mAh<br>Thiết kế: Nguyên khối<br>Chức năng đặc biệt: Mở khóa bằng vân tay, Chống nước, chống bụi,
                                        Sạc pin không dây, Sạc pin nhanh..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p58496"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p58496-dien-thoai-itel-it2180.html">
                            <a href="https://www.sosanhgia.com/p58496-dien-thoai-itel-it2180.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/75229fc7bf3a4474995ec105b93eb2f2/dien-thoai-itel-it2180.jpg" alt="Điện thoại Itel IT2180">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Điện thoại Itel IT2180</div>
                                    <div class="product-price"><span
                                                class="p-price-number">219.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Loại màn hình TFT<br>Số khe SIM 2<br>Loại sim SIM thường<br>Camera sau 1,3 (MP)<br>Kích thước màn hình 1,77 (inches)<br>Dung lượng pin 1.000 (mAh)..                </div>
                                </div>
                            </div>
                        </div>
                        <div id="p34920"
                             class="product-cell"
                             data-link="https://www.sosanhgia.com/p34920-dien-thoai-philips-e105.html">
                            <a href="https://www.sosanhgia.com/p34920-dien-thoai-philips-e105.html"
                               class="product-link" >
                                <div class="product-img">
                                    <img src="https://img.sosanhgia.com/images/200x0/30cc39847640439b94b331a05586c3f3/dien-thoai-philips-e105.jpg" alt="Điện thoại Philips E105">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="ssg-btn xs-btn link-btn-0">So sánh giá</button>
                                </div>
                                <div class="product-info">
                                    <div class="product-name">Điện thoại Philips E105</div>
                                    <div class="product-price"><span
                                                class="p-price-number">219.000</span></div>
                                </div>
                            </a>
                            <span class="product-more" onclick="showProductMore(event)"></span>
                            <div class="product-description">
                                <div class="description-inner">
                                    <div class="short-des-content">
                                        Màn hình: 1.77", TFT<br>Camera: VGA<br>2 SIM 2 sóng<br>Hỗ trợ thẻ nhớ 32 GB<br>Pin: 800 mAh..                </div>
                                </div>
                            </div>
                        </div>                            <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="ssg-number-paging">
                            <ul>

                                <li class="active">
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=1" data-page="1">1</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=2" data-page="2">2</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=3" data-page="3">3</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=4" data-page="4">4</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=5" data-page="5">5</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=6" data-page="6">6</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=7" data-page="7">7</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=8" data-page="8">8</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=9" data-page="9">9</a>
                                </li>
                                <li>
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=10" data-page="10">10</a>
                                </li>

                                <li class="pull-right">
                                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html?page=2" data-page="2"><i class="icon arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>        </div>
        </div>
    </div>
    <script>

        var page_id = "category";
        var base_url = "https://www.sosanhgia.com";
        var uri = "/t6-dien-thoai.html";
        var selectedFeatures = {};

        var params = {
            'page': 1,
            'b': '',
            'sort': 'popularity',
            't': 6,
            'f': "",
            'price': '',
            'keyword': "",
        };

        var minPrice = 105000;
        var maxPrice = 99000000;
        var __minPrice = minPrice;
        var __maxPrice = maxPrice;

        var adsHTML = "<script async src=\"\/\/pagead2.googlesyndication.com\/pagead\/js\/adsbygoogle.js\"><\/script>\n            <!-- Responsive -->\n            <ins class=\"adsbygoogle\"\n                 style=\"display:block\"\n                 data-ad-client=\"ca-pub-6971966375135285\"\n                 data-ad-slot=\"9862777397\"\n                 data-ad-format=\"auto\"><\/ins>\n            <script>\n                (adsbygoogle = window.adsbygoogle || []).push({});\n            <\/script>";

        var gridConfigs = {"display_ad_row":2,"row_item_number":4,"row_item_number_small_screen":3,"related_product_limit":8,"listing_product_limit":36,"listing_ads_view":12};

        translates = Object.assign(translates, {
            GRID_PROMO_VIEW_MORE: "Xem tất cả",
            GRID_PROMO_VIEW_LESS: "Thu gọn",
            MONTH_VALUE: " tháng %month%",
            PAGE_TEXT: "- Trang %page%",
            PAGE_TITLE: "%keyword%, Giá %time% %page%",
            PAGE_DESCRIPTION: "So sánh giá %keyword%%time% %desc% %page%",
            BRAND_NAME_AUTHOR: " tác giả ",
            FILTER_CATEGORY: "Danh mục",
            FILTER_BRAND: "Nhãn hiệu",
            FILTER_PRICE_RANGE: "Mức giá",
            FILTER_PRICE_APPLY: "Áp dụng",
            VIEW_MORE: "Xem thêm ",
            SEARCH_SUGGEST_TAG: "Xu hướng tìm kiếm",
            SELECTED_FILTER_BRAND: "Hiệu: ",
            SELECTED_FILTER_PRICE_RANGE: "Giá: %0%"
        });
    </script>
    <div class="row">
        <div class="block-container">
            <div class="category-desc">
                <div class='col-sm-12 no-padding'>
                    <div class="article-content">
                        <p><strong>Điện thoại di động</strong> ra đời đã đánh dấu một bước
                            ngoặt quan trọng trong cuộc cách mạng thông tin liên lạc, trở thành
                            một thiết bị không thể thiếu trong cuộc sống ngày nay.</p>
                        <p>Sức mạnh của những thiết bị điện tử nhỏ gọn này giúp việc chuyển
                            tải và tiếp nhận thông tin tức thời, có thể sử dụng trong không
                            gian rộng. Thiết bị hoạt động được nhờ khả năng thu phát sóng.</p>
                        <p>Không đơn giản chỉ là nghe gọi, điện thoại di động còn được tích
                            hợp thêm nhiều chức năng làm việc, giải trí cũng như chia sẻ nhờ vô
                            số tiện ích hay ứng dụng hỗ trợ; là sự kết hợp của 1 chiếc Radio, 1
                            chiếc máy phát sóng cao tần, 1 máy vi tính và 1 Camera kỹ thuật
                            số.</p>
                        <p>Hiện nay điện thoại di động chia làm 2 loại chính là:</p>
                        <ul>
                            <li><strong>Điện thoại cơ bản</strong> (feature phone)&nbsp;trang
                                bị các chức năng chính để nghe gọi, nhắn tin. Ngôn ngữ bình dân
                                thường gọi nhóm điện thoại này là "cục gạch"</li>
                            <li><strong>Điện thoại thông minh</strong> (smartphone) trang bị
                                các tính năng cao cấp thông thua 1 chiếc mấy tính thực thụ là mấy
                                như: cảm ứng, chụp ảnh quay phim ở độ nét cao, kết nối mạng với tốc
                                độ cao...&nbsp;</li>
                        </ul>
                        <p>Đã từng là một thiết bị điện tử đắt đỏ, giờ đây chúng ta có thể
                            dễ dàng sở hữu một chiếc điện thoại di động từ điện thoại phổ thông
                            hay điện thoại <strong>smartphone</strong> giá rẻ đến cao cấp của
                            nhiều thương hiệu danh tiếng: <a href=
                                                             "http://www.sosanhgia.com/t6.b47-dien-thoai-apple.html"><strong>Apple</strong></a>,
                            <a href=
                               "http://www.sosanhgia.com/t6.b3-dien-thoai-samsung.html"><strong>Samsung</strong></a>,
                            <a href=
                               "http://www.sosanhgia.com/t6.b50-dien-thoai-nokia.html"><strong>Nokia</strong></a>,
                            <a href=
                               "http://www.sosanhgia.com/t6.b7-dien-thoai-sony.html"><strong>Sony</strong></a>,
                            <a href=
                               "http://www.sosanhgia.com/t6.b48-dien-thoai-blackberry.html"><strong>
                                    BlackBerry</strong></a>, <a href=
                                                                "http://www.sosanhgia.com/t6.b5-dien-thoai-lg.html"><strong>LG</strong></a>,
                            <a href=
                               "http://www.sosanhgia.com/t6.b52-dien-thoai-asus.html"><strong>Asus</strong></a>,
                            <a href=
                               "http://www.sosanhgia.com/t6.b49-dien-thoai-htc.html"><strong>HTC</strong></a>,…</p>
                        <p><strong><em>Một số hệ điều hành thông dụng dành cho điện thoại
                                    di động:</em></strong></p>
                        <ul>
                            <li>Android</li>
                            <li>Windows phone</li>
                            <li>iOS</li>
                            <li>BlackBerry</li>
                            <li>WebOS và Palm Pre</li>
                            <li>Symbian</li>
                            <li>Samsung bada</li>
                            <li>MeeGo +Maemo +Moblin</li>
                            <li>Firefox OS</li>
                        </ul>
                        <p>Các nhà sản xuất điện thoại di động luôn không ngừng cải tiến,
                            đưa ra thị trường nhiều sản phẩm với mức giá cạnh tranh nhằm đáp
                            ứng nhiều dạng đối tượng, theo nhu cầu và khả năng của người sử
                            dụng.</p>
                        <p>Hiện nay chưa có nghiên cứu chính thức nào về ảnh hưởng của điện
                            thoại di động đến sức khoẻ con người. Tuy nhiên, điện thoại di động
                            là một nguồn sóng điện từ, vì thế nó cũng có nhiều ảnh hưởng nhất
                            định.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="related-news-container">
            <div class="block-container">

                <ul class="related-news">
                    <li class="news-item">
                        <div class="title-wrapper">
                            <a href="https://www.sosanhgia.com/tin-tuc/1017-dien-thoai-motorola-moto-c-va-moto-c-plus-gia-re-bat-ngo.html" class="title" title="Điện thoại Motorola Moto C và Moto C Plus giá rẻ bất ngờ">Điện thoại Motorola Moto C và Moto C Plus giá rẻ bất ngờ</a>
                        </div>
                        <div class="content-wrapper">
                            <div class="img-wrapper">
                                <a href="https://www.sosanhgia.com/tin-tuc/1017-dien-thoai-motorola-moto-c-va-moto-c-plus-gia-re-bat-ngo.html">
                                    <img src="https://img.sosanhgia.com/images/180x0/0c5aea34d33a4541b2c129ce0f9f2c77/dien-thoai-motorola-moto-c-va-moto-c-plus-gia-re-cho-moi-nha.jpeg" title="Điện thoại Motorola Moto C và Moto C Plus giá rẻ bất ngờ" alt="Điện thoại Motorola Moto C và Moto C Plus giá rẻ bất ngờ">
                                </a>
                            </div>
                            <div class="short-description">
                                Sau khi Motorola tung ra bộ đôi smartphone giá rẻ mới Moto C và Moto C Plus. Đánh vào thị trường phân khúc giá rẻ, Motorola đã để lại nhiều <a href="https://www.sosanhgia.com/tin-tuc/1017-dien-thoai-motorola-moto-c-va-moto-c-plus-gia-re-bat-ngo.html" class="view-more" title="Điện thoại Motorola Moto C và Moto C Plus giá rẻ bất ngờ">Xem thêm <i class="ssg-icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>                                    <li class="news-item">
                        <div class="title-wrapper">
                            <a href="https://www.sosanhgia.com/tin-tuc/1007-bphone-2-voi-cac-doi-thu-trong-phan-khuc-tu-5-den-10-trieu-dong.html" class="title" title="Bphone 2 với các đối thủ trong phân khúc từ 5 đến 10 triệu đồng">Bphone 2 với các đối thủ trong phân khúc từ 5 đến 10 triệu đồng</a>
                        </div>
                        <div class="content-wrapper">
                            <div class="img-wrapper">
                                <a href="https://www.sosanhgia.com/tin-tuc/1007-bphone-2-voi-cac-doi-thu-trong-phan-khuc-tu-5-den-10-trieu-dong.html">
                                    <img src="https://img.sosanhgia.com/images/180x0/874f217eb41747bcb9002bdc80f8fa19/bphone-2-cac-doi-thu-trong-phan-khuc-tu-5-den-10-trieu-dong.jpeg" title="Bphone 2 với các đối thủ trong phân khúc từ 5 đến 10 triệu đồng" alt="Bphone 2 với các đối thủ trong phân khúc từ 5 đến 10 triệu đồng">
                                </a>
                            </div>
                            <div class="short-description">
                                Bphone thế hệ 2 nhắm tới phân khúc cận cao cấp với giá bán gần 10 triệu đồng. Với mức giá này, Bphone 2017 sẽ phải cạnh tranh và chịu sức ép <a href="https://www.sosanhgia.com/tin-tuc/1007-bphone-2-voi-cac-doi-thu-trong-phan-khuc-tu-5-den-10-trieu-dong.html" class="view-more" title="Bphone 2 với các đối thủ trong phân khúc từ 5 đến 10 triệu đồng">Xem thêm <i class="ssg-icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>                                    <li class="news-item">
                        <div class="title-wrapper">
                            <a href="https://www.sosanhgia.com/tin-tuc/1001-top-6-do-cong-nghe-ban-tre-nao-cung-muon-so-huu-ngay.html" class="title" title="Top 6 đồ công nghệ bạn trẻ nào cũng muốn sở hữu ngay">Top 6 đồ công nghệ bạn trẻ nào cũng muốn sở hữu ngay</a>
                        </div>
                        <div class="content-wrapper">
                            <div class="img-wrapper">
                                <a href="https://www.sosanhgia.com/tin-tuc/1001-top-6-do-cong-nghe-ban-tre-nao-cung-muon-so-huu-ngay.html">
                                    <img src="https://img.sosanhgia.com/images/180x0/bbfec260468f491791d31a74f3770969/top-6-do-cong-nghe-ban-tre-nao-cung-muon-so-huu-ngay.jpeg" title="Top 6 đồ công nghệ bạn trẻ nào cũng muốn sở hữu ngay" alt="Top 6 đồ công nghệ bạn trẻ nào cũng muốn sở hữu ngay">
                                </a>
                            </div>
                            <div class="short-description">
                                Giúp bạn tạo phong cách cá tính, mang lại khả năng giải trí cao. Cùng xem và trải nghiệm chúng là những đồ vật như thế nào? Đừng bỏ lỡ những <a href="https://www.sosanhgia.com/tin-tuc/1001-top-6-do-cong-nghe-ban-tre-nao-cung-muon-so-huu-ngay.html" class="view-more" title="Top 6 đồ công nghệ bạn trẻ nào cũng muốn sở hữu ngay">Xem thêm <i class="ssg-icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>                                    <li class="news-item">
                        <div class="title-wrapper">
                            <a href="https://www.sosanhgia.com/tin-tuc/997-so-sanh-nhanh-zenfone-4-max-pro-doi-voi-cac-doi-thu-cung-phan-khuc.html" class="title" title="So sánh nhanh Zenfone 4 Max Pro đối với các đối thủ cùng phân khúc">So sánh nhanh Zenfone 4 Max Pro đối với các đối thủ cùng phân khúc</a>
                        </div>
                        <div class="content-wrapper">
                            <div class="img-wrapper">
                                <a href="https://www.sosanhgia.com/tin-tuc/997-so-sanh-nhanh-zenfone-4-max-pro-doi-voi-cac-doi-thu-cung-phan-khuc.html">
                                    <img src="https://img.sosanhgia.com/images/180x0/61d5a1ba54f74e039e45a060c38c218e/so-sanh-nhanh-zenfone-4-max-pro-doi-voi-cac-doi-thu-cung-phan-khuc.jpeg" title="So sánh nhanh Zenfone 4 Max Pro đối với các đối thủ cùng phân khúc" alt="So sánh nhanh Zenfone 4 Max Pro đối với các đối thủ cùng phân khúc">
                                </a>
                            </div>
                            <div class="short-description">
                                Zenfone 4 Max Pro là “chiến binh” đầu tiên của dòng Asus Zenfone thế hệ 4. Zenfone 4 Max được hoàn thiện tốt, kiểu dáng bo tròn cho cảm giác <a href="https://www.sosanhgia.com/tin-tuc/997-so-sanh-nhanh-zenfone-4-max-pro-doi-voi-cac-doi-thu-cung-phan-khuc.html" class="view-more" title="So sánh nhanh Zenfone 4 Max Pro đối với các đối thủ cùng phân khúc">Xem thêm <i class="ssg-icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>                            </ul>
            </div>
        </div>
    </div>

    <script>
        var categoryParentId = 1002;
        var categoryId = 6;
    </script>


    <div class="row">
        <div class="block-container">
            <div class="trend-keywords">
                <div class="label">Xu hướng tìm kiếm</div>

                <ul class="tags-group">
                    <li>
                        <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html" title="Điện thoại">Điện thoại</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/t6.b84-dien-thoai-di-dong-oppo.html" title="Điện thoại Oppo">Điện thoại Oppo</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/s-zenphone" title="Zenphone">Zenphone</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/t6.b7-dien-thoai-di-dong-sony.html" title="Điện thoại Sony">Điện thoại Sony</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/t6.b42-dien-thoai-di-dong-philips.html" title="Điện thoại Philips">Điện thoại Philips</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/t6.b42-dien-thoai-di-dong-philips.html" title="Điện thoại Philip">Điện thoại Philip</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/s-iphone-7" title="iPhone 7">iPhone 7</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p57628-samsung-galaxy-s8-plus.html" title="Galaxy S8 Plus">Galaxy S8 Plus</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/s-samsung-galaxy-s7" title="Samsung Galaxy S7">Samsung Galaxy S7</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/s-samsung-galaxy-s7" title="Galaxy S7">Galaxy S7</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p21923-samsung-galaxy-s7-edge.html" title="Galaxy S7 Edge">Galaxy S7 Edge</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p72829-samsung-galaxy-note-fan-edition.html" title="Samsung Galaxy Note FE">Samsung Galaxy Note FE</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/s-iphone-x" title="iPhone X">iPhone X</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/s-iphone-6" title="iPhone 6">iPhone 6</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p63574-samsung-galaxy-note-8-64gb-6gb.html" title="Note 8">Note 8</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p60310-samsung-galaxy-j7-pro.html" title="J7 pro">J7 pro</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p72829-samsung-galaxy-note-fan-edition.html" title="Note FE">Note FE</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p64913-huawei-nova-2i.html" title="Huawei Nova 2i">Huawei Nova 2i</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p63904-nokia-8.html" title="Nokia 8">Nokia 8</a>
                    </li>
                    <li>
                        <a href="https://www.sosanhgia.com/p46939-samsung-galaxy-j7-prime.html" title="J7 Prime">J7 Prime</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="block-container">
            <div class="footer-ads section-title">
                <div class="title">Có thể bạn quan tâm</div>
                <div class="col-sm-12 bottom-ads">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6971966375135285"
                         data-ad-slot="6979340598"
                         data-ad-format="autorelaxed"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>                            </div>
            </div>
        </div>
    </div>
    <img src="https://www.sosanhgia.com/tracking/category?id=6" class="__tracking__">
</div>

<div class="container-fluid" id="menu-bottom">

    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="block-container">
                <div class="footer-short-description">
                    <div class="short-content">
                        <sup>††</sup>SoSanhGia.com là một công cụ so sánh giá online, không bán hàng. Vui lòng liên hệ nơi bán để tìm hiểu thông tin tình trạng hàng hóa, thanh toán và chính sách vận chuyển.                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="block-container">
            <div class="footer-corp">
                <div class="corp">
                    <div>CÔNG TY CỔ PHẦN <span>KEYCAP</span></div>
                    <div>Tầng 5, Tòa nhà Songdo, 62A Phạm Ngọc Thạch, P6, Q3, HCM</div>
                    <div class="registered"><a href="http://www.online.gov.vn/WebsiteDisplay.aspx?DocId=25830" rel="nofollow" target="_blank"><img src="/css/images/registered.png"></a></div>                </div>
                <div class="terms clearfix">
                    <div><a href="/">So sánh giá</a></div>
                    <div> Copyright © 2018 KEYCAP Jsc </div>
                    <div> Email: <a href="mailto:info@sosanhgia.com"
                                    rel="nofollow">info@sosanhgia.com</a></div>
                    <div><a href="javascript:contact(); void(0);" rel="nofollow">Đối tác liên hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="go-top" title="Lên đầu trang">
    <i class="ssg-icon icon-arrow-right"></i>
</div>
<!-- Promotion POPUP -->
<script type="text/javascript" src="category.min.js"></script>
<!-- Tracking code -->
</body>
</html>