<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResepObat extends Model
{
    use SoftDeletes;
    protected $table = 'resepobat';
    protected $fillable = ['id_resep', 'id_rekammedis', 'id_obat', 'jumlah'];
    public $timestamps = false;
    protected $primaryKey = 'id_resep';

    public function rekammedis(){
    	return $this->belongsTo(RekamMedis::class, 'id_resep' );
    }
    public function obat(){
    	return $this->belongsTo(Obat::class, 'id_obat' );
    }
}
