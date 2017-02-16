<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/25
 * Time: 下午11:09
 */
namespace App\Repositories;

use App\Cat;
use Cache;

class CatsRepository
{

    public function cats()
    {
        //$cats = Cat::all();
//        $cats = Cache::remember('CatsRepository_cats', 120, function() {
//            return Cat::all();
//        });


        if (!Cache::has('CatsRepository_cats')) {

            Cache::store('file')->forever('CatsRepository_cats', Cat::all());
        }

        $cats = Cache::store('file')->get('CatsRepository_cats');

        return $cats;
    }
}