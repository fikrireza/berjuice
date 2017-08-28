@extends('backend.layout.master')

@section('title')
<title>Create New Recipe Category</title>
@endsection

@section('headscript')
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

@section('breadcrumb')
  <h1>
      Recipe Management <small>Create New Recipe Category</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="{{ route('recipeCategory.index') }}">Category Recipe List</a></li>
    <li class="active">New Recipe Category</li>
  </ol>
@stop

@section('content')
  <div class="row">
    @if(Session::has('gagal'))
    <script>
      window.setTimeout(function() {
        $(".alert-danger").fadeTo(700, 0).slideUp(700, function(){
            $(this).remove();
        });
      }, 5000);
    </script>
    <div class="col-md-12">
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-times"></i> Failed!</h4>
        <p>{{ Session::get('gagal') }}</p>
      </div>
    </div>
    @endif

  <div class="col-md-8">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Create New Recipe Category</h3>
      </div>
      <form class="form-horizontal" method="post" action="{{ route('recipeCategory.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
          <div class="{{ $errors->has('category_name') ? 'has-error' : '' }}">
            <label class="col-sm-3 control-label">Name</label>
          </div>
          <div class="col-sm-9 {{ $errors->has('category_name') ? 'has-error' : '' }}">
            <input type="text" name="category_name" class="form-control" placeholder="E.g: Dessert" value="{{ old('category_name') }}">
            @if($errors->has('category_name'))
            <span class="help-block">
              <i>* {{$errors->first('category_name')}}</i>
            </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="{{ $errors->has('description') ? 'has-error' : '' }}">
            <label class="col-sm-3 control-label">Description</label>
          </div>
          <div class="col-sm-9 {{ $errors->has('description') ? 'has-error' : '' }}">
            <textarea class="textarea form-control" name="description" placeholder="Description of Category" style="width: 100%; height: 200px; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{ old('description') }}</textarea>
            @if($errors->has('description'))
              <span class="help-block">
                <i>* {{$errors->first('description')}}</i>
              </span>
            @endif
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn bg-orange pull-right btn-sm btn-flat">Create Recipe Category</button>
      </div>
    </form>
    </div>
  </div>
@endsection


@section('script')
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
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
