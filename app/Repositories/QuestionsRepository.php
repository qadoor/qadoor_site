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
        $questions = Cache::remember('QuestionsRepository_questions', 120, function() {
            return Question::orderBy('votes', 'desc')->paginate(15);
        });
        return $questions;
    }
}