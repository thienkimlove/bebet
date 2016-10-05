<header class="header">
    <div class="container">
        <h1 class="clearFix">
            <a href="{{url('/')}}" class="logo" title="Logo">
                <img src="{{url('frontend/imgs/logo.png')}}" alt="Bebirth" width="157" height="80" class="pc">
                <img src="{{url('frontend/imgs/logosp.png')}}" alt="Bebirth" width="295" height="100" class="sp">
            </a>
        </h1>
        <ul id="globalNav" class="pc">
            <li><a href="{{url('/')}}" class="active">Trang chủ</a></li>
            <li><a href="{{url('cam-nang-me-va-be')}}">Cẩm nang<br>mẹ và bé</a></li>
            <li>
                <a href="{{url('san-pham')}}">Be Birth</a>
                <ul class="hasSub">
                    @foreach ($headerProducts as $k => $product)
                      <li class="color0{{$k+1}}"><a href="{{url('san-pham', $product->slug)}}">{{$product->title}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
            <li>
                <a href="{{url('video')}}">Video</a>
            </li>
            <li><a href="{{url('hoi-dap')}}">Hỏi đáp</a></li>
            <li><a href="{{url('phan-phoi')}}">Phân phối</a></li>
            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
        </ul>
        <a href="#" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
</header>
@if ($page == 'index')
@if ($topBanners->count() > 0)
    <section class="boxBanner mb0 index">
        <div class="boxSlider">
            <div class="owl-carousel" id="slideIndex">
                @foreach ($topBanners as $banner)
                    <div class="item">
                        <a class="thumb" href="{{$banner->url}}" title="">
                            <img src="{{url('files', $banner->image)}}"/>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!--//box-Banner-->
    </section>
@endif
@else
    @if ($topNormalBanners->count() > 0)
        <section class="boxBanner mb0 index">
            <div class="boxSlider">
                <div class="owl-carousel" id="slideIndex">
                    @foreach ($topNormalBanners as $banner)
                        <div class="item">
                            <a class="thumb" href="{{$banner->url}}" title="">
                                <img src="{{url('files', $banner->image)}}"/>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--//box-Banner-->
        </section>
    @endif
@endif