@extends('backend.layout.master')

@section('title')
<title>General Config</title>
@endsection

@section('headscript')
@endsection

@section('breadcrumb')
  <h1>
      General Config
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">General Config</li>
  </ol>
@stop

@section('content')

  @if(Session::has('berhasil'))
  <script>
    window.setTimeout(function() {
      $(".alert-success").fadeTo(500, 0).slideUp(700, function(){
          $(this).remove();
      });
    }, 5000);
  </script>
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Succeed!</h4>
    <p>{{ Session::get('berhasil') }}</p>
  </div>
  @endif


<div class="row">
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Inbox Email</h3>
      </div>
      <form method="post" action="{{ route('config.store') }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $getConfig->id }}">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Email To</label>
            <input class="form-control" placeholder="Enter email" name="email_to" type="email" value="{{ old('email_to', $getConfig->email_to) }}">
            @if($errors->has('email_to'))
              <span class="help-block">
                <i>* {{$errors->first('email_to')}}</i>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email CC</label>
            <input class="form-control" placeholder="Enter email" name="email_cc" type="email" value="{{ old('email_cc', $getConfig->email_cc) }}">
            @if($errors->has('email_cc'))
              <span class="help-block">
                <i>* {{$errors->first('email_cc')}}</i>
              </span>
            @endif
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection


@section('script')
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
  });
</script>
@endsection
