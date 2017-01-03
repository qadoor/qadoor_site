<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/21
 * Time: 下午10:17
 */

namespace App\Repositories;

use App\Tag;

class TagsRepository
{

    public function tags()
    {
        $tags = Tag::all()->take(14);
        return $tags;
    }
}