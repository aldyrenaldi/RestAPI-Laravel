<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResepObat extends Model
{
    protected $table = 'resepobat';
    protected $fillable = ['id_resep', 'id_rekammedis', 'id_obat', 'jumlah' ];
    public $timestamps = false;
    protected $primaryKey = 'id_resep';
}
