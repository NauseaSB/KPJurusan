<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('mahasiswa_id')->references('id')->on('mahasiswas')->nullable();
            $table->integer('mahasiswa_id2')->references('id')->on('mahasiswas')->nullable();
            $table->integer('materi_id')->references('id')->on('materis')->nullable();
            $table->integer('kp_id')->references('id')->on('kp1s')->nullable();
            $table->integer('kp2_id')->references('id')->on('kp2s')->nullable();
            $table->String('status_mhsw1')->nullable();
            $table->String('status_mhsw2')->nullable();
            $table->String('status_klmpk')->nullable();
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
        Schema::dropIfExists('kelompoks');
    }
}
