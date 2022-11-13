<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukaTutupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buka_tutups', function (Blueprint $table) {
            $table->id();
            $table->boolean('kp1')->default(0);
            $table->boolean('kp2')->default(0);
            $table->boolean('seminar')->default(0);
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
        Schema::dropIfExists('buka_tutups');
    }
}
