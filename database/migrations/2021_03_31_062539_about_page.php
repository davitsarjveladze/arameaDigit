<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AboutPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('about_page', function (Blueprint $table) {
            $table->id();
            $table->text('img_title');
            $table->text('img_url');
            $table->text('text');
        });
        DB::table('about_page')->insert(
            array(
                'img_url' => 'images/SiteImgs/About.jpg',
                'img_title' => 'img title',
                'text' => 'about text',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('about_page');
    }
}
