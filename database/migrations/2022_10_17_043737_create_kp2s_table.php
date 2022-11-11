<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKp2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kp2s', function (Blueprint $table) {
            $table->id();
            $table->string('nim1');
            $table->string('nama1');
            $table->string('doswal1'); // Dosen Wali
            $table->string('peminatan1');
            $table->double('ipk1');
            $table->integer('t_sks1'); // total sks
            $table->integer('jum_d1'); // jumlah nilai D
            $table->string('mk_d1')->nullable(); // mata kuliah D
            $table->integer('jum_e1'); // jumlah nilai E
            $table->string('mk_e1')->nullable(); // mata kuliah E
            $table->string('kontrak')->nullable();
            $table->string('khs1')->nullable();
            $table->string('krs1')->nullable();
            // batas tabel mahasiswa 1

            $table->string('nim2');
            $table->string('nama2');
            $table->string('doswal2'); // Dosen Wali
            $table->string('peminatan2');
            $table->double('ipk2');
            $table->integer('t_sks2'); // total sks
            $table->integer('jum_d2'); // jumlah nilai D
            $table->string('mk_d2')->nullable(); // mata kuliah D
            $table->integer('jum_e2'); // jumlah nilai E
            $table->string('mk_e2')->nullable(); // mata kuliah E
            $table->string('kontrak2')->nullable();
            $table->string('khs2')->nullable();
            $table->string('krs2')->nullable();
            // batas tabel mahasiswa 2

            $table->string('judul_kp');
            $table->string('tempat_kp_lapangan');
            $table->string('alamat');
            $table->string('telp_tempat_kp');
            $table->string('nama_pembimbing_lapangan');
            $table->string('nama_penanggung_jawab_lapangan');
            $table->string('dosbim');
            // batas tabel materi

            $table->integer('jum_b_akademik');
            $table->string('k_b_akademik')->nullable();
            // batas tabel akademik

            $table->integer('jum_b_lapangan');
            $table->string('k_b_lapangan')->nullable();
            // batas tabel lapangan

            $table->string('surat_kelayakan')->nullable();
            $table->string('form_daftar')->nullable();
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
        Schema::dropIfExists('kp2s');
    }
}
