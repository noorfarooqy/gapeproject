<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author')->references('id')->on('users');
            $table->string('news_title');
            $table->text('news_content');
            $table->text('news_image');
            $table->boolean('is_live');
            $table->unsignedBigInteger('views')->default(0);
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
        Schema::dropIfExists('site_news');
    }
};
