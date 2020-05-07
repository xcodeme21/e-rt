@extends('base.basetemplate')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Informasi Pengguna
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pengguna</li>
    </ol>

    <br>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar Pengguna Sistem</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role / Peran</th>
                <th>Tanggal Daftar</th>
                <th>Terakhir Masuk/Login</th>
              </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name . " " . $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ Carbon\Carbon::parse($user->created_at)->toDayDateTimeString() }}</td>
                        <td>{{ Carbon\Carbon::parse($user->last_login)->toDayDateTimeString() }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role / Peran</th>
                <th>Tanggal Daftar</th>
                <th>Terakhir Masuk/Login</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('content-css')
<!-- DataTables -->
<link rel="stylesheet" href="/assets/plugins/datatables/media/css/dataTables.bootstrap.css">
@endsection

@section('content-js')
<!-- page script -->

<!-- DataTables -->
<script src="/assets/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/media/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection
