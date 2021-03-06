<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Juice United Indonesia</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{asset('backend/bootstrap/css/custom2.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue-light hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <img src="{{asset('amadeo/image/base/logo-juice-united.png')}}" alt="Juice United" width="95px"/>
        &nbsp;&nbsp;<b>Juice United Indonesia</b>
        @if(Session::has('failedLogin'))
        <script>
          window.setTimeout(function() {
            $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
          }, 2000);
        </script>
        <br>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Failed!</h4>
          <p>{{ Session::get('failedLogin') }}</p>
        </div>
        @endif
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Please Login With Your Account.</p>
        <form action="{{ route('user.confirm') }}" method="post">
          {!! csrf_field() !!}
          <input type="hidden" name="confirmation_code" value="{{ $getUser->confirmation_code}}">
          <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $getUser->email)}}" readonly/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
            <input name="password" type="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if($errors->has('password'))
              <span class="help-block">
                <i>* {{ $errors->first('password') }}</i>
              </span>
            @endif
          </div>
          <div class="form-group {{ Session::has('error') ? 'has-error' : ''}}">
            @if(Session::has('error'))
              <span class="help-block">
                <i>* {{ Session::get('error') }}</i>
              </span>
            @endif
          </div>
          <div class="row">
            <div class="col-sm-4 pull-right">
              <button type="submit" class="btn btn-success btn-block btn-flat">Confirm</button>
            </div>
          </div>
        </form>

      </div>
    </div>

    <script src="{{asset('backend/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%'
        });
      });
    </script>
  </body>
</html>
