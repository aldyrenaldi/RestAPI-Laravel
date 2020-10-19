<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = ['id_petugas','nama_petugas','alamat_petugas', 'kota_petugas', 'notelp_petugas', 'status_petugas'];
    public $timestamps = false;
    protected $primaryKey = 'id_petugas';
}
