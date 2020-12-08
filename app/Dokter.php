<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokter extends Model
{
    use SoftDeletes;
    protected $table = 'dokter';
    protected $fillable = ['id_dokter','nama_dokter', 'alamat', 'kota_tinggal', 'no_telp','spesialis','status_dokter'];
     public $timestamps = false;
    protected $primaryKey = 'id_dokter';

    public function rekammedis(){
    	return $this->hasMany(RekamMedis::class , 'id_dokter');
    }
}
