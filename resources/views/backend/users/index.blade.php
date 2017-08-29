@extends('backend.layout.master')

@section('title')
<title>Users</title>
@endsection

@section('breadcrumb')
  <h1>
      Users Management <small>Users List</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Users List</li>
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
          <h4><i class="icon fa fa-check"></i> Failed!</h4>
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

  <div class="modal modal-danger fade modal-form-reset" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reset Password User</h4>
        </div>
        <div class="modal-body">
          <p>Sure?</p>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" id="setReset">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-warning fade modal-form-active" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Activated User</h4>
        </div>
        <div class="modal-body">
          <p>Sure?</p>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" id="setActive">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-danger fade modal-form-deactive" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Deactivated User</h4>
        </div>
        <div class="modal-body">
          <p>Sure?</p>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" id="setDeactive">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-form-create" role="dialog">
    <div class="modal-dialog">
      <form class="form-horizontal" action="{{ route('user.add') }}" method="post">
        {!! csrf_field() !!}
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Create New User</h4>
          </div>
          <div class="modal-body">
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
          <div class="modal-footer">
            <button type="reset" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
    </form>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">Users List</h3>
          <a class="btn btn-flat bg-red pull-right update" data-toggle="modal" data-target=".modal-form-create">New User</a>
        </div>
        <div class="box-body">
          <table id="userTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                $i = 1;
              @endphp
              @foreach ($getUsers as $key)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $key->name }}</td>
                <td style="text-align:center;">
                  <img src="{{ asset('backend/images/profile/').'/'.$key->avatar }}" class="img-circle" alt="User Image" width="50%">
                </td>
                <td>{{ $key->email }}</td>
                <td>@if ($key->active == "Y")
                    <span data-toggle="tooltip" title="Deactive">
                      <a data-toggle="modal" data-target=".modal-form-deactive" data-value="{{ $key->id }}" class="btn btn-success btn-flat btn-xs status"><i class="fa fa-check"></i> Active</a>
                    </span>
                    @else
                    <span data-toggle="tooltip" title="Active">
                      <a data-toggle="modal" data-target=".modal-form-active" data-value="{{ $key->id }}" class="btn btn-danger btn-flat btn-xs status"><i class="fa fa-times"></i> Deactive</a>
                    </span>
                    @endif
                </td>
                <td>
                  <span data-toggle="tooltip" title="Reset">
                    <a data-toggle="modal" data-target=".modal-form-reset" data-value="{{ $key->id }}" class="btn btn-danger btn-flat btn-xs reset"><i class="fa fa-recycle"></i></a>
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
<script>
  $(function () {
    $("#userTable").DataTable();
  });

  $(function(){
    $('#userTable').on('click', 'a.reset', function(){
      var a = $(this).data('value');
      $('#setReset').attr('href', "{{ url('/') }}/admin/users/reset/"+a);
    });
  });

  $(function(){
    $('#userTable').on('click', 'a.status', function(){
      var a = $(this).data('value');
      $('#setActive').attr('href', "{{ url('/') }}/admin/users/status/"+a);
      $('#setDeactive').attr('href', "{{ url('/') }}/admin/users/status/"+a);
    });
  });

  @if($errors->has('email'))
  $('.modal-form-create').modal('show');
  @endif
</script>
@endsection
