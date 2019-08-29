<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img_title')->nullable();
            $table->string('img_description')->nullable();
            $table->string('image_name')->nullable();
            $table->string('image_path')->nullable();
            $table->date('image_date')->nullable();
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
        Schema::dropIfExists('banner_image');
    }
}
