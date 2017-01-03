<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::drop('cat_tag');
    }
}
