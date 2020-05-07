<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>e-RT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="{{ asset('frontend/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet"> -->
  <link href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:iman@gmail.com">iman@gmail.com</a>
        <i class="fa fa-phone"></i> 081292532673
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">e-<span>RT</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="{{ asset('frontend/img/logo.png') }}" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Cari Warga</a></li>
          <li><a href="#portfolio">Laporan Keuangan</a></li>
          <li><a href="#testimonials">Masukan</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Selamat datang di <span>RT. 004</span></h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Tentang</a>
        <a href="#services" class="btn-projects scrollto">Cari Warga</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ asset('frontend/img/about-img.jpg') }}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Tentang Aplikasi e-RT</h2>

            <ul>
              Aplikasi e-RT adalah aplikasi yang dibuat untuk RT.004, Kelurahan Karangsari untuk media mencari data warga RT.004. Diharapkan aplikasi ini dapat menunjang kinerja RT agar dapat melaksanakan pekerjaan dengan mudah.
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Cari Warga</h2>
        </div>

        
        <div class="form">
          <div id="errormessage"></div>
            <form role="form"  method="post" action="/cari-warga">
              {{ csrf_field() }}
              
              <div class="form-row">
                <div class="form-group col-md-12">
                  <select name="jenis_nomor" class="form-control" required>
                    <option value="">-- Silahkan Pilih --</option>
                    <option value="nik" @if(@$jenis_nomor == "nik") selected @endif>Berdasarkan NIK</option>
                    <option value="nokk" @if(@$jenis_nomor == "nokk") selected @endif>Berdasarkan Nomor KK</option>
                  </select>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <input type="number" class="form-control" name="nomor" id="nomor" placeholder="Masukkan nomor" value="{{ @$nomor }}" data-rule="nomor" data-msg="Masukan nomor" required />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Cari</button>
                <a href="{{ url('/#services') }}" class="btn btn-info"><i class="fa fa-spin fa-spinner"></i> Reset</a>
              </div>
            </form>
          </div>
        </div>
        
        @if(@$result != null)
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('penduduk/'. @$result->foto_penduduk) }}" class="user-image" alt="User Image" width="100%">
            </div>
            <div class="col-md-8">
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                      <tr>
                        <td><b>Nama</b></td>
                        <td>{{ @$result->nama }}</td>
                      </tr>
                      <tr>
                        <td><b>NIK</b></td>
                        <td>{{ @$result->nik }}</td>
                      </tr>
                      <tr>
                        <td><b>Nomor Kartu Keluarga</b></td>
                        <td>{{ @$result->no_kk }}</td>
                      </tr>
                      <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>{{ @$result->jenis_kelamin }}</td>
                      </tr>
                      <tr>
                        <td><b>Tempat, Tanggal Lahir</b></td>
                        <td>{{ @$result->tempat_lahir .", " . @$result->tanggal_lahir }}</td>
                      </tr>
                      <tr>
                        <td><b>Agama</b></td>
                        <td>{{ @$result->agama }}</td>
                      </tr>
                      <tr>
                        <td><b>Pendidikan</b></td>
                        <td>{{ @$result->pendidikan }}</td>
                      </tr>
                      <tr>
                        <td><b>Pekerjaan</b></td>
                        <td>{{ @$result->pekerjaan }}</td>
                      </tr>
                      <tr>
                        <td><b>Status Nikah</b></td>
                        <td>{{ @$result->status_kawin }}</td>
                      </tr>
                      <tr>
                        <td><b>Hubungan dalam Keluarga</b></td>
                        <td>{{ @$result->hubungan }}</td>
                      </tr>
                      <tr>
                        <td><b>Golongan Darah</b></td>
                        <td>{{ @$result->gol_darah }}</td>
                      </tr>
                      <tr>
                        <td><b>Kewarganegaraan</b></td>
                        <td>{{ @$result->kewarganegaraan }}</td>
                      </tr>
                      <tr>
                        <td><b>Alamat Sebelum</b></td>
                        <td>{{ @$result->alamat_sblm }}</td>
                      </tr>
                      <tr>
                        <td><b>Alamat Sekarang</b></td>
                        <td>{{ @$result->alamat_skrg }}</td>
                      </tr>
                      <tr>
                        <td><b>Akta Nikah</b></td>
                        <td>{{ @$result->akta_nikah }}</td>
                      </tr>
                      <tr>
                        <td><b>Tanggal Nikah</b></td>
                        <td>{{ @$result->tanggal_nikah }}</td>
                      </tr>
                      <tr>
                        <td><b>Akta Cerai</b></td>
                        <td>{{ @$result->akta_cerai }}</td>
                      </tr>
                      <tr>
                        <td><b>Tanggal Cerai</b></td>
                        <td>{{ @$result->tanggal_cerai }}</td>
                      </tr>
                      <tr>
                        <td><b>Disabilitas</b></td>
                        <td>{{ @$result->cacat }}</td>
                      </tr>
                      <tr>
                        <td><b>Cara KB</b></td>
                        <td>{{ @$result->cara_kb }}</td>
                      </tr>
                      <tr>
                        <td><b>Status</b></td>
                        <td>{{ @$result->status }}</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>

        @endif
        
        @if(@$keluarga != null)
        <br>
        <br>
        <div class="container">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail KK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="row">
                  <div class="col-md-2">
                    <p><b>Nomor KK</b></p>
                  </div>
                  <div class="col-md-10">
                    <p>{{ $keluarga->kk_no }}</p>
                  </div>
                  <div class="col-md-2">
                    <p><b>Kepala Keluarga</b></p>
                  </div>
                  <div class="col-md-10">
                    <p>{{ $keluarga->kepala_keluarga }}</p>
                  </div>
                  <div class="col-md-2">
                    <p><b>Alamat</b></p>
                  </div>
                  <div class="col-md-10">
                    <p>{{ $keluarga->kk_alamat }}</p>
                  </div>
              </div>

              <div class="container">
                <br><br>
                  <h3>Anggota Keluarga</h3><br><br>
                <div class="row">
                  @foreach($anggotas as $anggota)
                    <div class="col-md-4">
                      <div class="box box-widget widget-user-2">
                        <div class="widget-user-header bg-yellow">
                          <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset('penduduk/'.$anggota->foto_penduduk) }}" alt="User Avatar">
                          </div>
                          <br>
                          <h5 class="widget-user-username" style="font-size:17px;">{{ $anggota->nama }}</h5>
                          <h5 class="widget-user-desc">{{ $anggota->nama_hubungan }}</h5>
                        </div>
                        <div class="box-footer no-padding">
                          <ul class="nav nav-stacked">
                            <li><a href="#">NIK : {{ $anggota->nik }}</span></a></li>
                            <li><a href="#">Lahir : {{ $anggota->tanggal_lahir }}</span></a></li>
                            <li><a href="#">Umur : {{ $anggota->tanggal_lahir }}</span></a></li>
                            <li><a href="#">Pekerjaan : {{ $anggota->nama_pekerjaan }}</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif

          
      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Laporan Keuangan</h2>
          <p></p>
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Masukan</h2>
          <p>Fitur ini digunakan oleh penduduk untuk memberi masukan kepada Ketua RT.</p>
        </div>
        <div class="container">
        <div class="form">
          <div id="errormessage"></div>
          <form role="form"  method="post" action="/input-masukan">
              {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" data-rule="minlen:4" data-msg="Masukan nama Anda" required />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="No. HP" data-rule="no_hp" data-msg="Masukan nomor hp" required />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" data-rule="minlen:4" data-msg="Masukan perihal" required />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="isi" rows="5" data-rule="required" data-msg="Masukan isi" placeholder="Isi Masukan" required></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Kirim Masukan</button></div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->

    <!--==========================
      Our Team Section
    ============================-->
    

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>HUBUNGI KAMI</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Jalan Karangsari RT.003/RW.005 Kendal</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>No. HP</h3>
              <p><a href="tel:081292532673">081292532673</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:iman@gmail.com">iman@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

     
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>xcodeme21</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="{{ asset('frontend/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('frontend/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/sticky/sticky.js') }}"></script>
  <script src="{{ asset('frontend/contactform/contactform.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>
