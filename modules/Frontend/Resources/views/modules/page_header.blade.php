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
                        </div>
                        <div class="nav-label">Tất cả<br/>danh mục</div>
                    </div>
                </div>
                <div class="search-wrapper">
                    <form action="/s" id="header-search-form">
                        <div class="search-control">
                            <input type="search" id="search-input" value="" placeholder="Tìm kiếm sản phẩm"
                                   v-on:keyup="getSearchInput"
                                   v-model="keySearch"
                                   v-on:click="clickedSearhInput"
                            >
                            <button type="submit" title="Tìm kiếm">
                                <i class="ssg-icon icon-search"></i>
                            </button>
                        </div>
                        <div class="header-search-result" id="search-result" v-bind:style="styleObj">
                            <div class="result-inner">
                                <div id="search-suggestion">
                                    <div id="suggestion-container">
                                        <div class="label"><span class="text-label">Gợi ý tìm kiếm</span></div>
                                        <ul class="header-label">
                                            <li class="suggest-item" v-for="item in listProduct">
                                                <a v-bind:href="'dien-thoai/'+ item.slug">@{{item.name}}</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div id="search-history"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="user-wrapper"></div>
            </div>
            <div class="header-menu">
                <div class="container header-share-nav" id="header-menu">
                    <div class="row block-container">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">

                                    <ul class="nav-wrapper nav-child active" data-target="c1">
                                        <li class="nav-item sticky"><a href="/dien-thoai/">So Sánh Gía</a></li>
                                    </ul>

                                    <ul class="nav-wrapper nav-child active" data-target="c1">
                                        <li class="nav-item sticky"><a href="/ma-giam-gia/">Mã Giảm Giá</a></li>
                                    </ul>

                                    <ul class="nav-wrapper nav-child active" data-target="c1">
                                        <li class="nav-item sticky"><a href="/tin-tuc/">Tin Tức</a></li>
                                        <li class="nav-item sticky"><a href="/tin-tuc/27-dien-thoai-di-dong">Điện Thoại Di Động</a></li>
                                        <li class="nav-item sticky"><a href="/tin-tuc/28-dien-thoai-samsung">Điện Thoại SamSung</a></li>
                                        <li class="nav-item sticky"><a href="/tin-tuc/29-dien-thoai-iphone">Điện Thoại Iphone</a></li>
                                        <li class="nav-item sticky"><a href="/tin-tuc/30-cuoc-song">Cuộc Sống</a></li>
                                    </ul>

                        </div>

                    </div>
                    <div class="block-container">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>