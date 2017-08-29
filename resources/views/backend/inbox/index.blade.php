@extends('backend.layout.master')

@section('title')
<title>Inbox</title>
@endsection

@section('breadcrumb')
  <h1>
      Inbox
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Inbox</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">Inbox</h3>
        </div>
        <div class="box-body">
          <table id="inbox" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date Time</th>
              </tr>
            </thead>
            <tbody>
              @php
                $i = 1;
              @endphp
              @foreach ($getInbox as $key)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $key->name }}</td>
                <td>{{ $key->email }}</td>
                <td>{{ $key->messages }}</td>
                <td>{{ $key->created_at }}</td>
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
    $("#inbox").DataTable();
  });
</script>
@endsection
