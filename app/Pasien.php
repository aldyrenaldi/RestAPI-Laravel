<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use SoftDeletes;
    protected $table = 'pasien';
    protected $fillable = ['id_pasien','nama_pasien','tgl_lahir', 'tempat_lahir','jk_pasien', 'alamat_pasien', 'kota_pasien', 'notelp_pasien','pekerjaan' ];
    public $timestamps = false;
    protected $primaryKey = 'id_pasien';

    public function rekammedis(){
    	return $this->hasMany(RekamMedis::class , 'id_pasien');
    }
}
