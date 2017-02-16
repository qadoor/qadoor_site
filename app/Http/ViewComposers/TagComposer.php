<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/21
 * Time: 下午10:20
 */

namespace App\Http\ViewComposers;
use Illuminate\View\View;

use App\Repositories\TagsRepository;
use Cache;

class TagComposer
{
    function __construct(TagsRepository $tagRepos)
    {
        $this->tagRepos = $tagRepos;
    }

    public function compose(View $view) {

        $view->with([
            'tags'=>$this->tagRepos->tags(),
        ]);
    }
}