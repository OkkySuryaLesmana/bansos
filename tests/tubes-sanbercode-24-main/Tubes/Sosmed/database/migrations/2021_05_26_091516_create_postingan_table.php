<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postingan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('tulisan');
            $table->string('gambar', 50);
            $table->string('caption', 50);
            $table->string('quote', 50);
            $table->unsignedInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');
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
        Schema::dropIfExists('postingan');
        Schema::table('postingan', function (Blueprint $table) {
            $table->dropForeign('postingan_profil_id_foreign');
        });
    }
}
