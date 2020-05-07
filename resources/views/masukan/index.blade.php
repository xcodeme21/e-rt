@extends('base.basetemplate')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Masukan dari Penduduk
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Masukan</li>
    </ol>

    <br>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar Masukan Terbaru</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>No. HP</th>
                <th>Perihal</th>
                <th>Isi Masukan</th>
                <th>Tanggal</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=0; ?>
                @foreach($masukan as $ms)
                <?php $no++; ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $ms->nama }}</td>
                        <td>{{ $ms->no_hp }}</td>
                        <td>{{ $ms->perihal }}</td>
                        <td>{{ $ms->isi }}</td>
                        <td>{{ $ms->tanggal }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>No. HP</th>
                <th>Perihal</th>
                <th>Isi Masukan</th>
                <th>Tanggal</th>
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
