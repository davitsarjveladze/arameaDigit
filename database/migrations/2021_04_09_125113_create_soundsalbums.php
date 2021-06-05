<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoundsalbums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soundsalbums', function (Blueprint $table) {
            $table->id();
            $table->text('tittle');
            $table->text('category');
            $table->text('status');
            $table->text('img_url');
//            $table->integer('type');
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
        Schema::dropIfExists('soundsalbums');
    }
}
