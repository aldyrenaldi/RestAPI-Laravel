<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekammedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekammedis', function (Blueprint $table) {
            $table->bigIncrements('id_rekammedis');
            $table->unsignedBigInteger('id_pasien')->unsigned();
            $table->unsignedBigInteger('id_dokter')->unsigned();
            $table->unsignedBigInteger('id_petugas')->unsigned();
            $table->date('tgl_periksa');
            $table->string('diagnosa');
            $table->string('keterangan', 50);
            $table->integer('biaya_jasa');

            $table->foreign('id_pasien')->references('id_pasien')->on('pasien');
            $table->foreign('id_dokter')->references('id_dokter')->on('dokter');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekammedis');
    }
}
