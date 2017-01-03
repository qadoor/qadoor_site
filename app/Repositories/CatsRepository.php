<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/25
 * Time: 下午11:09
 */
namespace App\Repositories;

use App\Cat;

class CatsRepository
{

    public function cats()
    {
        $cats = Cat::all();
        return $cats;
    }
}