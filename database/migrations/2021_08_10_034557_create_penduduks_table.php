<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama_lgkp');
            $table->integer('jenis_klmin');
            $table->string('tmpt_lhr');
            $table->string('tgl_lhr');
            $table->string('no_kk');
            $table->string('no_prop');
            $table->string('no_kab');
            $table->string('no_kec');
            $table->string('no_kel');
            $table->string('no_rw');
            $table->string('no_rt');
            $table->string('kepala_keluarga');
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
        Schema::dropIfExists('penduduks');
    }
}
