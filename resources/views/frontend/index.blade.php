@extends('frontend')

@section('content')

    @if ($topIndexCategory)
    <section class="section bg">
        <div class="fix">
            <div class="layout-home">
                <div class="box-uses cf">
                    <div class="title-panel cf">
                        <div class="title">
                            <h3 class="global-title">
                                <a href="{{url($topIndexCategory->slug)}}">{{$topIndexCategory->name}}</a>
                            </h3>
                        </div>
                        <div class="menu-tabs">
                            <ul class="news-type">
                                @foreach ($topIndexCategory->subCategories as $k=>$sub)
                                <li>
                                    <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-{{$k}}" data-parent="news-type" data-reset="news-home" title="{{$sub->name}}">
                                        {{$sub->name}}
                                    </a>
                                </li>
                                @if ($k < ($topIndexCategory->subCategories->count() - 1))
                                <li class="line">|</li>
                                @endif
                               @endforeach
                            </ul><!--//news-type-->
                        </div>
                    </div>

                    <div class="news-home cf" id="tab-index" style="display:block;">
                        @foreach ($topIndexCategory->list_posts->splice(0, 3) as $post)
                        <article class="item">
                            <a href="" title="" class="thumbs">
                                <img src="{{url('img/cache/310x230/'.$post->image)}}" width="310" height="230" alt=""/>
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}" title="">{{$post->title}}</a>
                            </h3>
                            <p>
                               {{$post->desc}}
                            </p>
                            @if ($post->related_posts->count() > 0)
                            <div class="related-post">
                                <ul>
                                    @foreach ($post->related_posts->splice(0, 2) as $rPost)
                                    <li><a href="{{url($rPost->slug.'.html')}}">{{$rPost->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </article>
                        @endforeach
                    </div><!--//news-list-->

                    @foreach ($topIndexCategory->subCategories as $k=>$sub)
                    <div class="news-home cf" id="tab-{{$k}}">
                        @foreach ($sub->list_posts->splice(0, 3) as $post)
                            <article class="item">
                                <a href="" title="" class="thumbs">
                                    <img src="{{url('img/cache/310x230/'.$post->image)}}" width="310" height="230" alt=""/>
                                </a>
                                <h3>
                                    <a href="{{url($post->slug.'.html')}}" title="">{{$post->title}}</a>
                                </h3>
                                <p>
                                    {{$post->desc}}
                                </p>
                                @if ($post->related_posts->count() > 0)
                                    <div class="related-post">
                                        <ul>
                                            @foreach ($post->related_posts->splice(0, 2) as $rPost)
                                                <li><a href="{{url($rPost->slug.'.html')}}">{{$rPost->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </article>
                        @endforeach
                    </div><!--//news-list-->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                @if ($secondIndexCategory)
                <div class="title-panel cf">
                    <div class="title">
                        <h3 class="global-title">
                            <a href="{{url($secondIndexCategory->slug)}}">{{$secondIndexCategory->name}}</a>
                        </h3>
                    </div>
                    <div class="menu-tabs">
                        <ul class="news-type">
                            @foreach ($secondIndexCategory->subCategories as $k=>$sub)
                                <li>
                                    <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-2nd-{{$k}}" data-parent="news-type" data-reset="news-list" title="{{$sub->name}}">
                                        {{$sub->name}}</a>
                                </li>
                                @if ($k < ($secondIndexCategory->subCategories->count() - 1))
                                    <li class="line">|</li>
                                @endif
                           @endforeach
                        </ul><!--//news-type-->
                    </div>
                </div>
                <div class="news-list cf" id="tab-demo" style="display: block">
                    <div class="box-news cf">
                        @foreach ($secondIndexCategory->list_posts->splice(0, 4) as $index => $post)
                            @if ($index == 0)
                                <div class="item01">
                                    <a href="{{url($post->slug.'.html')}}" class="thumbs">
                                        <img src="{{url('img/cache/300x177/'.$post->image)}}" alt="">
                                    </a>
                                    <h3>
                                        <a href="{{url($post->slug.'.html')}}">{{$post->title}}</a>
                                    </h3>
                                    <p>
                                        {{$post->desc}}
                                    </p>
                                </div>
                            @else
                                <div class="item02">
                                    <a href="{{url($post->slug.'.html')}}" class="thumbs">
                                        <img src="{{url('img/cache/110x70/'.$post->image)}}" alt="">
                                    </a>
                                    <h3>
                                        <a href="{{url($post->slug.'.html')}}">{{$post->title}}</a>
                                    </h3>
                                </div>
                            @endif


                        @endforeach
                    </div>
                </div><!--//news-list-->
                 @foreach ($secondIndexCategory->subCategories as $k=>$sub)
                <div class="news-list cf" id="tab-2nd-{{$k}}">
                    @foreach ($sub->list_posts->splice(0, 2) as $post)
                    <article class="item">
                        <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                            <img src="{{url('img/cache/300x177/'.$post->image)}}" alt="">
                            <span>{{$sub->name}}</span>
                        </a>
                        <div class="data">
                            <h3><a href="{{url($post->slug.'.html')}}" title="">{{$post->title}}</a></h3>
                            <p>
                               {{$post->desc}}
                            </p>
                            @if ($post->related_posts->count() > 0)
                                <div class="related-post">
                                    <ul>
                                        @foreach ($post->related_posts->splice(0, 2) as $rPost)
                                            <li><a href="{{url($rPost->slug.'.html')}}">{{$rPost->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </article>
                    @endforeach
                </div><!--//news-list-->
                    @endforeach
                @endif
                @foreach ($middleIndexBanner as $banner)
                <div class="box-adv-center">
                    <a href="{{$banner->url}}"><img src="{{url('files/'.$banner->image)}}" alt=""></a>
                </div><!--//box-adv-center-->
                @endforeach

                @if ($thirdIndexCategory)
                    <div class="boxNews cf">
                        <h3 class="global-title">
                            <a href="{{$thirdIndexCategory->slug}}">{{$thirdIndexCategory->name}}</a>
                        </h3>
                        <div class="listNews cf">
                            @foreach ($thirdIndexCategory->list_posts->splice(0, 6) as $post)
                               <div class="item">
                                <a href="{{url($post->slug.'.html')}}" class="thumb">
                                    <img src="{{url('img/cache/188x125/'.$post->image)}}" alt="{{$post->title}}">
                                </a>
                                <h3><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></h3>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div><!--//col-left-->
            @include('frontend.right_index')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->

@endsection