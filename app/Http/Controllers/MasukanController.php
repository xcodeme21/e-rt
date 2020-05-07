<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MasukanController extends Controller
{
    public function index()
    {
      $masukan = DB::table('masukan')->orderBy('id','DESC')->get();

      //dd($users);
      return view('masukan.index', compact('masukan'));
    }
}
