<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rt extends Model
{
    protected $fillable = [
      'nama', 'kades_id', 'alamat_kantor', 'kode_pos', 'kecamatan', 'nama_camat', 'nip_camat', 'kabupaten', 'provinsi'
    ];
}
