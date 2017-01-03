<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned()->index();
            $table->integer('question_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cat_question');
    }
}
