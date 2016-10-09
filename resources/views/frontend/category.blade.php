@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <ul class="breadCrumb clearFix">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li class="active">Cẩm nang mẹ và bé</li>
            </ul>
                <div class="contentLeft">
                <div class="boxNews clearFix">
                    <h3 class="globalTitle">
                        <a href="{{url($category->slug)}}">{{$category->name}}</a>
                    </h3>

                    <div class="listNews fullWidth">
                        @foreach ($posts as $post)
                          <div class="item clearFix">
                            <h3><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></h3>
                            <a href="#" class="thumb">
                                <img src="{{url('img/cache/220x80', $post->image)}}" alt="{{$post->title}}" width="220" height="80">
                            </a>
                            <span class="date">{{$post->updated_at->format('d/m/Y')}}</span> | <span class="tag">{{ ($post->tags->count() > 0) ? $post->tags->first()->name : ''  }}</span>
                            <p>
                                {{$post->desc}}
                            </p>
                            <a href="{{url($post->slug.'.html')}}" class="readMore">Chi tiết</a>
                        </div>
                        @endforeach
                        <!-- /paging -->
                        <div class="boxPaging">
                            @include('pagination.default', ['paginate' => $posts])
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!-- /endboxNews -->
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection