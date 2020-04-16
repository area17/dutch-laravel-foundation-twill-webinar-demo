<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTables extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('person_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'person');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('person_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'person');
        });
    }

    public function down()
    {
        Schema::dropIfExists('person_revisions');
        Schema::dropIfExists('person_translations');
        Schema::dropIfExists('people');
    }
}
