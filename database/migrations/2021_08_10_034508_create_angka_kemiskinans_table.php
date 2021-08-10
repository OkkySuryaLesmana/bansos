<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngkaKemiskinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angka_kemiskinans', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->integer('indikator1');
            $table->integer('indikator2');
            $table->integer('indikator3');
            $table->integer('indikator4');
            $table->integer('indikator5');
            $table->integer('indikator6');
            $table->integer('indikator7');
            $table->integer('indikator8');
            $table->integer('indikator9');
            $table->integer('indikator10');
            $table->integer('indikator11');
            $table->integer('indikator12');
            $table->integer('indikator13');
            $table->integer('indikator14');
            $table->integer('indikator15');
            $table->integer('indikator16');
            $table->integer('indikator17');
            $table->integer('indikator18');
            $table->integer('indikator19');
            $table->integer('indikator20');
            $table->integer('total_nilai');
            $table->string('status');
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
        Schema::dropIfExists('angka_kemiskinans');
    }
}
