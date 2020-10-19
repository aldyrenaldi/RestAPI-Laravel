<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $fillable = ['id_obat','kategori_obat','nama_obat','bentuk_obat','tgl_kadaluarsa','harga_obat'];
    public $timestamps = false;
    protected $primaryKey = 'id_obat';
}
