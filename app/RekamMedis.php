<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RekamMedis extends Model
{
    use SoftDeletes;
    protected $table = 'rekammedis';
     protected $fillable = ['id_rekammedis','id_pasien', 'id_dokter', 'id_petugas', 'tgl_periksa', 'diagnosa', 'keterangan', 'biaya_jasa'];
    public $timestamps = false;
    protected $primaryKey = 'id_rekammedis';

    public function pasien(){
    	return $this->belongsTo(Pasien::class, 'id_pasien' );
    }
    public function dokter(){
    	return $this->belongsTo(Dokter::class, 'id_dokter' );
    }
    public function petugas(){
    	return $this->belongsTo(Petugas::class, 'id_petugas' );
    }
    public function resepobat(){
    	return $this->hasMany(ResepObat::class , 'id_resep');
    }
}
