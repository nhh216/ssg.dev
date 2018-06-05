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
                            thường gọi nhóm điện thoại này là "cục gạch"
                        </li>
                        <li><strong>Điện thoại thông minh</strong> (smartphone) trang bị
                            các tính năng cao cấp thông thua 1 chiếc mấy tính thực thụ là mấy
                            như: cảm ứng, chụp ảnh quay phim ở độ nét cao, kết nối mạng với tốc
                            độ cao...&nbsp;
                        </li>
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
                @foreach($posts as $post)
                    <li class="news-item">
                        <div class="title-wrapper">
                            <a href="{{asset('tin-tuc/').'/'.$post->slug}}"
                               class="title" title="{{$post->title}}">{{$post->title}}</a>
                        </div>
                        <div class="content-wrapper">
                            <div class="img-wrapper">
                                <a href="{{asset('tin-tuc/').'/'.$post->slug}}">
                                    <img src="{{$post->thumb}}"
                                         title="3 loại mặc nạ trị thâm rẻ tiền, an toàn, hiệu quả"
                                         alt="3 loại mặc nạ trị thâm rẻ tiền, an toàn, hiệu quả">
                                </a>
                            </div>
                            <div class="short-description">
                                {{$post->short_des}}
                                <a
                                        href="{{asset('tin-tuc/').'/'.$post->slug}}"
                                        class="view-more" title="{{$post->title}}">Xem thêm
                                    <i class="ssg-icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="block-container">
        <div class="trend-keywords">
            <div class="label">Xu hướng tìm kiếm</div>

            <ul class="tags-group">
                <li>
                    <a href="https://www.sosanhgia.com/t6-dien-thoai-di-dong.html" title="Điện thoại">Điện thoại</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/t6.b84-dien-thoai-di-dong-oppo.html" title="Điện thoại Oppo">Điện
                        thoại Oppo</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/s-zenphone" title="Zenphone">Zenphone</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/t6.b7-dien-thoai-di-dong-sony.html" title="Điện thoại Sony">Điện
                        thoại Sony</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/t6.b42-dien-thoai-di-dong-philips.html"
                       title="Điện thoại Philips">Điện thoại Philips</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/t6.b42-dien-thoai-di-dong-philips.html"
                       title="Điện thoại Philip">Điện thoại Philip</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/s-iphone-7" title="iPhone 7">iPhone 7</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p57628-samsung-galaxy-s8-plus.html" title="Galaxy S8 Plus">Galaxy
                        S8 Plus</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/s-samsung-galaxy-s7" title="Samsung Galaxy S7">Samsung Galaxy
                        S7</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/s-samsung-galaxy-s7" title="Galaxy S7">Galaxy S7</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p21923-samsung-galaxy-s7-edge.html" title="Galaxy S7 Edge">Galaxy
                        S7 Edge</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p72829-samsung-galaxy-note-fan-edition.html"
                       title="Samsung Galaxy Note FE">Samsung Galaxy Note FE</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/s-iphone-x" title="iPhone X">iPhone X</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/s-iphone-6" title="iPhone 6">iPhone 6</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p63574-samsung-galaxy-note-8-64gb-6gb.html" title="Note 8">Note
                        8</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p60310-samsung-galaxy-j7-pro.html" title="J7 pro">J7 pro</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p72829-samsung-galaxy-note-fan-edition.html" title="Note FE">Note
                        FE</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p64913-huawei-nova-2i.html" title="Huawei Nova 2i">Huawei
                        Nova 2i</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p63904-nokia-8.html" title="Nokia 8">Nokia 8</a>
                </li>
                <li>
                    <a href="https://www.sosanhgia.com/p46939-samsung-galaxy-j7-prime.html" title="J7 Prime">J7
                        Prime</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="container" id="menu-bottom">

    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="block-container">
                <div class="footer-short-description">
                    <div class="short-content">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="block-container">
            <div class="footer-corp">
                <div class="corp">

                </div>
                <div class="terms clearfix">

                </div>
            </div>
        </div>
    </div>
