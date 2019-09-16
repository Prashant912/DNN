<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FeaturedVideos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Video_title')->nullable();
            $table->string('Video_link')->nullable();
            $table->string('background_image_name')->nullable();
            $table->string('background_image_path')->nullable();
            //$table->date('publish_date')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('FeaturedVideos');
    }
}
