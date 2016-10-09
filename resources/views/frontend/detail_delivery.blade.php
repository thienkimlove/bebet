@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <ul class="breadCrumb clearFix">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li><a href="{{url('phan-phoi')}}">Phân phối</a></li>
                <li class="active">Phân phối chi tiết</li>
            </ul>
            <div class="contentLeft">
                <div class="boxDetails">
                    <h3 class="globalTitle">
                        <a>Hệ thống phân phối tại {{config('delivery')['city'][$delivery->city]}}</a>
                    </h3>
                    {!! $delivery->content !!}
                    <!-- /endTab03 -->
                </div>
                <div class="boxComment">
                    <div class="fb-comments" data-href="{{url('phan-phoi', $delivery->id)}}" data-numposts="5"></div>
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection