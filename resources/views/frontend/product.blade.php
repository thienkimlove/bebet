@extends('frontend')

@section('content')

    <section class="section vis">
        <div class="container">
            <ul class="breadCrumb clearFix">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li class="active">{{$product->title}}</li>
            </ul>
            <div class="contentLeft">
                <div class="boxProducts">
                    <ul class="proTabs clearFix">
                        <li class="tabLink active" data-tab="tabInfo">Thành phần</li>
                        <li class="tabLink" data-tab="tabChoose">Vì sao nên chọn Be birth</li>
                        <li class="tabLink" data-tab="tabRate">Câu hỏi thường gặp</li>
                    </ul>
                    <div id="tabInfo" class="tabProduct active">
                        <div class="item clearFix">
                          {!! $product->content_tab1 !!}
                        </div>
                        <div class="boxLike">
                            <div class="fb-like"></div>
                        </div>
                        <div class="boxTags">
                            <span>Từ khóa</span>
                            <a href="" title="">Thuốc diệt chuột</a>
                            <a href="" title="">Thuốc tốt</a>
                            <a href="" title="">Thuốc hay</a>
                        </div>
                        <div class="boxComment">
                            <div class="fb-comments" data-href="{{url('san-pham', $product->slug)}}" data-numposts="5"></div>
                        </div>
                    </div>
                    <!-- endTab01 -->
                    <div id="tabChoose" class="tabProduct">
                        <div class="item clearFix">
                            {!! $product->content_tab2 !!}
                        </div>
                    </div>
                    <!-- /endTab02 -->
                    <div id="tabRate" class="tabProduct">
                        <div class="item clearFix">
                            {!! $product->content_tab3 !!}
                        </div>
                    </div>
                    <!-- /endTab03 -->
                </div>
                @if ($product->related_post)
                <div class="boxOrther">
                    <h3 class="globalTitle">
                        <a href="#">Tin liên quan</a>
                    </h3>
                    <ul class="listQuestion" id="listQuestion">
                        @foreach ($product->related_post as $rPost)
                        <li><a href="{{url($rPost->slug.'.html')}}">{{$rPost->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @foreach ($middleIndexBanner as $banner)
                    <div class="boxAdv">
                        <a href="{{$banner->url}}"><img src="{{url('files/'.$banner->image)}}" alt=""></a>
                    </div><!--//box-adv-center-->
                @endforeach

                <div class="boxNews">
                    <h3 class="globalTitle"><a href="#">Tin mới nhất</a></h3>
                    <div class="listNews clearFix">
                        @foreach ($latestNews as $post)
                            <div class="item">
                                <a href="#" class="thumb">
                                    <img src="{{url('img/cache/130x80', $post->image)}}" alt="List news">
                                </a>
                                <p>
                                    {{$post->title}}
                                </p>
                                <span class="datePost">{{$post->updated_at->format('d/m/Y')}}</span>
                                <span class="countView">{{$post->views}} lượt xem</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- //listButton -->
                <ul class="listButton clearFix">
                    <li class="ilocal"><a href="{{url('phan-phoi')}}">Xem điểm bán C Nattu</a></li>
                    <li class="icall"><a href="{{url('lien-he')}}">1900 6482 - 0912 571 190</a></li>
                </ul>
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection