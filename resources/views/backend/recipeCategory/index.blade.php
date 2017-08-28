@extends('backend.layout.master')

@section('title')
<title>Recipe Categories</title>
@endsection

@section('breadcrumb')
  <h1>
      Recipe Management <small>Recipe Categories</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Recipe Categories</li>
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
          <h4><i class="icon fa fa-times"></i> Failed!</h4>
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

  <div class="modal fade modal-form-update" role="dialog">
    <div class="modal-dialog" style="width:500px;">
      <form class="form-horizontal" action="{{ route('recipeCategory.update') }}" method="post">
        {!! csrf_field() !!}
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Recipe Category</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="{{ $errors->has('category_name') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label">Name</label>
              </div>
              <div class="col-sm-10 {{ $errors->has('category_name') ? 'has-error' : '' }}">
                <input type="hidden" name="id" class="form-control" id="recipe_category_id" value="{{ old('id') }}">
                <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Name" value="{{ old('category_name') }}">
                @if($errors->has('category_name'))
                  <span class="help-block">
                    <i>* {{$errors->first('category_name')}}</i>
                  </span>
                @endif
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary bg-orange">Update Data</button>
          </div>
        </div>
    </form>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">Recipe Categories</h3>
          <a href="{{ route('recipeCategory.add') }}" class="btn btn-flat bg-red pull-right">New Recipe Categories</a>
        </div>
        <div class="box-body">
          <table id="recipeCategory" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Categories Name</th>
                {{-- <th>Description</th> --}}
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($getRecipeCategories as $key)
              <tr>
                <td>{{ $key->category_name }}</td>
                {{-- <td>{{ $key->description }}</td> --}}
                <td>
                  <a class="update" data-id="{{ $key->id }}" data-name="{{ $key->category_name}}" data-toggle="modal" data-target=".modal-form-update"><span class="btn btn-xs btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Update"><i class='fa fa-pencil'></i></span></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
@stop

@section('script')
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
  $(function () {
    $("#recipeCategory").DataTable();
  });

  $(document).on('click', '.update', function(e) {
    var idCategory    = $(this).data('id');
    var name  = $(this).data('name');

    $("#recipe_category_id").val(idCategory);
    $("#category_name").val(name);
  });

  @if($errors->has('category_name'))
  $('.modal-form-update').modal('show');
  @endif
</script>
@endsection
