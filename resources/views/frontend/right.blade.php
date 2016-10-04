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
                 data-width="100%"
                 data-small-header="false"
                 data-adapt-container-width="true"
                 data-hide-cover="false"
                 data-show-facepile="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="{{env('FB_LINK')}}">
                        <a href="https://www.facebook.com/Be-Birth-331454547206717/">{{env('SITE_NAME')}}</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- /endSale -->
    <!-- /endHot -->
</div>