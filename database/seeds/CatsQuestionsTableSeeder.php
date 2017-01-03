<?php

use Illuminate\Database\Seeder;

class CatsQuestionsTableSeeder extends Seeder
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
            $cat_id = App\Cat::all()->random(1)->id;
            DB::table('cat_question')->insert([
                'question_id' => $question_id,
                'cat_id'  => $cat_id
            ]);
        }
    }
}
