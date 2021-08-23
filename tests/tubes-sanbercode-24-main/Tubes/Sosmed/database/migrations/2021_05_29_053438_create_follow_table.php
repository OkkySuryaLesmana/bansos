<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('profil_id1');
            $table->foreign('profil_id1')->references('id')->on('profil');
            $table->unsignedInteger('profil_id2');
            $table->foreign('profil_id2')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follow');
        Schema::table('follow', function (Blueprint $table) {
            $table->dropForeign('follow_profil_id1_foreign');
            $table->dropForeign('follow_profil_id2_foreign');
        });
    }
}
