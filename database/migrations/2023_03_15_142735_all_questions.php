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
            CREATE OR REPLACE VIEW allquestions AS
            SELECT questions.id,
            questions.question,
            themes.id AS idtheme,
            themes.theme,
            questions.difficulty,
            questions."rightAnswer",
            questions."distractionAnswer1",
            questions."distractionAnswer2",
            questions."distractionAnswer3",
            questions.img
           FROM (questions
             JOIN themes ON ((questions.theme_fk = themes.id)));
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS allquestions');
    }
};
