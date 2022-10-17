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
            $table->string('semester1');
            $table->integer('jum_d1'); // jumlah nilai D
            $table->string('mk_d1'); // mata kuliah D
            $table->integer('jum_e1'); // jumlah nilai E
            $table->string('mk_e1'); // mata kuliah E
            $table->string('algoritma1'); //algoritma dan pemrograman
            $table->string('p_algoritma1'); // praktikum algoritma dan pemrograman
            $table->string('strukdat1'); // struktur data 
            $table->string('p_strukdat1'); // praktikum struktur data
            $table->string('basdat1'); // basis data
            $table->string('p_basdat1'); // praktikum basis data
            $table->string('rpl1'); // analisa dan perancangan perangkat lunak
            $table->string('appl1'); // analisa dan perancangan perangkat lunak
            $table->string('progweb1'); // pemrograman web
            $table->string('p_progweb1'); // praktikum pemrograman web
            $table->string('kontrak')->nullable();
            $table->timestamps();

                  // batas tabel mahasiswa 1
                  $table->string('nim2');
                  $table->string('nama2');
                  $table->string('doswal2'); // Dosen Wali
                  $table->string('peminatan2');
                  $table->double('ipk2');
                  $table->integer('t_sks2'); // total sks
                  $table->string('semester2');
                  $table->integer('jum_d2'); // jumlah nilai D
                  $table->string('mk_d2'); // mata kuliah D
                  $table->integer('jum_e2'); // jumlah nilai E
                  $table->string('mk_e2'); // mata kuliah E
                  $table->string('algoritma2'); //algoritma dan pemrograman
                  $table->string('p_algoritma2'); // praktikum algoritma dan pemrograman
                  $table->string('strukdat2'); // struktur data 
                  $table->string('p_strukdat2'); // praktikum struktur data
                  $table->string('basdat2'); // basis data
                  $table->string('p_basdat2'); // praktikum basis data
                  $table->string('rpl2'); // analisa dan perancangan perangkat lunak
                  $table->string('appl2'); // analisa dan perancangan perangkat lunak
                  $table->string('progweb2'); // pemrograman web
                  $table->string('p_progweb2'); // praktikum pemrograman web
                  $table->string('kontrak2')->nullable();
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
