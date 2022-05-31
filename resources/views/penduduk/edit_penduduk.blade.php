@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Informasi Penduduk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kependudukan</a></li>
        <li><a href="#">Penduduk</a></li>
        <li class="active">Ubah</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Penduduk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/penduduk/list/edit/{{ $penduduk->id }}" class="form-horizontal">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1" class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nik" id="exampleInputEmail1" placeholder="Masukkan NIK" value="{{ $penduduk->nik }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Nama" value="{{ $penduduk->nama }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">No. KK</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_kk" id="exampleInputPassword1" placeholder="Nomor KK" value="{{ $penduduk->no_kk }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="jenis_kelamin" style="width: 100%;">
                      <option {{ $penduduk->jenis_kelamin == 'LAKI-LAKI' ? 'selected="selected"' : "" }} value="LAKI-LAKI">Laki - Laki</option>
                      <option {{ $penduduk->jenis_kelamin == 'PEREMPUAN' ? 'selected="selected"' : "" }} value="PEREMPUAN">Perempuan</option>
                      <option {{ $penduduk->jenis_kelamin == 'TRANS' ? 'selected="selected"' : "" }} value="TRANS">Transgender</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir" id="exampleInputPassword1" placeholder="Tempat Lahir" value="{{ $penduduk->tempat_lahir }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right datepicker" name="tanggal_lahir" id="" value="{{ Carbon\Carbon::parse($penduduk->tanggal_lahir)->format('Y-m-d') }}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="agama" style="width: 100%;">
                      @foreach ($agamas as $agama)
                        <option {{ $agama->id == $penduduk->agama ? 'selected="selected"' : "" }} value="{{ $agama->id }}">{{ $agama->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="pendidikan" style="width: 100%;">
                      @foreach ($pendidikans as $pendidikan)
                        <option {{ $pendidikan->id == $penduduk->pendidikan ? 'selected="selected"' : "" }} value="{{ $pendidikan->id }}">{{ $pendidikan->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="pekerjaan" style="width: 100%;">
                      @foreach ($pekerjaans as $pekerjaan)
                        <option {{ $pekerjaan->id == $penduduk->pekerjaan ? 'selected="selected"' : "" }} value="{{ $pekerjaan->id }}">{{ $pekerjaan->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Status Kawin</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="status_kawin" style="width: 100%;">
                      @foreach ($kawins as $kawin)
                        <option {{ $kawin->id == $penduduk->status_kawin ? 'selected="selected"' : "" }} value="{{ $kawin->id }}">{{ $kawin->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Hubungan dl Keluarga</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="hubungan" style="width: 100%;">
                        @foreach ($hubungans as $hubungan)
                          <option {{ $hubungan->id == $penduduk->hubungan ? 'selected="selected"' : "" }} value="{{ $hubungan->id }}">{{ $hubungan->nama }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Golongan Darah</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="gol_darah" style="width: 100%;">
                      <option {{ $penduduk->gol_darah == '-' ? 'selected="selected"' : "" }} value="-">Tidak Diketahui</option>
                      <option {{ $penduduk->gol_darah == 'A' ? 'selected="selected"' : "" }} value="A">A</option>
                      <option {{ $penduduk->gol_darah == 'B' ? 'selected="selected"' : "" }} value="B">B</option>
                      <option {{ $penduduk->gol_darah == 'AB' ? 'selected="selected"' : "" }} value="AB">AB</option>
                      <option {{ $penduduk->gol_darah == 'O' ? 'selected="selected"' : "" }} value="O">O</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Kewarganegaraan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="kewarganegaraan" style="width: 100%;">
                      <option {{ $penduduk->kewarganegaraan == 1 ? 'selected="selected"' : "" }} value="1">WNI</option>
                      <option {{ $penduduk->kewarganegaraan == 2 ? 'selected="selected"' : "" }} value="2">WNA</option>
                      <option {{ $penduduk->kewarganegaraan == 3 ? 'selected="selected"' : "" }} value="3">Dua Kewarganegaraan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Alamat Sebelumnya</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_sblm" id="exampleInputPassword1" placeholder="Alamat Sebelumnya (jika pindahan)" value="{{ $penduduk->alamat_sblm }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Alamat Sekarang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_skrg" id="exampleInputPassword1" placeholder="Alamat Sekarang" value="{{ $penduduk->alamat_skrg }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Akta Nikah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="akta_nikah" id="exampleInputPassword1" placeholder="Akta Nikah" value="{{ $penduduk->akta_nikah }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Tanggal Nikah</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="tanggal_nikah datepicker" id="datepicker" value="{{ $penduduk->tanggal_nikah == '' ? ' ' : Carbon\Carbon::parse($penduduk->tanggal_nikah)->format('Y-m-d') }}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Akta Cerai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="akta_cerai" id="exampleInputPassword1" placeholder="Akta Cerai" value="{{ $penduduk->akta_cerai }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Tanggal Cerai</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="tanggal_cerai datepicker" id="datepicker" value="{{ $penduduk->tanggal_cerai == '' ? ' ' : Carbon\Carbon::parse($penduduk->tanggal_cerai)->format('Y-m-d') }}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Disabilitas</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="cacat" style="width: 100%;">
                      @foreach ($cacats as $cacat)
                        <option value="{{ $cacat->id }}">{{ $cacat->cacat_nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Akseptor KB</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="cara_kb" style="width: 100%;">
                      @foreach ($kbs as $kb)
                        <option value="{{ $kb->id }}">{{ $kb->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="status" style="width: 100%;">
                      @foreach ($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </section>
  <!-- /.content -->
</div>
@endsection

@section('private-css')
<!-- Select2 -->
<link rel="stylesheet" href="/assets/plugins/select2/select2.min.css">
@endsection

@section('content-js')
<!-- Select2 -->
<script src="/assets/plugins/select2/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd',
    });
  });
</script>
@endsection
