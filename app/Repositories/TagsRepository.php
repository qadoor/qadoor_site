<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/21
 * Time: 下午10:17
 */

namespace App\Repositories;

use App\Tag;
use Cache;

class TagsRepository
{

    public function tags()
    {
        //$tags = Tag::all()->take(13);
        $tags = Cache::remember('TagsRepository_tags', 120, function() {
            return Tag::all()->take(13);
        });
        return $tags;
    }
}