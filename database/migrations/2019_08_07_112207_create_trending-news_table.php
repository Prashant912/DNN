<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrendingNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trending-news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img_title')->nullable();
            $table->string('img_name')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('trending-news');
    }
}
