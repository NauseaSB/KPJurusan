<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->integer('angkatan');
            $table->string('nama');
            $table->bigInteger('telp');
            $table->string('doswal');
            $table->string('peminatan');
            $table->double('ipk');
            $table->integer('t_sks');
            $table->string('semester');
            $table->string('t_akd');
            $table->string('ket_mahasiswa');
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
        Schema::dropIfExists('mahasiswas');
    }
}
