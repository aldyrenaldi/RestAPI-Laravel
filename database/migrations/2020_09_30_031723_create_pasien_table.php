<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('id_pasien');
            $table->string('nama_pasien', 100);
            $table->date('tgl_lahir');
            $table->string('tempat_lahir', 50);
            $table->char('jk_pasien', 1);
            $table->string('alamat_pasien', 100);
            $table->string('kota_pasien', 50);
            $table->string('notelp_pasien', 15);
            $table->string('pekerjaan', 50);
            $table->string('status_pasien', 12);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
