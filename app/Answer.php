<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

    protected $fillable = ['content', 'isaccept', 'votes'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
