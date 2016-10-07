@extends('frontend')

@section('content')
    <section class="section fix">
        <div class="layout-home">
            <ul class="breadcrumbs cf">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li><a href="{{url('phan-phoi')}}">Phân phối</a></li>
                <li>{{config('delivery')['city'][$delivery->city]}}</li>
            </ul>
            <div class="col-left">
                <div class="box-uses">
                    <div class="title">
                        <h3 class="global-title">
                            <a>Hệ thống phân phối tại {{config('delivery')['city'][$delivery->city]}}</a>
                        </h3>
                    </div>
                    <article class="detail">
                        <div class="content">
                            {!! $delivery->content !!}
                        </div>
                    </article>
                    <div class="social-follow">
                        <div class="fb-share-button" data-href="{{url('phan-phoi', $delivery->id)}}" data-layout="button_count" data-mobile-iframe="true"></div>
                    </div>
                    <div class="comment-post">
                        <div class="fb-comments" data-href="{{url('phan-phoi', $delivery->id)}}" data-numposts="5"></div>
                    </div>
                </div>
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section>
@endsection