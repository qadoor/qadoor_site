<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/25
 * Time: 下午11:09
 */
namespace App\Repositories;

use App\Question;
use Cache;

class QuestionsRepository
{

    public function questions()
    {
        //$questions = Question::orderBy('votes', 'desc')->paginate(15);
//        $questions = Cache::remember('QuestionsRepository_questions', 120, function() {
//            return Question::orderBy('votes', 'desc')->paginate(15);
//        });

        if (!Cache::has('QuestionsRepository_questions')) {

            Cache::store('file')->forever('QuestionsRepository_questions', Question::orderBy('votes', 'desc')->paginate(15));
        }

        $questions = Cache::store('file')->get('QuestionsRepository_questions');

        return $questions;
    }
}