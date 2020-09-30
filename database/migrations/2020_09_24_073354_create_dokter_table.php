<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->bigIncrements('id_dokter');
            $table->string('nama_dokter', 100);
            $table->string('alamat', 50);
            $table->string('kota_tinggal', 50);
            $table->string('no_telp', 15);
            $table->string('spesialis', 15);
        });
    }

    /**
     * Reverse the migrationcds.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}
