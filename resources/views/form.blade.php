<form id="order_online" method="POST" action="{{url('create-order')}}">
    <div class="row1">
        <input type="text" id="name" name="name" placeholder="Họ tên">
        <input type="text" id="address" name="address" placeholder="Địa chỉ">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="destination" value="{{ $pageroll  }}">
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