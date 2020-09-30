<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $fillable = ['id_dokter','nama_dokter', 'alamat', 'kota_tinggal', 'no_telp','spesialis'];
    public $timestamps = false;
    protected $primaryKey = 'id_dokter';
}
