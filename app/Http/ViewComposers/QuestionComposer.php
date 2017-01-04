<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/21
 * Time: 下午10:20
 */

namespace App\Http\ViewComposers;
use App\Repositories\QuestionsRepository;
use Illuminate\View\View;


class QuestionComposer
{
    function __construct(QuestionsRepository $qRepos)
    {
        $this->qRepos = $qRepos;
    }

    public function compose(View $view) {

        $view->with([
            'questions'=>$this->qRepos->questions(),
        ]);
    }
}