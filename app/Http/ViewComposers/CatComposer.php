<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/21
 * Time: 下午10:20
 */

namespace App\Http\ViewComposers;
use Illuminate\View\View;

use App\Repositories\CatsRepository;

class CatComposer
{
    function __construct(CatsRepository $catRepos)
    {
        $this->catRepos = $catRepos;
    }

    public function compose(View $view) {

        $view->with([
            'cats'=>$this->catRepos->cats(),
        ]);
    }
}