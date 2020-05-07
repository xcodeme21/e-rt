<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Keluarga;
use App\Penduduk;

class FrontendController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function inputmasukan(Request $request)
    {
      $nama=$request->input('nama');
      $no_hp=$request->input('no_hp');
      $perihal=$request->input('perihal');
      $isi=$request->input('isi');

      DB::table('masukan')->insert(
        [
          'nama' => $nama,
          'no_hp' => $no_hp,
          'perihal' => $perihal,
          'isi' => $isi,
          'tanggal' => date('Y-m-d'),
        ]
      );

      return redirect('/#testimonials');
    }

    public function cariwarga(Request $request)
    {
      $jenis_nomor=$request->input('jenis_nomor'); 
      $nomor=$request->input('nomor');

      $insert=DB::table('access')->insert(
        [
          'tanggal' => date('Y-m-d')
        ]
      );

      if($jenis_nomor == "nik")
      {
        $result=DB::table('penduduks AS a')
        ->leftJoin('agamas AS b', 'b.id', '=', 'a.agama')
        ->leftJoin('pendidikans AS c', 'c.id', '=', 'a.pendidikan')
        ->leftJoin('pekerjaans AS d', 'd.id', '=', 'a.pekerjaan')
        ->leftJoin('kawins AS e', 'e.id', '=', 'a.status_kawin')
        ->leftJoin('hubungans AS f', 'f.id', '=', 'a.hubungan')
        ->leftJoin('cacats AS g', 'g.id', '=', 'a.cacat')
        ->leftJoin('cara_kbs AS h', 'h.id', '=', 'a.cara_kb')
        ->leftJoin('statuses AS i', 'i.id', '=', 'a.status')
        ->select('a.*', 'b.nama AS agama', 'c.nama as pendidikan', 'd.nama as pekerjaan',
        'e.nama as status_kawin', 'f.nama as hubungan', 'g.cacat_nama as cacat', 'h.nama as cara_kb', 'i.nama as status')
        ->where('nik',$nomor)
        ->get()->first();

        $data=array(
          'jenis_nomor' => $jenis_nomor,
          'nomor' => $nomor,
          'result' => $result
        );

        return view('index')->with($data);
      }

      if($jenis_nomor == "nokk")
      {
        $keluarga = DB::table('keluargas AS a')
              ->leftJoin('penduduks AS b', 'b.nik', '=', 'a.kk_nik_kepala')
              ->select('a.*', 'b.nama as kepala_keluarga', 'b.*')
              ->where('a.kk_no', '=', $nomor)
              ->get()->first();

        $anggotas = Penduduk::where('no_kk', $nomor)
              ->leftJoin('hubungans', 'penduduks.hubungan', '=', 'hubungans.id')
              ->leftJoin('pekerjaans', 'penduduks.pekerjaan', '=', 'pekerjaans.id')
              ->select('penduduks.*','hubungans.nama as nama_hubungan','pekerjaans.nama as nama_pekerjaan')
              ->get();

        $data=array(
          'jenis_nomor' => $jenis_nomor,
          'nomor' => $nomor,
          'keluarga' => $keluarga,
          'anggotas' => $anggotas
        );

        return view('index')->with($data);
      }
    }
}
