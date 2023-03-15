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
            CREATE OR REPLACE VIEW maxscoreclassic AS
            SELECT score_users_classic.id,
            score_users_classic.name,
            score_users_classic.score
           FROM score_users_classic
          ORDER BY score_users_classic.score DESC, score_users_classic.id DESC;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS maxscoreclassic');
    }
};
