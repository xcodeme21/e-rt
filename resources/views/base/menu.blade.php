<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/img/user.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Sentinel::getUser()->first_name . " " . Sentinel::getUser()->last_name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> {{ Sentinel::getUser()->roles()->first()->name }}</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }} treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'statistik' ? 'active' : null }}"><a href="/dashboard/statistik"><i class="fa fa-circle-o"></i>Statistik Kependudukan</a></li>
          <li class="{{ Request::segment(2) === 'laporan' ? 'active' : null }}"><a href="/dashboard/laporan"><i class="fa fa-circle-o"></i>Laporan Bulanan</a></li>
        </ul>
      </li>
      <li class="{{ Request::segment(1) === 'penduduk' ? 'active' : null }} treeview">
        <a href="#">
          <i class="fa fa-address-book-o"></i>
          <span>Kependudukan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'keluarga' ? 'active' : null }}"><a href="/penduduk/keluarga"><i class="fa fa-circle-o"></i> Keluarga</a></li>
          <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="/penduduk/list"><i class="fa fa-circle-o"></i> Penduduk</a></li>
        </ul>
      </li>
      <li class="{{ Request::segment(1) === 'pengguna' ? 'active' : null }}"><a href="/pengguna"><i class="fa fa-users"></i> <span>Pengguna</span></a></li>
      <li class="treeview {{ Request::segment(1) === 'master' ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-sliders"></i>
          <span>Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'agama' ? 'active' : null }}"><a href="/master/agama"><i class="fa fa-circle-o"></i> Agama</a></li>
          <li class="{{ Request::segment(2) === 'disabilitas' ? 'active' : null }}"><a href="/master/disabilitas"><i class="fa fa-circle-o"></i> Disabilitas</a></li>
          <li class="{{ Request::segment(2) === 'carakb' ? 'active' : null }}"><a href="/master/carakb"><i class="fa fa-circle-o"></i> Cara KB</a></li>
          <li class="{{ Request::segment(2) === 'hubungan' ? 'active' : null }}"><a href="/master/hubungan"><i class="fa fa-circle-o"></i> Hubungan Dl Keluarga</a></li>
          <li class="{{ Request::segment(2) === 'kawin' ? 'active' : null }}"><a href="/master/kawin"><i class="fa fa-circle-o"></i> Status Kawin</a></li>
          <li class="{{ Request::segment(2) === 'pekerjaan' ? 'active' : null }}"><a href="/master/pekerjaan"><i class="fa fa-circle-o"></i> Pekerjaan</a></li>
          <li class="{{ Request::segment(2) === 'pendidikan' ? 'active' : null }}"><a href="/master/pendidikan"><i class="fa fa-circle-o"></i> Pendidikan</a></li>
          <li class="{{ Request::segment(2) === 'status' ? 'active' : null }}"><a href="/master/status"><i class="fa fa-circle-o"></i> Status</a></li>
        </ul>
      </li>
      <li class="{{ Request::segment(1) === 'masukan' ? 'active' : null }}"><a href="/masukan"><i class="fa fa-eye"></i> <span>Masukan</span></a></li>
      <li class="header">Extra</li>
      <!-- <li class="{{ Request::segment(1) === 'pengaturan' ? 'active' : null }}"><a href="/pengaturan"><i class="fa fa-circle-o text-red"></i> <span>Pengaturan</span></a></li> -->
      <li class="{{ Request::segment(1) === 'tentang' ? 'active' : null }}"><a href="/tentang"><i class="fa fa-circle-o text-red"></i> <span>Tentang e-RT</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
