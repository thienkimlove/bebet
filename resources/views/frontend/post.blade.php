@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <div class="contentLeft left-content">
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
                <div class="delivery">
                    <h3 class="note-pp">
                        Để mua đúng sản phẩm chính hãng, Quý khách có thể thực hiện một trong những cách sau:
                    </h3>
                    <div class="note1 note">
                        <div class="title">
                            Điền thông tin đặt hàng online - giao hàng, thu tiền tại nhà [ ĐẶT HÀNG NGAY ]
                        </div>
                        @include('form', ['pageroll' => $post->id])
                    </div>
                </div>
                <ul class="listButton clearFix">
                    <li class="ilocal"><a href="{{url('phan-phoi')}}">Xem điểm bán</a></li>
                    <li class="icall"><a href="{{url('lien-he')}}">1800.6521</a></li>
                </ul>
                <div class="box-tags">
                    <span>TAG</span>
                    @foreach ($post->tags as $tag)
                        <a href="{{url('tu-khoa/'.$tag->slug)}}" title="">{{$tag->name}}</a>
                    @endforeach
                </div><!--//box-tags-->

                <div class="boxLike">
                    <div class="addthis_native_toolbox"></div>
                </div>

                <div class="boxComment">
                    <div class="fb-comments" data-href="{{url($post->slug.'.html')}}" data-numposts="5"></div>
                </div>
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
                            <a href="{{url($post->slug.'.html')}}" class="thumb">
                                <img src="{{url('img/cache/130x80', $post->image)}}" alt="List news">
                            </a>
                            <p>
                                <a href="{{url($post->slug.'.html')}}">{{$post->title}}</a>
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
@section('frontend_script')
    <script>
        $(function(){

            $('#submit_form_order').click(function(e){
                e.preventDefault();
                var name = $('#name').val();
                var address = $('#address').val();
                var product_id = $('#product_id').val();
                var quantity = $('#quantity').val();

                if (!name || !address || !product_id || !quantity) {
                    $('#submit_form_error').show();
                } else {
                    $('#order_online').submit();
                }

                return false;
            });

        });
    </script>
@endsection