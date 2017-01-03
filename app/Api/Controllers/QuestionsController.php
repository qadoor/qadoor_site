<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/11
 * Time: 上午10:47
 */

namespace App\Api\Controllers;
use App\Api\Transformers\QuestionTransformer;
use App\Question;


class QuestionsController extends BaseController
{
    public function index() {
//        return Question::all();
//        $questions = Question::all();
        $questions = Question::paginate(5);
        return $this->response->paginator($questions, new QuestionTransformer());
        return $this->collection($questions, new QuestionTransformer());
    }
}