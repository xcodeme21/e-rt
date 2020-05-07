@extends('base.basetemplate')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{ @$jmlkk }}</h3>

            <p>Jumlah KK</p>
          </div>
          <div class="icon">
            <i class="fa fa-file"></i>
          </div>
          <a href="{{ url('/penduduk/keluarga') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{ @$jmlpenduduk }}<!--<sup style="font-size: 20px">%</sup>--></h3>

            <p>Jumlah Penduduk</p>
          </div>
          <div class="icon">
            <i class="fa fa-list"></i>
          </div>
          <a href="{{ url('/penduduk/list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{ @$jmlaccess }}</h3>

            <p>Pencarian Warga Bulan Ini</p>
          </div>
          <div class="icon">
            <i class="fa fa-search"></i>
          </div>
          <!-- <a href="{{ url('/surat/masuk') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
    </div>

  </section>
  <!-- /.content -->
</div>
@endsection

@section('content-css')



@endsection

@section('content-js')
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/assets/dist/js/pages/dashboard.js"></script>
@endsection
