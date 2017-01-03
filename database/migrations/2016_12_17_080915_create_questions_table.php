<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reprint_link');             // 问题转载地址
            $table->string('title');                    // 问题标题 
            $table->integer('user_id')->unsigned();     // 提问者 
            $table->text('content');                    // 内容 
            $table->bigInteger('votes');                // 投票 
            $table->bigInteger('clickcount');           // 访问量
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();                       // 提问时间 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
