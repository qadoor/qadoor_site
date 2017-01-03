<?php

use Illuminate\Database\Seeder;

class TagsQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($count = 1; $count < 100; $count++) {
            $question_id = App\Question::all()->random(1)->id;
            $tag_id = App\Tag::all()->random(1)->id;
            DB::table('tag_question')->insert([
                'question_id' => $question_id,
                'tag_id'  => $tag_id
            ]);
        }
    }
}
