<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatus1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status1s', function (Blueprint $table) {
            $table->id();
            // Mahasiswa 1
            $table->string('s_ipk1');
            $table->string('s_sks1');
            $table->string('s_jum_d1');
            $table->string('s_jum_e1');
            $table->string('s_algoritma1');
            $table->string('s_p_algoritma1');
            $table->string('s_strukdat1');
            $table->string('s_p_strukdat1');
            $table->string('s_basdat1');
            $table->string('s_p_basdat1');
            $table->string('s_rpl1');
            $table->string('s_appl1');
            $table->string('s_progweb1');
            $table->string('s_p_progweb1');
            $table->string('s_po1');
            $table->string('s_p_po1');
            $table->string('s_khs1');
            $table->string('s_krs1');
            $table->string('s_ktm1');
            $table->string('s_foto1');

            //Mahasiswa 2
            $table->string('s_ipk2');
            $table->string('s_sks2');
            $table->string('s_jum_d2');
            $table->string('s_jum_e2');
            $table->string('s_algoritma2');
            $table->string('s_p_algoritma2');
            $table->string('s_strukdat2');
            $table->string('s_p_strukdat2');
            $table->string('s_basdat2');
            $table->string('s_p_basdat2');
            $table->string('s_rpl2');
            $table->string('s_appl2');
            $table->string('s_progweb2');
            $table->string('s_p_progweb2');
            $table->string('s_po2');
            $table->string('s_p_po2');
            $table->string('s_khs2');
            $table->string('s_krs2');
            $table->string('s_ktm2');
            $table->string('s_foto2');

            //Kelompok
            $table->string('s_proposal');
            $table->string('s_izin_kp');

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
        Schema::dropIfExists('status1s');
    }
}
