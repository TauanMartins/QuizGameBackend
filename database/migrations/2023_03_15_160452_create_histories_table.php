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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->longText('question');
            $table->string('difficulty');
            $table->string('rightAnswer');
            $table->string('distractionAnswer1');
            $table->string('distractionAnswer2');
            $table->string('distractionAnswer3');
            $table->string('img');
            $table->longText('hint');
            $table->string('hintIMG');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};
