<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MainManu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
//        Schema::create('posts_menu', function (Blueprint $table) {
//            $table->id();
//            $table->text('tittle_fr');
//            $table->text('tittle_en');
//            $table->text('url');
//            $table->text('status');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('posts_menu');
    }
}
