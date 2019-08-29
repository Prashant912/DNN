<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatestNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latest_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('news_id');
            $table->string('img_title')->nullable();
            $table->string('img_name')->nullable();
            $table->string('short_description')->nullable();
            $table->string('long_description')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('fetured_image', ['0', '1'])->default('0');
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
        Schema::dropIfExists('latest_news');
    }
}
