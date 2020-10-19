<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = ['id_pasien','nama_pasien','tgl_lahir', 'tempat_lahir','jk_pasien', 'alamat_pasien', 'kota_pasien', 'notelp_pasien','pekerjaan' ];
    public $timestamps = false;
    protected $primaryKey = 'id_pasien';
}
