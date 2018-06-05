
    <div class="block-container">
        <div class="post-container">
            <div class="col-md-8">
            <div class="row">
                @foreach($new as $item)
                <article itemscope="" itemtype="http://schema.org/NewsArticle">
                    <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage"
                          itemid="https://google.com/article">
                    <header>
                        <h1 itemprop="headline" class="post-title">{{$item->title}}</h1>
                    </header>
                    <div class="post-date title-date"
                         style="text-align: right;font-size: 14px;font-style: italic; color: #666; padding-bottom: 5px">
                        22/05/2018
                    </div>
                    <section class="summary">
                        <h2 itemprop="description"
                            style="    margin: 0;font-size: 18px; font-weight: 600; font-style: italic;">
                            {{$item->short_des}}
                        </h2>

                    </section>
                    <div class="section">
                        <ul class="related-posts">
                            <li>
                                <a href="https://www.sosanhgia.com/tin-tuc/8989-samsung-tro-thanh-“trum-thong-tri”-thi-truong-smartphone-tai-an-do.html"
                                   title="Samsung trở thành “trùm thống trị” thị trường smartphone tại Ấn Độ"><i
                                            class="ssg-icon icon-external-link"></i> Samsung trở thành “trùm thống trị”
                                    thị trường smartphone tại Ấn Độ <span class="title-date">23/05/2018</span></a>
                            </li>
                            <li>
                                <a href="https://www.sosanhgia.com/tin-tuc/8987-smartphone-duoc-nguoi-dung-ua-chuong-nhat-hien-nay.html"
                                   title="Smartphone được người dùng ưa chuộng nhất hiện nay"><i
                                            class="ssg-icon icon-external-link"></i> Smartphone được người dùng ưa
                                    chuộng nhất hiện nay <span class="title-date">23/05/2018</span></a>
                            </li>
                            <li>
                                <a href="https://www.sosanhgia.com/tin-tuc/8981-danh-sach-5-muc-phai-chuan-bi-cho-chuyen-du-lich-tuyet-voi.html"
                                   title="Danh sách 5 mục phải chuẩn bị cho chuyến du lịch tuyệt vời"><i
                                            class="ssg-icon icon-external-link"></i> Danh sách 5 mục phải chuẩn bị cho
                                    chuyến du lịch tuyệt vời <span class="title-date">22/05/2018</span></a>
                            </li>
                        </ul>
                    </div>

                    <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization"
                         class="display-none">
                        <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                            <img src="https://www.sosanhgia.com/css/images/logo.png" alt="sosanhgia.com">
                            <meta itemprop="url" content="https://www.sosanhgia.com/css/images/logo.png">
                            <meta itemprop="width" content="200">
                            <meta itemprop="height" content="60">
                        </div>
                        <meta itemprop="name" content="SoSanhGia">
                    </div>
                    <div itemscope="" itemprop="author" itemtype="http://schema.org/Person" class="display-none">
                        <span itemprop="name">yen</span>
                    </div>
                    <div itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject" class="display-none">
                        <meta itemprop="url"
                              content="https://img.sosanhgia.com/images/43cb2086dad647d3b7ef04d352462713/khong-phai-hang-dien-thoai-nao-cung-dua-nhau-theo-trao-luu-smartphone-tai-tho-cua-apple.jpeg">
                        <meta itemprop="width" content="180">
                        <meta itemprop="height" content="120">
                    </div>
                    <meta itemprop="datePublished" content="22/05/2018 16:47:25">
                    <meta itemprop="dateModified" content="22/05/2018 16:47:25">
                    <div class="clearfix"></div>
                    <section itemprop="articlebody" class="article-content">

                        {!! $item->content !!}

                    </section>
                    <section class="tags">
                        <span>Tags:</span>
                        @if(isset($tag))
                            @foreach($tag as $item)
                                <a href="/tin-tuc/{{$item->tag->slug}}">{{$item->tag->value}}</a>
                                <span> , </span>
                            @endforeach
                         @endif
                    </section>
                </article>
                    @endforeach
            </div>
            </div>
