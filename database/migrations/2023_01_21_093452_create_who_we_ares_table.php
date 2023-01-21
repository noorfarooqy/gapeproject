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
        Schema::create('who_we_ares', function (Blueprint $table) {
            $table->id();
            $table->string('small_title');
            $table->string('big_title');
            $table->string('sub_title');
            $table->text('description');
            $table->string('tagline_one_title');
            $table->string('tagline_one_description');
            $table->string('tagline_two_title');
            $table->string('tagline_two_description');
            $table->string('tagline_three_title');
            $table->string('tagline_three_description');
            $table->string('left_image');
            $table->string('left_title');
            $table->string('left_description');
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
        Schema::dropIfExists('who_we_ares');
    }
};
