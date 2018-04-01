<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaybookEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playbook_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('playbook_chapter_id')->unsigned();
            $table->string('title', 255);
            $table->string('quote', 512);
            $table->string('quote_speaker', 255);
            $table->string('image', 255);
            $table->text('body');
            $table->text('diagnostics');
            $table->text('exercises');
            $table->integer('weight')->unsigned();
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
        Schema::dropIfExists('playbook_entries');
    }
}
