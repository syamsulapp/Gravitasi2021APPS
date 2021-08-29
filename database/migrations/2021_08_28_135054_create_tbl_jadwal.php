<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jadwal_lomba', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lomba',128);
            $table->string('tanggal',128);
            $table->string('waktu',128);
            $table->string('deskripsi_jadwal_lomba',128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_jadwal_lomba');
    }
}
