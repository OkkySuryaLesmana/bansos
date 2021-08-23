<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('postingan_id');
            $table->foreign('postingan_id')->references('id')->on('postingan');
            $table->unsignedInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like');
        Schema::table('like', function (Blueprint $table) {
            $table->dropForeign('like_profil_id_foreign');
            $table->dropForeign('like_postingan_id_foreign');
        });
    }
}
