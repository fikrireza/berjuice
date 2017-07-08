@extends('backend.layout.master')

@section('title')
<title>Create New Recipe</title>
@endsection

@section('headscript')
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/datepicker3.css') }}">
@endsection

@section('breadcrumb')
  <h1>
      Recipe Management <small>Create New Recipe</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">New Recipe</li>
  </ol>
@stop

@section('content')
  <div class="row">
    @if(Session::has('message'))
    <div class="col-md-12">
      <div class="alert alert-success panjang">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Succeed!</h4>
        <p>{{ Session::get('message') }}</p>
      </div>
    </div>
    @endif

  <div class="col-md-8">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Create New Recipe</h3>
      </div>
      <form class="form-horizontal" method="post" action="{{ route('recipe.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
          <div class="{{ $errors->has('category_id') ? 'has-error' : '' }}">
            <label class="col-sm-3 control-label">Category Recipe</label>
          </div>
          <div class="col-sm-9 {{ $errors->has('category_id') ? 'has-error' : '' }}">
            <select name="category_id" class="form-control select2" style="width: 100%;">
              <option value=""></option>
              @foreach ($getRecipeCategory as $key => $value)
              <option value="{{ $key->id }}" {{ old('category_id') == $key->id ? 'selected=""' : '' }}>{{ $key->category_name }}</option>
              @endforeach
            </select>
            @if($errors->has('category_id'))
              <span class="help-block">
                <i>* {{$errors->first('category_id')}}</i>
              </span>
            @endif
          </div>
        </div>
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
          <div class="{{ $errors->has('ingredients') ? 'has-error' : '' }}">
            <label class="col-sm-3 control-label">Ingredients</label>
          </div>
          <div class="col-sm-9 {{ $errors->has('ingredients') ? 'has-error' : '' }}">
            <textarea class="textarea form-control" name="ingredients" placeholder="Ingredients" style="width: 100%; height: 200px; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{ old('ingredients') }}</textarea>
            @if($errors->has('ingredients'))
              <span class="help-block">
                <i>* {{$errors->first('ingredients')}}</i>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="{{ $errors->has('directions') ? 'has-error' : '' }}">
            <label class="col-sm-3 control-label">Directions</label>
          </div>
          <div class="col-sm-9 {{ $errors->has('directions') ? 'has-error' : '' }}">
            <textarea class="textarea form-control" name="directions" placeholder="Directions" style="width: 100%; height: 200px; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{ old('directions') }}</textarea>
            @if($errors->has('directions'))
              <span class="help-block">
                <i>* {{$errors->first('directions')}}</i>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group {{ $errors->has('recipe_img') ? 'has-error' : '' }}">
          <label class="col-sm-3 control-label">Recipe Image</label>
          <div class="col-sm-9">
            <input type="file" name="recipe_img" class="form-control" accept=".png,.jpg,.jpeg,.bmp">
            @if($errors->has('recipe_img'))
              <span class="help-block">
                <i>* {{$errors->first('recipe_img')}}</i>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group {{ $errors->has('publish_date') ? 'has-error' : '' }}">
          <label class="col-sm-3 control-label">Pubilsh Date</label>
          <div class="col-sm-9">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control" value="{{ date('Y-m-d') }}" id="datepicker1">
            </div>
            @if($errors->has('publish_date'))
              <span class="help-block">
                <i>* {{$errors->first('publish_date')}}</i>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group {{ $errors->has('show_homepage') ? 'has-error' : ''}}">
          <label class="col-sm-3 control-label">Show Homepage</label>
          <div class="col-sm-9">
            <label>
              <input type="checkbox" class="minimal-red" name="show_homepage" {{ old('show_homepage') == 'on' ? 'checked' : '' }}>
            </label>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn bg-orange pull-right btn-sm btn-flat">Create Recipe</button>
      </div>
    </form>
    </div>
  </div>
@endsection


@section('script')
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('backend/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
  $(".select2").select2({
    placeholder: "Choose Category",
    allowClear: true
  });
  $('#datepicker1').datepicker({
    autoclose: true,
    minDate: +2,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
  });

  $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
  });

  $(function () {
    $(".textarea").wysihtml5({
      toolbar: {
          "font-styles": true, //Font styling, e.g. h1, h2, etc.
          "emphasis": false, //Italics, bold, etc.
          "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers.
          "html": true, //Button which allows you to edit the generated HTML.
          "link": false, //Button to insert a link.
          "image": false, //Button to insert an image.
          "color": true, //Button to change color of font
          "blockquote": false
        }
    });
  });
</script>
@endsection
