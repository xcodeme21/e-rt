<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Penduduk extends Model
{
  protected $fillable = [
      'nik', 'nama', 'no_kk', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir',
      'agama', 'pendidikan', 'pekerjaan', 'status_kawin', 'hubungan', 'gol_darah',
      'kewarganegaraan', 'alamat_sblm', 'alamat_skrg', 'akta_nikah',
      'tanggal_nikah', 'akta_cerai', 'tanggal_cerai', 'cacat', 'cara_kb', 'status'
  ];

  protected $dates = [
     'tanggal_lahir', 'tanggal_nikah', 'tanggal_cerai'
  ];

  public function setTanggalLahirAttribute($value) {
      $dt = Carbon::parse($value)->format('Y-m-d');
      $this->attributes['tanggal_lahir'] = $dt;
  }

  public function getTanggalLahirAttribute($value) {
      return Carbon::parse($value)->format('Y-m-d');
  }

  public function setTanggalNikahAttribute($value) {
    if ($value != ''){
      $dt = Carbon::parse($value)->format('Y-m-d');
      $this->attributes['tanggal_nikah'] = $dt;
    }
  }

  public function getTanggalNikahAttribute($value) {
      return Carbon::parse($value)->format('Y-m-d');
  }

  public function setTanggalCeraiAttribute($value) {
      if ($value != ''){
        $dt = Carbon::parse($value)->format('Y-m-d');
        $this->attributes['tanggal_cerai'] = $dt;
      }
  }

  public function getTanggalCeraiAttribute($value) {
      return Carbon::parse($value)->format('Y-m-d');
  }

}
