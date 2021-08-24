<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skoring', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            for($i = 1;$i <= 20; $i++){
                $table->integer('indikator' . $i)->nullable();
            }
            $table->integer('total_nilai')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('skoring');
    }
}
