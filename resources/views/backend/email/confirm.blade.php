<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p>
      Hai, {{ $data[0]['name'] }}.
    </p>

    <p>
      You have been registered as CMS juiceunited.com Admin
      <br>Please click the following link to activate your account :<br><br>
      Password : Ju1c3Un1t3D <br><br>
      <a href="{{ URL::to('admin/verify/' . $data[0]['confirmation_code']) }}">
        {{ URL::to('admin/verify/' . $data[0]['confirmation_code']) }}
      </a>
    </p>

  </body>
</html>
