<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\rt;

class rtController extends Controller
{
    public function index()
    {
      $rt = new rt;
      $rt->nama = '';
      $rt->alamat_kantor = '';
      $rt->kades_id = '';
      $rt->kode_pos = '';
      $rt->nama_camat = '';
      $rt->nip_camat = '';
      $rt->kabupaten = '';
      $rt->provinsi = '';

      $rts = DB::table('rts AS a')
                ->leftJoin('penduduks AS b', 'b.id', '=', 'a.kades_id')
                ->select('a.*', 'b.nama as kades')
                ->get();

      if ($rts->first()){
        $rt = $rts->first();
      }

      //dd($rt);

      return view('rt.index_rt', compact('rt'));
    }

    public function storeorupdate(Request $request)
    {
      $rts = rt::all();

      //update
      if ($rts->first()){
          $rt = $rts->first();

          $rt->update($request->all());

      } else { //add new
        rt::create($request->all());
      }

      return redirect('/rt/identitas');
    }
}
