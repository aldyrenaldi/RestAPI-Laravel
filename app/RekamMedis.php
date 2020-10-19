<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekammedis';
    protected $fillable = ['id_rekammedis','id_pasien', 'id_dokter', 'id_petugas', 'tgl_periksa', 'diagnosa', 'keterangan', 'biaya_jasa'];
    public $timestamps = false;
    protected $primaryKey = 'id_rekammedis';
}
