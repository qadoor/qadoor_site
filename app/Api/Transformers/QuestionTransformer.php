<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/11
 * Time: 上午10:52
 */

namespace App\Api\Transformers;


use App\Question;
use League\Fractal\TransformerAbstract;

class QuestionTransformer extends TransformerAbstract
{
    public function transform(Question $question) {
        return [
            'title'=>$question['title'],
            'user_id'=>$question['user_id'],
            'tag_id'=>$question['tag_id'],
            'cat_id'=>$question['cat_id'],
            'content'=>$question['content'],
            'votes'=>$question['votes'],
            'created_at'=>$question['created_at'],
            'updated_at'=>$question['updated_at']
        ];
    }

}