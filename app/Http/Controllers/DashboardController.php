<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keluarga;
use App\Penduduk;
use DB;

class DashboardController extends Controller
{
    public function statistik($value='')
    {
      $jmlkk=Keluarga::count();
      $jmlpenduduk=Penduduk::count();
      $jmlaccess=DB::table('access')->whereMonth('tanggal',date('m'))->count(); 

      return view('dashboard.statistik',compact('jmlkk','jmlpenduduk','jmlaccess'));
    }

    public function laporan($value='')
    {
      return view('dashboard.laporan');
    }
}
