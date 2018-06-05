<div class="col-md-8">
    <ul class="posts clearfix">
        @foreach($new as $item)
            <div class="row" style="margin-bottom: 10px;">
                <li class="news-item" >
                    <div class="col-md-4">
                        <div class="img-wrapper">
                            <a href="{{asset('tin-tuc/').'/'.$item->slug}}">
                                <img style="width: 100%; height: 100%;"
                                     src="{{$item->thumb}}"
                                     title="{{$item->title}}"
                                     alt="{{$item->title}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-wrapper">
                            <div class="title-wrapper">
                                <a href="{{asset('tin-tuc/').'/'.$item->slug}}"
                                   class="title"
                                   title="{{$item->title}}">{{$item->title}}</a>
                            </div>
                            <div class="short-description">
                                {{$item->short_des}}. <a
                                        href="{{asset('tin-tuc/').'/'.$item->slug}}"
                                        class="view-more"
                                        title="{{$item->title}}">Xem
                                    thêm</a>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        @endforeach
    </ul>
    <div class="row">
        <div class="ssg-number-paging">
            {{--{{$list_new->render()}}--}}
        </div>

    </div>
</div>


