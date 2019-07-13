@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Orders</h1>
        </div>

    </div>
  <div class="row">
      <div class="col-lg-6">
          <h2>Cập nhật đơn {{$order->name}}</h2>
          {!! Form::model($order, ['method' => 'PATCH', 'route' => ['admin.orders.update', $order->id], 'files' => true]) !!}


          <div class="form-group">
              {!! Form::label('name', 'Name') !!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('address', 'Address') !!}
              {!! Form::text('address', null, ['class' => 'form-control']) !!}
          </div>


          <div class="form-group">
              {!! Form::label('phone', 'Phone') !!}
              {!! Form::text('phone', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('product_id', 'Product') !!}
              {!! Form::select('product_id', config('system.products'), null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('quantity', 'Số lượng') !!}
              {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('note', 'Ghi chú') !!}
              {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('status', 'Status') !!}
              {!! Form::select('status', config('system.status'), null, ['class' => 'form-control']) !!}
          </div>


          <div class="form-group">
              {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
          </div>
          {!! Form::close() !!}

          @include('admin.list')

      </div>
  </div>
@stop