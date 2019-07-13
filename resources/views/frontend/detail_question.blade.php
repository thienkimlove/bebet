@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <div class="contentLeft">
                <ul class="breadCrumb clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    <li class="active">Hỏi đáp</li>
                </ul>
                <div class="boxQuestion">
                    @if ($headQuestion)
                        <div class="headQuestion clearFix">
                            <a href="{{url('hoi-dap', $headQuestion->slug)}}" class="thumb">
                                <img src="{{url('frontend/imgs/bg/avatar.png')}}" alt="">
                            </a>
                            <h3>
                                {{$headQuestion->title}}
                            </h3>
                            <h4>
                                Độc giả có thể gửi câu hỏi trực tiếp vào bảng đặt câu hỏi dưới đây, hoặc gửi trực tiếp vào Email:
                                <a href="mailto:contact@tuelinh.com">contact@tuelinh.com</a>
                            </h4>

                        </div>
                    @endif
                    <!-- //listQuestion -->
                    <article class="item">
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>
                                  {{$mainQuestion->question}}
                                </span>
                            </p>
                            <div class="viewDetail clearFix">
                                <div class="date">
                                  <span class="datePost">
                                    {{$mainQuestion->updated_at->format('d/m/Y')}}
                                  </span>
                                    <span>
                                     {{$mainQuestion->updated_at->format('H:m:s')}}
                                  </span>
                                </div>
                            </div>
                            <p>
                            </p><h3 class="title-faq">Trả lời</h3>
                            <span>{{$mainQuestion->answer}}</span>
                            <p></p>
                        </div>
                    </article>
                </div>
                <!-- //listButton -->
                <ul class="listButton clearFix">
                    <li class="ilocal"><a href="{{url('phan-phoi')}}">Xem điểm bán</a></li>
                    <li class="icall"><a href="{{url('lien-he')}}">1900 6482 - 0912 571 190</a></li>
                </ul>
                <div class="boxOrther">
                    <h3 class="globalTitle">
                        <a href="#">Hỏi đáp liên quan</a>
                    </h3>
                    <ul class="listQuestion" id="listQuestion">
                        @foreach ($relatedQuestions as $question)
                        <li><a href="{{url('hoi-dap', $question->slug)}}">{{$question->title}}</a></li>
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