<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->unsignedInteger('postingan_id');
            $table->foreign('postingan_id')->references('id')->on('postingan');
            $table->unsignedInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->text('komen');
            $table->string('foto', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komen');
        Schema::table('komen', function (Blueprint $table) {
            $table->dropForeign('komen_profil_id_foreign');
            $table->dropForeign('komen_postingan_id_foreign');
        });
    }
}
