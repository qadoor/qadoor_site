<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;

class IndexController extends Controller
{
    //
    public function index()
    {
        $tags = Tag::all()->take(14);
        $cats = Cat::all()->take(5);
        return view('frontend.index', compact('tags', 'cats'));
    }

    public function qalist(Request $request)
    {
        $array = $request->all();
        end($array);
        $key = key($array);
        $current_active_item = $key;
//        if(array_key_exists("hotted_page",$request->all())) {
//
//        } else {
//            $active = false;
//        }
        $hotted_questions = Question::orderBy('votes', 'desc')->paginate(20, ['*'], 'hotted_page');
        $latest_questions = Question::orderBy('updated_at', 'asc')->paginate(20, ['*'], 'latest_page');
        return view('frontend.qalist', compact('hotted_questions', 'latest_questions', 'current_active_item'));
    }

    public function taglist($id)
    {
        $tag = Tag::findOrFail($id);
        $questions = Tag::findOrFail($id)->questions()->paginate(20, ['*'], 'taglist_page');

        return view('frontend.taglist', compact('tag', 'questions'));
    }

    public function catlist(Request $request, $id)
    {
        $array = $request->all();
        end($array);
        $key = key($array);
        $current_active_item = $key;

        $cat = Cat::findOrFail($id);
        $hotted_questions = Cat::findOrFail($id)->questions()->orderBy('votes', 'desc')->paginate(20, ['*'], 'hotted_page');
        $latest_questions = Cat::findOrFail($id)->questions()->orderBy('updated_at', 'asc')->paginate(20, ['*'], 'latest_page');
        return view('frontend.catlist', compact('cat', 'hotted_questions', 'latest_questions', 'current_active_item'));
    }
}
