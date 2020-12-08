<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Petugas extends Model
{
    use SoftDeletes;
    protected $table = 'petugas';
    protected $fillable = ['id_petugas','nama_petugas','alamat_petugas', 'kota_petugas', 'notelp_petugas', 'status_petugas'];
    public $timestamps = false;
    protected $primaryKey = 'id_petugas';

    public function rekammedis(){
    	return $this->hasMany(RekamMedis::class , 'id_petugas');
    }
}
