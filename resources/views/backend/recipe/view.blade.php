@extends('backend.layout.master')

@section('title')
<title>Recipe</title>
@endsection

@section('headscript')
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/datepicker3.css') }}">
@endsection

@section('breadcrumb')
  <h1>
      Recipe Management <small>Recipe</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="{{ route('recipe.index')}}">Recipe List</a></li>
    <li class="active">Recipe</li>
  </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      @if(Session::has('gagal'))
        <script>
          window.setTimeout(function() {
            $(".alert-danger").fadeTo(500, 0).slideUp(700, function(){
                $(this).remove();
            });
          }, 5000);
        </script>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Succeed!</h4>
          <p>{{ Session::get('gagal') }}</p>
        </div>
      @endif
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
      <br />
    </div>
  </div>
  <?php
    if($getRecipe->recipe_image == null){
        $bg = asset('amadeo/image/recipe/default-menu.png');
    }else{
        $bg = asset('amadeo/image/recipe/').'/'.$getRecipe->recipe_image;
    }
  ?>
  <div class="modal fade" id="myModalCreateImage" role="dialog">
    <div class="modal-dialog">
      <form class="form-horizontal" action="{{ route('recipe.uploadImage')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Upload Image</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="{{ $errors->has('recipe_image') ? 'has-error' : '' }}">
                <label class="col-sm-4 control-label">File Image</label>
              </div>
              <div class="col-sm-8 {{ $errors->has('recipe_image') ? 'has-error' : '' }}">
                <input type="hidden" name="id" value="{{ $getRecipe->id }}">
                <input type="hidden" name="recipe_name" value="{{ $getRecipe->recipe_name }}">
                <input type="file" name="recipe_image" class="form-control" accept=".png, .jpg" value="{{ old('image') }}">
                <span><i>{{ $getRecipe->recipe_image }}</i></span>
                @if($errors->has('recipe_image'))
                <span class="help-block">
                  <i>* {{$errors->first('recipe_image')}}</i>
                </span>
                @endif
                <input type="hidden" name="id" value="{{ $getRecipe->id }}" />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary bg-orange">Upload</button>
          </div>
        </div>
    </form>
    </div>
  </div>

  <div class="modal fade modal-form-update" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Recipe</h4>
        </div>
        <form class="form-horizontal" method="post" action="{{ route('recipe.update') }}">
          <div class="modal-body">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $getRecipe->id }}">
            <div class="form-group">
              <div class="{{ $errors->has('recipe_category_id') ? 'has-error' : '' }}">
                <label class="col-sm-3 control-label">Category Recipe</label>
              </div>
              <div class="col-sm-9 {{ $errors->has('recipe_category_id') ? 'has-error' : '' }}">
                <select name="recipe_category_id" class="form-control select2" style="width: 100%;">
                  <option value="">-- Choose --</option>
                  @foreach ($getRecipeCategory as $key)
                  <option value="{{ $key->id }}" {{ old('recipe_category_id', $getRecipe->recipe_category_id) == $key->id ? 'selected=""' : '' }}>{{ $key->category_name }}</option>
                  @endforeach
                </select>
                @if($errors->has('recipe_category_id'))
                  <span class="help-block">
                    <i>* {{$errors->first('recipe_category_id')}}</i>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="{{ $errors->has('recipe_name') ? 'has-error' : '' }}">
                <label class="col-sm-3 control-label">Name</label>
              </div>
              <div class="col-sm-9 {{ $errors->has('recipe_name') ? 'has-error' : '' }}">
                <input type="text" name="recipe_name" class="form-control" placeholder="Name" value="{{ old('recipe_name', $getRecipe->recipe_name) }}">
                @if($errors->has('recipe_name'))
                <span class="help-block">
                  <i>* {{$errors->first('recipe_name')}}</i>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="{{ $errors->has('ingredients') ? 'has-error' : '' }}">
                <label class="col-sm-3 control-label">Ingredients</label>
              </div>
              <div class="col-sm-9 {{ $errors->has('ingredients') ? 'has-error' : '' }}">
                <textarea class="textarea form-control" name="ingredients" placeholder="Ingredients" style="width: 100%; height: 200px; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{ old('ingredients', $getRecipe->ingredients) }}</textarea>
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
                <textarea class="textarea form-control" name="directions" placeholder="Directions" style="width: 100%; height: 200px; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{ old('directions', $getRecipe->directions) }}</textarea>
                @if($errors->has('directions'))
                  <span class="help-block">
                    <i>* {{$errors->first('directions')}}</i>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group {{ $errors->has('post_time') ? 'has-error' : '' }}">
              <label class="col-sm-3 control-label">Pubilsh Date</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="post_time" value="{{ old('post_time', $getRecipe->post_time) }}" id="datepicker1">
                </div>
                @if($errors->has('post_time'))
                  <span class="help-block">
                    <i>* {{$errors->first('post_time')}}</i>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group {{ $errors->has('show_homepage') ? 'has-error' : ''}}">
                <label class="col-sm-3 control-label">Show Homepage</label>
                <div class="col-sm-9">
                  <label>
                    <input type="checkbox" class="minimal-red" name="show_homepage" value="Y" {{ old('show_homepage', $getRecipe->show_homepage) == 'Y' ? 'checked' : '' }}>
                  </label>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary bg-orange">Update Recipe</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-5">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-black" style="background: url('{{ $bg }}') center center;min-height:350px;">
          <h3 class="widget-user-username pull-left">{{ $getRecipe->recipe_name }}</h3>
          <h3 class="widget-user-username pull-right"><span data-toggle="tooltip" title="Change Image">
            <a href="" data-toggle="modal" data-target="#myModalCreateImage" class="btn bg-orange btn-flat btn-xs edit"><i class="fa fa-file-text-o"> Change</i></a>
          </span></h3>
          <div class="clearfix"></div>
          <h5 class="widget-user-desc">{{ $getRecipe->recipe_category->category_name }}</h5>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12">
              <div class="description-block">
                <h5 class="description-header">{{ $getRecipe->recipe_name }}</h5>
                <span class="description-text">{{ $getRecipe->recipe_category->category_name }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-7">
      <div class="box box-solid">
        <div class="box-header with-border">
          <a class="update" data-toggle="modal" data-target=".modal-form-update"><span class="btn btn-xs btn-warning btn-sm pull-right" data-toggle="tooltip" data-placement="top" title="Update"><i class='fa fa-pencil'></i> Update Recipe</span></a>
        </div>
        <div class="box-body form-horizontal">
          <div class="form-group">
            <label class="col-sm-3 control-label">Category Recipe</label>
            <div class="col-sm-9">
              {{ $getRecipe->recipe_category->category_name }}
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Recipe Name</label>
            <div class="col-sm-9">
              {{ $getRecipe->recipe_name }}
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Ingredients</label>
            <div class="col-sm-9">
              {!! $getRecipe->ingredients !!}
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Directions</label>
            <div class="col-sm-9">
              {!! $getRecipe->directions !!}
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Publish Date</label>
            <div class="col-sm-9">
              {!! $getRecipe->post_time !!}
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Show Homepage</label>
            <div class="col-sm-9">
              {!! $getRecipe->show_homepage == "Y" ? 'Yes' : "No" !!}
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
@stop

@section('script')
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script type="text/javascript">
$('#datepicker1').datepicker({
  autoclose: true,
  minDate: +2,
  format: 'yyyy-mm-dd',
  todayHighlight: true,
});

$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
  checkboxClass: 'icheckbox_minimal-red',
});

@if($errors->has('recipe_image'))
  $('#myModalCreateImage').modal('show');
@endif

@if($errors->has('recipe_category_id') || $errors->has('recipe_name'))
  $('.modal-form-update').modal('show');
@endif

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
