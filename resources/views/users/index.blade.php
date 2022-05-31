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
    <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#myModalCreate">Create User</a>
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
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role / Peran</th>
                <th>Tanggal Daftar</th>
                <th>Terakhir Masuk/Login</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name . " " . $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ Carbon\Carbon::parse($user->created_at)->toDayDateTimeString() }}</td>
                        <td>{{ Carbon\Carbon::parse($user->last_login)->toDayDateTimeString() }}</td>
                        <td><a href="{{ url('/pengguna/delete', $user->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role / Peran</th>
                <th>Tanggal Daftar</th>
                <th>Terakhir Masuk/Login</th>
                <th>Action</th>
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

<!-- /.content-wrapper --><!-- Modal create-->
<div class="modal fade" id="myModalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="{{ route('create-user') }}" method="post">
      {{ csrf_field() }}
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Input Data Baru</h4>
        </div>
        <div class="modal-body" id="form_create">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Depan</label>
              <input type="text" class="form-control" name="first_name" placeholder="Masukkan nama depan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Belakang</label>
              <input type="text" class="form-control" name="last_name" placeholder="Masukkan nama belakang">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Masukkan email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Masukkan password">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ulangi Password</label>
              <input type="password" class="form-control" name="ulangi_password" placeholder="Ulangi password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

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
