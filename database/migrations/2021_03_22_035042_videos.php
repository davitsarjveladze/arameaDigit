<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Videos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        //
//        Schema::create('videos3', function (Blueprint $table) {
//            $table->id();
//            $table->text('tittle');
//            $table->text('category');
//            $table->text('gallery_name');
//            $table->text('img_url');
//            $table->text('video_url');
//            $table->integer('status');
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
        Schema::dropIfExists('videos3');
    }
}
