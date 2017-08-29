@extends('backend.layout.master')

@section('title')
<title>Create New Recipe</title>
@endsection

@section('headscript')
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/datepicker3.css') }}">
@endsection

@section('breadcrumb')
  <h1>
      Users Management <small>Create New Users</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="{{ route('recipe.index') }}">Users List</a></li>
    <li class="active">New User</li>
  </ol>
@stop

@section('content')
  <div class="row">
    @if(Session::has('message'))
    <script>
      window.setTimeout(function() {
        $(".alert-success").fadeTo(500, 0).slideUp(700, function(){
            $(this).remove();
        });
      }, 5000);
    </script>
    <div class="col-md-12">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Succeed!</h4>
        <p>{{ Session::get('message') }}</p>
      </div>
    </div>
    @endif

  <div class="col-md-8">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Create User</h3>
      </div>
      <form class="form-horizontal" method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
          <div class="{{ $errors->has('name') ? 'has-error' : '' }}">
            <label class="col-sm-3 control-label">Name</label>
          </div>
          <div class="col-sm-9 {{ $errors->has('name') ? 'has-error' : '' }}">
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
            @if($errors->has('name'))
            <span class="help-block">
              <i>* {{$errors->first('name')}}</i>
            </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="{{ $errors->has('email') ? 'has-error' : '' }}">
            <label class="col-sm-3 control-label">Email</label>
          </div>
          <div class="col-sm-9 {{ $errors->has('email') ? 'has-error' : '' }}">
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
            @if($errors->has('email'))
            <span class="help-block">
              <i>* {{$errors->first('email')}}</i>
            </span>
            @endif
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn bg-orange pull-right btn-sm btn-flat">Create User</button>
      </div>
    </form>
    </div>
  </div>
@endsection


@section('script')
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(".select2").select2({
    placeholder: "Choose Category",
    allowClear: true
  });

  $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
  });
</script>
@endsection
