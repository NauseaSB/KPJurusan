<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->string('khs1')->nullable();
            $table->string('khs2')->nullable();
            $table->string('f_demo_aplikasi')->nullable();
            $table->string('f_surat_kelayakan')->nullable();
            $table->string('f_bimbingan_akademik')->nullable();
            $table->string('draft_laporan_kp')->nullable();
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
        Schema::dropIfExists('seminars');
    }
}
