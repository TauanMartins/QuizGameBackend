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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('difficulty');
            $table->string('rightAnswer');
            $table->string('distractionAnswer1');
            $table->string('distractionAnswer2');
            $table->string('distractionAnswer3');
            $table->string('img');
            $table->unsignedBigInteger('theme_fk');
            $table->foreign('theme_fk')->references('id')->on('themes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
