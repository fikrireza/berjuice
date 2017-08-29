@extends('backend.layout.master')

@section('headscript')
  <style>
    .nav-tabs-custom > .nav-tabs > li.active {
      border-top-color: #dd4b39;
    }
  </style>
@endsection


@section('content')
  <div class="row">
    @if(Session::has('firstLogin'))
    <script>
      window.setTimeout(function() {
        $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
      }, 5000);
    </script>
    <div class="col-md-12">
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Welcome!</h4>
          <p>{{ Session::get('firstLogin') }}</p>
        </div>
    </div>
    @endif

    @if(Session::has('berhasil'))
    <script>
      window.setTimeout(function() {
        $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
      }, 2000);
    </script>
    <div class="col-md-12">
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Succeed!</h4>
          <p>{{ Session::get('berhasil') }}</p>
        </div>
    </div>
    @endif

    @if(Session::has('erroroldpass'))
    <script>
      window.setTimeout(function() {
        $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
      }, 3000);
    </script>
    <div class="col-md-12">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Failed!</h4>
          <p>{{ Session::get('erroroldpass') }}</p>
        </div>
    </div>
    @endif

    <div class="col-md-3">
      <div class="box box-danger">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{ asset('backend/images/profile/').'/'.$getUser->avatar }}" alt="User profile picture">
          {{-- <p class="text-muted text-center">
            @if(Auth::user()->level == "1")
              {{ "Administrator" }}
            @elseif(Auth::user()->level == "2")
              {{ "Manager" }}
            @elseif(Auth::user()->level == "3")
              {{ "Reservation" }}
            @elseif(Auth::user()->level == "4")
              {{ "Reservation Admin" }}
            @elseif(Auth::user()->level == "5")
              {{ "Kitchen" }}
          @endif
          </p> --}}

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Login Times</b> <span class="pull-right badge bg-maroon">
                {{ $getUser->login_count}}
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>

      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#settings" data-toggle="tab">Change Profile</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="settings">
              <form class="form-horizontal" action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" placeholder="Name" value="{{ $getUser->name }}">
                    <input name="id" type="hidden" value="{{ $getUser->id }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input readonly name="email" type="email" class="form-control" placeholder="Email" value="{{ $getUser->email }}">
                  </div>
                </div>
                <div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
                  <label class="col-sm-2 control-label">Avatar</label>
                  <div class="col-sm-10">
                    <input name="avatar" type="file" class="form-control" accept=".png, .jpg" value="{{ $getUser->avatar }}">
                    @if($errors->has('avatar'))
                      <span class="help-block">
                        <strong>{{ $errors->first('avatar') }}
                        </strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-flat">Update Profile</button>
                  </div>
                </div>
              </form>

              <hr>

              <form class="form-horizontal" action="{{ route('user.changePassword') }}" method="post">
                {{ csrf_field() }}
                <input name="id" type="hidden" class="form-control" value="{{ $getUser->id }}">
                <div class="form-group {{ $errors->has('oldpass') ? 'has-error' : '' }} {{ Session::has('erroroldpass') ? 'has-error' : ''  }}">
                  <label class="col-sm-2 control-label">Old Password</label>
                  <div class="col-sm-10">
                    <input name="oldpass" type="password" class="form-control" placeholder="Old Password" value="{{ old('oldpass') }}">
                    @if($errors->has('oldpass'))
                      <span class="help-block">
                        <strong>{{ $errors->first('oldpass') }}
                        </strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('newpass') ? 'has-error' : '' }} ">
                  <label class="col-sm-2 control-label">New Password</label>
                  <div class="col-sm-10">
                    <input name="newpass" type="password" class="form-control" placeholder="New Password" value="{{ old('newpass') }}">
                    @if($errors->has('newpass'))
                      <span class="help-block">
                        <strong>{{ $errors->first('newpass') }}
                        </strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('newpass_confirmation') ? 'has-error' : '' }}">
                  <label class="col-sm-2 control-label">Confirm New Password</label>
                  <div class="col-sm-10">
                    <input name="newpass_confirmation" type="password" class="form-control" placeholder="Confirm New Password" value="{{ old('newpass_confirmation') }}">
                    @if($errors->has('newpass_confirmation'))
                      <span class="help-block">
                        <strong>{{ $errors->first('newpass_confirmation') }}
                        </strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-flat">Change Password</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection


@section('script')


@endsection
