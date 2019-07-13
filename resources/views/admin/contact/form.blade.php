@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Liên hệ</h1>
        </div>

    </div>
  <div class="row">
      <div class="col-lg-6">
          <h2>Cập nhật liên hệ {{$contact->title}}</h2>
          {!! Form::model($contact, ['method' => 'PATCH', 'route' => ['admin.contacts.update', $contact->id], 'files' => true]) !!}


          <div class="form-group">
              {!! Form::label('name', 'Name') !!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('email', 'Email') !!}
              {!! Form::text('email', null, ['class' => 'form-control']) !!}
          </div>


          <div class="form-group">
              {!! Form::label('phone', 'Phone') !!}
              {!! Form::text('phone', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('content', 'Content') !!}
              {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
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