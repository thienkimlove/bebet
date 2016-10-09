<p>
    Người hỏi : {{$data['ask_person']}}
</p>
@if (isset($data['ask_email']))
<p>
    Email : {{$data['ask_email']}}
</p>
@endif

@if (isset($data['ask_age']))
    <p>
        Tuoi : {{$data['ask_age']}}
    </p>
@endif


@if (isset($data['ask_address']))
<p>
    Địa chỉ : {{$data['ask_address']}}
</p>
@endif
<p>
    Số điện thoại : {{$data['ask_phone']}}
</p>

@if (isset($data['ask_title']))
    <p>
        Tieu de cau hoi : {{$data['ask_title']}}
    </p>
@endif

<p>
    Nội dung câu hỏi : {{$data['question']}}
</p>