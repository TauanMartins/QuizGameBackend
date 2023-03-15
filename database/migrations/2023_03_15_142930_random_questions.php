<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE OR REPLACE VIEW questions_random AS
            SELECT questions.id,
            questions.question,
            questions.difficulty,
            questions."rightAnswer",
            questions."distractionAnswer1",
            questions."distractionAnswer2",
            questions."distractionAnswer3",
            questions.img,
            questions.theme_fk
           FROM questions
          ORDER BY (random());
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS questions_random');
    }
};
