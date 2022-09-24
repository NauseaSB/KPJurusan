<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kp');
            $table->string('tempat_kp_lapangan');
            $table->string('divisi');
            $table->string('alamat');
            $table->string('telp_tempat_kp');
            $table->string('nama_pembimbing_lapangan');
            $table->string('nama_penanggung_jawab_lapangan');
            $table->string('status_judul');
            $table->string('jenis_kp');
            $table->string('ajuan_pembimbing1');
            $table->string('ajuan_pembimbing2');
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
        Schema::dropIfExists('materis');
    }
}
