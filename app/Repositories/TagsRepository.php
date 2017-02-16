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
//        $tags = Cache::remember('TagsRepository_tags', 120, function() {
//            return Tag::all()->take(13);
//        });

        if (!Cache::has('TagsRepository_tags')) {

            Cache::store('file')->forever('TagsRepository_tags', Tag::all()->take(13));
        }

        $tags = Cache::store('file')->get('TagsRepository_tags');


        return $tags;
    }
}