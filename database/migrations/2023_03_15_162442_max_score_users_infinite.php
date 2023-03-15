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
            CREATE OR REPLACE VIEW maxscoreinfinite AS
            SELECT score_users_infinite.id,
            score_users_infinite.name,
            score_users_infinite.score
           FROM score_users_infinite
          ORDER BY score_users_infinite.score DESC, score_users_infinite.id DESC;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS maxscoreinfinite');
    }
};
