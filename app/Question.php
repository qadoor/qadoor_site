<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['reprint_link', 'title', 'content', 'votes'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cats()
    {
        return $this->belongsToMany('App\Cat', 'cat_question');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'tag_question');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
