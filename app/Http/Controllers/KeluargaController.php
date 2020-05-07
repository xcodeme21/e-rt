<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Keluarga;
use App\Penduduk;

class KeluargaController extends Controller
{
  public function index($value='')
  {
    $keluargas = Keluarga::all();
    return view('keluarga.index_keluarga', compact('keluargas'));
  }

  public function create()
  {
    return view('keluarga.create_keluarga');
  }

  public function store(Request $request)
  {
    Keluarga::create($request->all());

    return redirect('/penduduk/keluarga');
  }

  public function edit($id)
  {
    $keluarga = DB::table('keluargas AS a')
              ->leftJoin('penduduks AS b', 'b.nik', '=', 'a.kk_nik_kepala')
              ->select('a.*', 'b.nama as kepala_keluarga')
              ->where('a.id', '=', $id)
              ->get()->first();
    //dd($keluarga);
    return view('keluarga.edit_keluarga', compact('keluarga'));
  }

  public function update(Request $request, $id)
  {
    $keluarga = Keluarga::findOrFail($id);
    $keluarga->update($request->all());

    return redirect('/penduduk/keluarga');
  }

  public function detail($id)
  {
    $keluarga = DB::table('keluargas AS a')
              ->leftJoin('penduduks AS b', 'b.nik', '=', 'a.kk_nik_kepala')
              ->select('a.*', 'b.nama as kepala_keluarga', 'b.*')
              ->where('a.id', '=', $id)
              ->get()->first();

    $anggotas = Penduduk::where('no_kk', $keluarga->kk_no)
              ->leftJoin('hubungans', 'penduduks.hubungan', '=', 'hubungans.id')
              ->leftJoin('pekerjaans', 'penduduks.pekerjaan', '=', 'pekerjaans.id')
              ->select('penduduks.*','hubungans.nama as nama_hubungan','pekerjaans.nama as nama_pekerjaan')
              ->get();

    //dd($anggotas);
    //dd($keluarga);
    return view('keluarga.lihat_keluarga', compact('keluarga', 'anggotas'));
  }


}
