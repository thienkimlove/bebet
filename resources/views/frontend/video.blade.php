@extends('frontend')

@section('content')

    <section class="section vis">
        <div class="container">
            <ul class="breadCrumb clearFix">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li class="active">Video</li>
            </ul>
            <div class="contentLeft">
                <div class="boxMedia">
                    <h3 class="globalTitle">
                        <a href="{{url('video')}}">Video</a>
                    </h3>
                    @if ($mainVideo)
                    <div class="hotVideo clearFix">
                        <div class="thumbVideo">
                            <iframe width="100%" height="315" src="{{$mainVideo->url}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    @endif
                    <h3>
                        Video nổi bật
                    </h3>

                    @foreach ($videos as $video)
                        <article class="item">
                            <a class='youtube thumb' href="{{(strpos($video->url, 'mode=transparent') === false) ? $video->url.'?rel=0&amp;wmode=transparent' : $video->url}}">
                                <img src="{{url('img/cache/216x142/'.$video->image)}}" width="303" height="130" alt=""/>
                            </a>
                            <h3>
                                <a href="{{url('video/'.$video->slug)}}" title="">{{$video->title}}</a>
                            </h3>
                            <span class="view">{{$video->views}} lượt xem</span>
                        </article>
                    @endforeach
                    <!-- /paging -->
                    <div class="boxPaging">
                        @include('pagination.default', ['paginate' => $videos])
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div><!--//box-media-->
                <!-- /endboxNews -->
            </div>
           @include('frontend.right')
        </div>
    </section>
@endsection