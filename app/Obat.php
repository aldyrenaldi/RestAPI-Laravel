<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Obat extends Model
{
    use SoftDeletes;
    protected $table = 'obat';
    protected $fillable = ['id_obat','kategori_obat','nama_obat','bentuk_obat','tgl_kadaluarsa','harga_obat'];
    public $timestamps = false;
    protected $primaryKey = 'id_obat';

    public function resepobat(){
    	return $this->hasMany(ResepObat::class , 'id_obat');
    }
}
