@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <ul class="breadCrumb clearFix">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li class="active">Phân phối</li>
            </ul>
            <div class="contentLeft">
                <div class="boxContact">
                    <div class="boxDist delivery">
                        <h3 class="note-pp">
                            Để mua đúng sản phẩm chính hãng, Quý khách có thể thực hiện một trong những cách sau:
                        </h3>
                        <div class="note1 note">
                            <div class="title">
                                <span class="number">1</span>
                                Điền thông tin đặt hàng online - giao hàng, thu tiền tại nhà vào form dưới đây
                            </div>
                            <form id="order_online" method="POST" action="{{url('create-order')}}">
                                <div class="row1">
                                    <input type="text" id="name" name="name" placeholder="Họ tên">
                                    <input type="text" id="address" name="address" placeholder="Địa chỉ">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="destination" value="delivery">
                                </div>
                                <div class="row2">
                                    <input type="number" name="phone" placeholder="Điện thoại">
                                    <select id="product_id" name="product_id">
                                        <option value="0">Chọn sản phẩm</option>
                                        @foreach (config('system.products') as $productId => $productName)
                                            <option value="{{$productId}}">{{$productName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row3">
                                    <input type="text" name="note" placeholder="Ghi chú">
                                    <input type="number" id="quantity" name="quantity" placeholder="Số lượng" class="sl-onl"> <label for="">hộp</label>
                                    <button id="submit_form_order" class="btn-order-onl">ĐẶT MUA HÀNG</button>
                                </div>
                                @if (!$showMessage)
                                    <div id="submit_form_error" class="error" style="display: none">Điền đầy đủ các thông tin</div>
                                @else
                                    <div id="submit_form_error" class="error">Bạn đã đặt hàng thành công. Chúng tôi sẽ liên hệ lại với bạn để xác nhận.</div>
                                @endif
                            </form>
                        </div>
                        <div class="note2 note">
                            <div class="title">
                                <span class="number">2</span>
                                Gọi tới tổng đài tư vấn và chăm sóc khách hàng <a href="tel:18006521">1800.6521</a>
                            </div>
                        </div>
                        <div class="note3 note">
                            <div class="title">
                                <span class="number">3</span>
                                Hoặc mua tại các nhà thuốc trên toàn quốc
                            </div>
                        </div>
                        <div class="places">
                            @foreach ($totalDeliveries as $area => $cities)
                                <div class="places1">
                                    <span class="captain">{{$area}}</span>
                                    <div class="provines">
                                        @foreach ($cities->chunk(6) as $partCities)
                                            @foreach ($partCities as $city)
                                                <a href="{{url('phan-phoi/'. $city->id)}}" title="">{{config('delivery')['city'][$city->city]}}</a>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /endboxDist -->
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection
@section('footer_script')
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
@section('frontend_script')
    <script>
        $(function(){
            $('#delivery_form_submit').click(function(e){
                e.preventDefault();

                var name = $('#name').val();
                var address = $('#address').val();
                var phone = $('#phone').val();
                var product_id = $('#product_id').val();
                var quantity = $('#quantity').val();

                if (!name || !address || !phone || !product_id || !quantity) {
                    $('#delivery_form_message').html('Bạn vui lòng điền đầy đủ các thông tin').show();
                } else {
                    $('#order_online').submit();
                }

                return false;
            });
        });
    </script>
@endsection