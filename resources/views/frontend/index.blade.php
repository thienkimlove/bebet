@extends('frontend')

@section('content')
    <section class="section bgImg mb0">
        <div class="container">
            <!-- <img src="imgs/Trang-chu.jpg" alt=""> -->
            <div class="boxIntro">
                <h3 class="globalTitle noneAfter">
                    Gia đình Be Birth
                    <p class="subTitle">Dinh dưỡng chuẩn hóa cho từng giai đoạn của thai kỳ</p>
                </h3>
                <div class="areaImgs">
                    <div class="imgNumber imgN01" >
                        <div class="contentImg">
                            <p>
                            <a href="http://www.bebirth.vn/san-pham/be-birth" target="_blank">Dây chuyền sản xuất GMP WHO</a>                            </p>
                        </div>
                    </div>
                    <span class="imgNumber icon01"></span>
                    <span class="imgNumber icon02"></span>
                    <span class="imgNumber icon03"></span>
                    <span class="imgNumber icon04"></span>
                    <div class="imgNumber imgN02 wow zoom-in" data-scroll-reveal="enter bottom, after 0.8s">
                        <div class="contentImg">
                            <p><a href="http://www.bebirth.vn/vitamin-duong-chat-thiet-yeu-cho-ba-bau.html" target="_blank">Bổ sung hơn 20 vitamin, các nguyên tố vi lượng</a></p>
                        </div>
                    </div>
                    <div class="imgNumber imgN03 wow zoom-in" data-scroll-reveal="enter top, after 0.8s">
                        <div class="contentImg">
                            <p><a href="http://www.bebirth.vn/acid-folic-duong-chat-vang-cho-ba-bau.html" target="_blank">Các dược liệu quý cần thiết cho mẹ và bé</a></p>
                        </div>
                    </div>
                    <div class="imgNumber imgN04 wow zoom-in" data-scroll-reveal="enter bottom, after 0.8s">
                        <div class="contentImg">
                            <p>
                            <a href="http://www.bebirth.vn/vai-tro-cua-omega3-doi-voi-suc-khoe-ba-bau.html" target="_blank">Bổ sung OMEGA 3(DHA và EPA) từ nhà cung cấp EPAX - Nhà cung cấp OMEGA 3 Số 1 thế giới                            </a></p>
                        </div>
                    </div>
                    <div class="imgNumber imgN05 wow zoom-in" data-scroll-reveal="enter top, after 0.8s">
                        <div class="contentImg">
                            <p>
                            <a href="http://www.bebirth.vn/san-pham/be-birth" target="_blank">Thuận tiện sử dụng</a>                            </p>
                        </div>
                    </div>
                    <div class="imgNumber imgN06 wow zoom-in" data-scroll-reveal="enter bottom, after 0.8s">
                        <div class="contentImg">
                            <p>
                            <a href="http://www.bebirth.vn/san-pham/be-birth" target="_blank">Công thức chuyên biệt phù hợp cho từng giai đoạn của mẹ và thai nhi                            </a></p>
                        </div>
                    </div>
                    <div class="imgNumber imgN07 wow zoom-in" data-scroll-reveal="enter top, after 0.8s">
                      <div class="contentImg">
                          <p>
                          <a href="http://www.bebirth.vn/san-pham/be-birth" target="_blank">Nguyên liệu và chất lượng Châu Âu                          </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="boxSlidePage bg">
        <div class="container">
            <h3 class="globalTitle noneAfter">
                Cẩm nang cho mẹ và bé
                <p class="subTitle">Bí quyết chăm sóc sức khỏe mẹ và bé</p>
            </h3>
            <div class="listSlidePage clearFix">
                <div class="owl-carousel" id="slidePage">
                    @foreach ($indexFeatureSlider as $k => $slider)
                    <div class="{{($k < 2) ? 'item wow slideInLeft' : 'item wow slideInRight'}}" data-wow-duration="{{($k < 2) ? '0.8s' : '1s'}}" data-wow-delay="1s">
                        <a href="{{url($slider->slug.'.html')}}" title="{{$slider->title}}">
                            <img src="{{url('img/cache/274x174', $slider->image)}}" width="274" height="174" alt=""/>
                        </a>
                        <h3>
                            <a href="{{url($slider->slug.'.html')}}">
                                {{$slider->title}}
                            </a>
                        </h3>
                        <p>
                          {{$slider->desc}}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /endboxSlidePage -->
    <section class="section mb0">
        <div class="container">
            <div class="contentLeft">
                <!-- /endboxRecommended -->
                <div class="boxNews clearFix">
                    <h3 class="globalTitle">
                        <a href="{{url('tin-tuc')}}">Tin mới nhất</a>
                    </h3>
                    <div class="listNews clearFix">
                        @foreach ($newPosts as $post)
                        <div class="item">
                            <a href="{{url($post->slug.'.html')}}" class="thumb">
                                <img src="{{url('img/cache/188x125', $post->image)}}" alt="{{$post->title}}">
                            </a>
                            <p>
                               <a href="{{url($post->slug.'.html')}}" class="thumb"> {{$post->title}}</a>
                            </p>
                            <span class="datePost">{{$post->updated_at->format('d/m/Y')}}</span>
                            <span class="countView">{{$post->views}} lượt xem</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /endboxNews -->
                <div class="boxConsult">
                    <div class="titleConsult">
                        <h3 class="globalTitle">
                            <a href="{{url('hoi-dap')}}">Góc chuyên gia</a>
                        </h3>
                    </div>
                    <p>
                        Với đội ngũ bác sĩ, dược sĩ nhiều năm kinh nghiệm và các chuyên gia hàng đầu của hãng dược phẩm Pleuran, chúng tôi luôn lắng nghe và sẵn sàng tư vấn với mong muốn mang tới sức khỏe toàn diện cho thế hệ mầm non Việt Nam.
                    </p>
                </div>
                <div class="boxQuestion clearFix">
                    <div class="areaQuestion">
                        <div class="quoteMess">
                            <p>
                                Não của chúng ta phát triển nhanh và mạnh mẽ nhất là giai đoạn bào thai, bú mẹ và những năm ở tuổi mẫu giáo, đây cũng chính là giai đoạn não cần được cung cấp DHA nhất. Viên uống Bebirth với thành phần chứa Omega 3(DHA và EPA) cần thiết...
                            </p>
                        </div>
                        <ul class="listQuestion" id="listQuestion">
                            @foreach ($indexQuestions as $question)
                               <li><a href="{{url('hoi-dap', $question->slug)}}">{{$question->title}}</a></li>
                            @endforeach
                        </ul>
                        <p class="seeMore">
                            <a href="{{url('hoi-dap')}}">Xem thêm</a>
                        </p>
                        <div class="areaAsk">
                            <a href="{{url('hoi-dap')}}" class="btnAsk">Đặt câu hỏi tại đây</a>
                        </div>
                    </div>
                    <div class="areaAvatar">
                        <img src="{{url('frontend/imgs/bg/avatar.png')}}" alt="">
                    </div>
                </div>
            </div>
            @include('frontend.right_index')
        </div>
    </section>
@endsection