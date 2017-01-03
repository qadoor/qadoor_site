<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    //
    protected $fillable = ['name'];

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'cat_tag');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Question', 'cat_question');
    }
}
