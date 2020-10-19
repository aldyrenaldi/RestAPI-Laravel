<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepobatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resepobat', function (Blueprint $table) {
            $table->bigIncrements('id_resep');
            $table->unsignedBigInteger('id_rekammedis')->unsigned();
            $table->unsignedBigInteger('id_obat')->unsigned();
            $table->integer('jumlah');

            $table->foreign('id_rekammedis')->references('id_rekammedis')->on('rekammedis');
            $table->foreign('id_obat')->references('id_obat')->on('obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resepobat');
    }
}
