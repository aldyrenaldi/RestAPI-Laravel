<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDeletedAtInDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokter', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('obat', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('pasien', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('petugas', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
         Schema::table('rekammedis', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('resepobat', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokter', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('obat', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('pasien', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('petugas', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('rekammedis', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('resepobat', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
