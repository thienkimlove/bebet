@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <div class="contentLeft">
                <ul class="breadCrumb clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    <li class="active">{{$post->category->name}}</li>
                </ul>
                <div class="boxDetails">
                    <div class="headBox">
                        <h3 class="titleBox">{{$post->title}}</h3>
                        <span class="datePost">
                Ngày đăng: {{$post->updated_at->format('d/m/Y')}}
              </span>
                        <span class="view">
                Lượt xem: {{$post->views}}
              </span>
                    </div>
                    {!! $post->content !!}
                    <!-- /endTab03 -->
                </div>
                <!-- //listButton -->
                <ul class="listButton clearFix">
                    <li class="ilocal"><a href="{{url('phan-phoi')}}">Xem điểm bán</a></li>
                    <li class="icall"><a href="{{url('lien-he')}}">1900 6482 - 0912 571 190</a></li>
                </ul>
                <div class="boxOrther">
                    <h3 class="globalTitle">
                        <a href="#">Tin liên quan</a>
                    </h3>
                    <ul class="listQuestion" id="listQuestion">
                        @foreach ($post->related_posts as $rPost)
                            <li><a href="{{url($rPost->slug.'.html')}}">{{$rPost->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
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
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection