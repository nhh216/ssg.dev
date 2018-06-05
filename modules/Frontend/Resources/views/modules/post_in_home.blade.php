<div class="row">
    <div class="block-container">
        <div class="section-title">
            <h4 class="center"> Thông tin mua sắm hữu ích </h4>
        </div>
    </div>
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