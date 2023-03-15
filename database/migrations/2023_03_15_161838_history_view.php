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
            CREATE OR REPLACE VIEW history_view AS
            SELECT histories.id,
            histories.question,
            histories.difficulty,
            histories."rightAnswer",
            histories."distractionAnswer1",
            histories."distractionAnswer2",
            histories."distractionAnswer3",
            histories.img,
            histories.hint,
            histories."hintIMG"
           FROM histories
          ORDER BY histories.id;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS history_view');
    }
};
