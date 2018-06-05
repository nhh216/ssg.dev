
    <aside class="sidebar">
        <div class="sidebar-inner">
            <div class="widget-block"> <!-- Widget block -->
                <div class="title">Chuyên mục</div>
                <div class="content">
                    <ul class="related-categories">
                        @if(isset($categories))
                        @foreach($categories as $item)
                            @if($item->parent_id == 1)
                            <li>
                                <a href="{{asset('danh-sach-tin-tuc/') .'/'.$item->slug}}">{{$item->title}}
                                    <span style="margin-left: 5px;">({{$item->coupons->count()}})</span></a>
                            </li>
                            @endif
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div><!-- /Widget block -->

            <div class="widget-block"> <!-- Widget block -->
                <div class="title">Bài viết mới</div>
                <div class="content">
                    <ul class="aside-related-news">
                        @foreach($list_new as $new)
                        <li>
                            <div class="img-wrapper">
                                <a href="{{asset('/tin-tuc/').'/'.$new->slug}}">
                                    <img src="{{$new->thumb}}"
                                         alt="{{$new->title}}"
                                         title="{{$new->title}}">
                                </a>
                            </div>
                            <div class="title-wrapper">
                                <a href="{{asset('/tin-tuc/').'/'.$new->slug}}"
                                   title="{{$new->title}}">{{$new->title}}<span class="title-date">22/05/2018</span></a>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div><!-- /Widget block -->
        </div>
    </aside>

