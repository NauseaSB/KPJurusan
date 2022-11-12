<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatus2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status2s', function (Blueprint $table) {
            $table->id();
            //mahasiswa 1
            $table->string('s_ipk1');
            $table->string('s_sks1');
            $table->string('s_jum_d1');
            $table->string('s_jum_e1');
            $table->string('s_kontrak1');
            $table->string('s_khs1');
            $table->string('s_krs1');
            //mahasiswa 2

            $table->string('s_ipk2');
            $table->string('s_sks2');
            $table->string('s_jum_d2');
            $table->string('s_jum_e2');
            $table->string('s_kontrak2');
            $table->string('s_khs2');
            $table->string('s_krs2');

            //kelompok
            $table->string('s_b_akademik');
            $table->string('s_k_akademik');
            $table->string('s_b_lapangan');
            $table->string('s_k_lapangan');
            $table->string('s_surat_kelayakan');
            $table->string('s_form_daftar');
            $table->string('s_mhs1')->nullable();
            $table->string('s_mhs2')->nullable();
            $table->string('s_kelompok')->nullable();
            $table->string('s_akhir')->nullable();

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
        Schema::dropIfExists('status2s');
    }
}
