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
            CREATE OR REPLACE VIEW maxscorehistory AS
            SELECT score_users_history.id,
            score_users_history.name,
            score_users_history.score
           FROM score_users_history
          ORDER BY score_users_history.score DESC, score_users_history.id DESC;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS maxscorehistory');
    }
};
