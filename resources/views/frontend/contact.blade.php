@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <ul class="breadCrumb clearFix">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ul>
            <div class="contentLeft">
                <div class="boxForm">
                    <div class="boxConsult clearFix">
                        {!! Form::open(array('method' => 'POST','url' => url('save-contact'), 'class' => 'formConsult', 'id' => 'contact')) !!}
                        <div class="form-row">
                            <label for="name">Họ và tên</label>
                            <input type="text" id="name" name="name" placeholder="Họ và tên" class="txtName">
                        </div>
                        <div class="form-row">
                            <label for="phone">Điện thoại</label>
                            <input type="text" id="phone" name="phone" placeholder="Mobile" class="txtMob">
                        </div>
                        <div class="form-row">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Nhập email" required>
                        </div>
                        <div class="form-row">
                            <label for="title">Tiêu đề</label>
                            <input type="text" name="title" placeholder="Nhập tiêu đề" required>
                        </div>
                        <div class="form-row">
                            <label for="content">Nội dung</label>
                            <textarea name="content" id="content" class="txtArea" placeholder="Nhập nội dung" cols="30" rows="10"></textarea>
                        </div>
                        <div id="delivery_form_message" style="display: none" class="errors">Xin điền đầy đủ thông tin!</div>
                        <div class="contain-btn form-row">
                            <button id="delivery_form_submit" type="button" class="btnSubmit">Gửi</button>
                            <button id="delivery_form_reset" type="reset" class="btnReset">Nhập lại</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="boxContact">
                    <div class="item">
                        <h3 class="globalTitle">
                            <a href="#">Liên hệ</a>
                        </h3>
                        <p>
                            Địa chỉ liên hệ <br>
                            <strong>Tại Hà Nội</strong> <br>
                            Địa chỉ: Tầng 5 tòa nhà 29T1, <br>
                            phố Hoàng Đạo Thúy, Trung Hòa, <br>
                            Cầu Giấy, Hà Nội <br>
                            ĐT: 04.62824344 <br>
                            Fax: 04.62824263 <br>
                        </p>
                        <p>
                            <strong>Chi nhánh TP. HCM</strong> <br>
                            Địa chỉ:156/17 Tô Hiến Thành. P15 Q10. <br>
                            TP.HCM <br>
                            ĐT: 083.9797779 <br>
                            Fax: 086.2646832 <br>
                            Đường dây nóng: 1800.6521. <br>
                        </p>
                    </div>
                    <div class="boxMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6243760497027!2d105.79922031450425!3d21.007688986009732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca10dc28473%3A0x89fda75af78a62cb!2zQ8O0bmcgdHkgVHXhu4cgTGluaA!5e0!3m2!1svi!2s!4v1511399749600" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
           @include('frontend.right')
        </div>
    </section>
@endsection
@section('footer_script')
    <script>
        $(function(){
            $('#delivery_form_submit').click(function(e){
                e.preventDefault();
                var name = $('#name').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var content = $('#content').val();

                if (!name || !phone || !email || !content) {
                    $('#delivery_form_message').show();
                } else {
                    $('#contact').submit();
                }

                return false;
            });

            $('#delivery_form_reset').click(function (e) {
                e.preventDefault();
                $('#contact').reset();
                return false;
            })

        });
    </script>
@endsection