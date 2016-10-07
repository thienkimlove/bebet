@extends('frontend')

@section('content')

    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                <!-- BoxContact -->
                <div class="box-contact cf">
                    <div class="area-contact">
                        <div class="title">
                            <h3 class="global-title">
                                <a href="{{url('lien-he')}}">Liên hệ</a>
                            </h3>
                        </div>
                        <div class="area-contact cf">
                            {!! Form::open(array('url' => 'save_question')) !!}
                                <input type="text" name="ask_person" class="txt txt-name" placeholder="Họ và tên"/>
                                <input type="email" name="ask_email" class="txt txt-email" placeholder="Email"/>
                                <input type="number" name="ask_phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                                <input type="text" name="ask_address" class="txt txt-add" placeholder="Địa chỉ"/>
                                <textarea name="question" class="txt txt-content" placeholder="Nội dung"></textarea>
                                <input type="submit" value="gửi đi" class="btn btn-submit"/>
                                <input type="reset" value="Làm lại" class="btn btn-reset"/>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="box-map">
                    <img src="{{url('frontend/images/map.jpg')}}" width="1360" height="450" alt="">
                </div>
                <!-- EndBoxContact -->
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section>

@endsection
