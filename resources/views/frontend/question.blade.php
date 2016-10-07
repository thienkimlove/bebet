@extends('frontend')

@section('content')

    <section class="section fix">
        <div class="layout-home">
            <ul class="breadcrumbs cf">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li>Hỏi đáp chuyên gia</li>
            </ul>
            <div class="col-left">
                <div class="box-faq">
                    @if ($mainQuestion)
                        <article class="item">
                            <div class="content">
                                <h3 class="title-faq">
                                   {{$mainQuestion->title}}
                                </h3>
                                <span class="human">Người gửi:
                                  <span>{{$mainQuestion->ask_person}}</span>
                                </span>
                                <time class="time" datetime="{{$mainQuestion->updated_at->format('Y/m/d')}}">{{$mainQuestion->updated_at->format('d/m/Y')}}</time>
                                <p>
                                    <span class="question">Câu hỏi:</span>
                                    <span>{{$mainQuestion->question}}</span>
                                </p>
                            </div>
                            <div id="accordion">
                                <a href="#" class="answer">Xem trả lời</a>
                                <div class="accordion">
                                    <div class="content">
                                        <p>
                                            {{$mainQuestion->answer}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endif
                    @foreach ($questions as $question)
                        <article class="item">
                            <div class="content">
                                <h3 class="title-faq">{{$question->title}}</h3>
                                <span class="human">Người gửi:
                                  <span>{{$question->ask_person}}</span>
                                </span>
                                <time class="time" datetime="{{$question->updated_at->format('Y/m/d')}}">{{$question->updated_at->format('d/m/Y')}}</time>
                                <p>
                                    <span class="question">Câu hỏi:</span>
                                    <span>{{$question->question}}</span>
                                </p>
                            </div>
                            <div id="accordion">
                                <a href="#" class="answer">Xem trả lời</a>
                                <div class="accordion">
                                    <div class="content">
                                        <p>
                                          {{$question->answer}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    <!-- /paging -->
                    <div class="boxPaging">
                        @include('pagination.default', ['paginate' => $questions])
                    </div><!--//news-list-->
                </div>
                <div class="box-contact cf">
                    <div class="form-question">
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

            @foreach ($middleIndexBanner as $banner)
                <div class="box-banner">
                    <img src="{{url('files/'.$banner->image)}}" alt="">
                </div>
            @endforeach

            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section>

@endsection