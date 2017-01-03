<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = ['name'];

    public function cats()
    {
        return $this->belongsToMany('App\Cat', 'cat_tag');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Question', 'tag_question');
    }
}
