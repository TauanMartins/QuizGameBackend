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
            $table->string("question", 2000);
            $table->string("img", 255)->nullable();
            $table->char("difficulty", 1);
            $table->string("rightAnswer", 1000);
            $table->string("distractionAnswer1", 1000);
            $table->string("distractionAnswer2", 1000)->nullable();
            $table->string("distractionAnswer3", 1000)->nullable();
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
        Schema::dropIfExists('questions');
    }
};
