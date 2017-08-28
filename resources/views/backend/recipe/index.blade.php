@extends('backend.layout.master')

@section('title')
<title>Recipe</title>
@endsection

@section('breadcrumb')
  <h1>
      Recipe Management <small>Recipe List</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Recipe List</li>
  </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      @if(Session::has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Succeed!</h4>
          <p>{{ Session::get('message') }}</p>
        </div>
      @endif
      @if(Session::has('success'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Succeed!</h4>
          <p>{{ Session::get('success') }}</p>
        </div>
      @endif
      <br />
    </div>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">Recipe List</h3>
          <a href="{{ route('recipe.add') }}" class="btn btn-flat bg-red pull-right">New Recipe</a>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Recipe Name</th>
                <th>Category Recipe</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($getRecipe as $key)
              <tr>
                <td>{{ $key->name }}</td>
                <td>{{ $key->category->category_name }}</td>
                <td><span data-toggle="tooltip" title="See Recipe">
                      <a href="{{ route('recipe.see', ['id' => $key->id]) }}" class="btn btn-success btn-flat btn-xs edit"><i class="fa fa-file-text-o"> See Recipe</i></a>
                    </span>
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
    $("#example1").DataTable();
  });
</script>
@endsection
