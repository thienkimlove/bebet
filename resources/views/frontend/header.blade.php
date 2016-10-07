<div class="hotLine sp">
    <img src="{{url('frontend/images/hot.png')}}" alt="">
  </div><header class="header">
    <div class="header-mid">
        <div class="fix">
            <h1>
                <a href="" title="" class="banner">
                    <img src="{{url('frontend/images/banner.png')}}" alt="">
                </a>
            </h1>
            <div class="box-find" id="box-find">
                {!! Form::open(array('url' => 'search', 'method' => 'get')) !!}
                    <input type="text" placeholder="Từ khóa tìm kiếm" name="q" class="txt"/>
                    <input type="submit" value="" name="submit" class="btn-find"/>
                {!! Form::close() !!}
            </div>
            <ul class="nav-social">
                <li><a href=""><img src="{{url('frontend/images/i_fb.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{url('frontend/images/i_ytube.png')}}" alt=""></a></li>
            </ul>
        </div>
    </div>
    <nav class="bg-nav">
        <div class="fix">
            <ul class="nav-main">
                <li>
                    <a class="{{(isset($page) && $page == 'index') ? 'active' : ''}}" href="{{url('/')}}" title="">TRANG CHỦ</a>
                </li>

                   @if ($headerCategories->count() > 0)
                    @foreach ($headerCategories as $headerCategory)
                        <li>
                            <a class="{{(isset($page) && ($page == $headerCategory->slug || in_array($page, $headerCategory->subCategories->lists('slug')->all()))) ? 'active' : ''}}" href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                            @if ($headerCategory->subCategories->count() > 0)
                                <ul>
                                    @foreach ($headerCategory->subCategories as $childCategory)
                                        <li><a class="{{(isset($page) && $page == $childCategory->slug) ? 'active' : ''}}" href="{{url($childCategory->slug)}}">{{$childCategory->name}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif


         <li>
                    <a class="{{(isset($page) && $page == 'product') ? 'active' : ''}}" href="{{url('product')}}" title="">Sản phẩm</a>
                </li>       <li>
                    <a class="{{(isset($page) && $page == 'cau-hoi-thuong-gap') ? 'active' : ''}}" href="{{url('cau-hoi-thuong-gap')}}" title="">Hỏi đáp</a>
                </li>
                <li>
                    <a class="{{(isset($page) && $page == 'video') ? 'active' : ''}}" href="{{url('video')}}" title="">Video</a>
                </li>
                <li>
                    <a class="{{(isset($page) && $page == 'lien-he') ? 'active' : ''}}" href="{{url('lien-he')}}" title="">Liên hệ</a>
                </li>
                <li>
                    <a class="{{(isset($page) && $page == 'phan-phoi') ? 'active' : ''}}" href="{{url('phan-phoi')}}" title="">Phân phối</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
@if (isset($page) && $page == 'index')
<div class="box-slider">
    <div class="owl-carousel" id="slide-homepage">
        @foreach ($headerIndexBanners as $banner)
            <div class="item">
                <a class="thumb" href="{{$banner->url}}" title="">
                    <img src="{{url('files/'.$banner->image)}}"/>
                </a>
            </div>
        @endforeach
    </div>
</div><!--//box-slider-->
@endif