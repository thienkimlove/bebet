<div class="contentRight">
    <div class="boxProducts">
        <h3 class="globalTitle">
            <a href="{{url('san-pham')}}">Sản phẩm</a>
        </h3>
        <div class="listProducts">
            @foreach ($rightProducts as $product)
            <li>
                <a href="{{url('san-pham', $product->slug)}}">
                    <img src="{{url('img/cache/300x72', $product->image)}}" alt="{{$product->title}}">
                </a>
            </li>
            @endforeach
        </div>
    </div>
    @foreach ($rightNormalBanners as $banner)
        <div class="boxAdv">
            <img src="{{url('files', $banner->image)}}" alt="">
        </div>
    @endforeach
    <div class="boxSale">
        <h3 class="globalTitle">
            <a href="{{env('FB_LINK')}}">Cộng đồng mẹ thông thái</a>
        </h3>
        <div class="Social">
            <div class="fb-page"
                 data-href="{{env('FB_LINK')}}"
                 data-small-header="false"
                 data-adapt-container-width="true"
                 data-hide-cover="false"
                 data-show-facepile="true">
                <blockquote cite="{{env('FB_LINK')}}"
                            class="fb-xfbml-parse-ignore">
                    <a href="{{env('FB_LINK')}}">Be Birth</a>
                </blockquote>
            </div>
        </div>
    </div>
    <!-- /endSale -->
    <div class="boxHot clearFix sideBar">
        <h3 class="globalTitle"><a href="{{url('tin-tuc')}}">Tin nổi bật</a></h3>
        @foreach ($rightNews as $rightNew)
        <div class="item clearFix">
            <a href="{{url($rightNew->slug.'.html')}}" class="thumb">
                <img src="{{url('img/cache/100x80', $rightNew->image)}}" alt="hot" width="100" height="80">
            </a>
            <h4>
                <a href="{{url($rightNew->slug.'.html')}}">{{$rightNew->title}}</a>
            </h4>
        </div>
         @endforeach
    </div>
    <!-- /endHot -->
</div>