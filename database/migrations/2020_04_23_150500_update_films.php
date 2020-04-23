<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('films', function (Blueprint $table) {
            //
            $table->date('release_date');
            $table->text('genre');
            $table->text('description');
            $table->string('country', 50);
            $table->string('rating', 50);
            $table->string('language', 20);
            $table->string('awards', 100);
            $table->string('actors', 100);
            $table->string('director', 100);
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('films', function (Blueprint $table) {
            //
        });
    }
}
