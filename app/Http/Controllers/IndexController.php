<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use Cache;
use DB;

class IndexController extends Controller
{
    //
    public function index()
    {
//        $tags = Tag::all()->take(14);
//        $cats = Cat::all()->take(5);

        //$cats = DB::table('cats')->take(10)->remember(60)->get();

        //use file cache and hehe

        if (!Cache::has('index_tags')) {

            Cache::store('file')->forever('index_tags', Tag::all()->take(14));
        }

        if (!Cache::has('index_cats')) {

            Cache::store('file')->forever('index_cats', Cat::all()->take(5));
        }

        $cats = Cache::store('file')->get('index_cats');
        $tags = Cache::store('file')->get('index_tags');

        //$tags = Tag::remember(60)->take(14)->get();
        //$cats = Cat::remember(5)->get();
        //$cats = DB::table('cats')->take(14)->remember(60)->get();
//        $cats = Cache::remember('cats', 5, function() {
//            return DB::table('cats')->take(5);
//        });
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
        //$hotted_questions = Question::orderBy('votes', 'desc')->paginate(20, ['*'], 'hotted_page');
        //$latest_questions = Question::orderBy('updated_at', 'asc')->paginate(20, ['*'], 'latest_page');

//        $hotted_questions = Cache::remember('qalist_hotted_questions', 120, function() {
//            return Question::orderBy('votes', 'desc')->paginate(20, ['*'], 'hotted_page');
//        });

        if (!Cache::has('qalist_hotted_questions')) {

            Cache::store('file')->forever('qalist_hotted_questions', Question::orderBy('votes', 'desc')->paginate(20, ['*'], 'hotted_page'));
        }

        $hotted_questions = Cache::store('file')->get('qalist_hotted_questions');


//        $latest_questions = Cache::remember('qalist_latest_questions', 120, function() {
//            return Question::orderBy('updated_at', 'asc')->paginate(20, ['*'], 'latest_page');
//        });

        if (!Cache::has('qalist_latest_questions')) {

            Cache::store('file')->forever('qalist_latest_questions', Question::orderBy('updated_at', 'asc')->paginate(20, ['*'], 'latest_page'));
        }

        $latest_questions = Cache::store('file')->get('qalist_latest_questions');



        return view('frontend.qalist', compact('hotted_questions', 'latest_questions', 'current_active_item'));
    }

    public function taglist($id)
    {
        //$tag = Tag::findOrFail($id);
        //$questions = Tag::findOrFail($id)->questions()->paginate(20, ['*'], 'taglist_page');
//        $tag = Cache::remember('taglist_tag', 120, function() use ($id) {
//            return Tag::findOrFail($id);
//        });

        if (!Cache::has('taglist_tag')) {

            Cache::store('file')->forever('taglist_tag', Tag::findOrFail($id));
        }

        $tag = Cache::store('file')->get('taglist_tag');

//        $questions = Cache::remember('taglist_questions', 120, function() use ($id)  {
//            return Tag::findOrFail($id)->questions()->paginate(20, ['*'], 'taglist_page');
//        });

        if (!Cache::has('taglist_questions')) {

            Cache::store('file')->forever('taglist_questions', Tag::findOrFail($id)->questions()->paginate(20, ['*'], 'taglist_page'));
        }

        $questions = Cache::store('file')->get('taglist_questions');


        return view('frontend.taglist', compact('tag', 'questions'));
    }

    public function catlist(Request $request, $id)
    {
        $array = $request->all();
        end($array);
        $key = key($array);
        $current_active_item = $key;

        //$cat = Cat::findOrFail($id);
        //$hotted_questions = Cat::findOrFail($id)->questions()->orderBy('votes', 'desc')->paginate(20, ['*'], 'hotted_page');
        //$latest_questions = Cat::findOrFail($id)->questions()->orderBy('updated_at', 'asc')->paginate(20, ['*'], 'latest_page');

        $cat = Cache::remember('catlist_cat', 120, function() use ($id) {
            return Cat::findOrFail($id);
        });

//        $hotted_questions = Cache::remember('catlist_hotted_questions', 120, function() use ($id) {
//            return Cat::findOrFail($id)->questions()->orderBy('votes', 'desc')->paginate(20, ['*'], 'hotted_page');
//        });

        if (!Cache::has('catlist_hotted_questions')) {

            Cache::store('file')->forever('catlist_hotted_questions', Cat::findOrFail($id)->questions()->orderBy('votes', 'desc')->paginate(20, ['*'], 'hotted_page'));
        }

        $hotted_questions = Cache::store('file')->get('catlist_hotted_questions');


//        $latest_questions = Cache::remember('catlist_latest_questions', 120, function() use ($id){
//            return Cat::findOrFail($id)->questions()->orderBy('updated_at', 'asc')->paginate(20, ['*'], 'latest_page');
//        });


        if (!Cache::has('catlist_latest_questions')) {

            Cache::store('file')->forever('catlist_latest_questions', Cat::findOrFail($id)->questions()->orderBy('updated_at', 'asc')->paginate(20, ['*'], 'latest_page'));
        }

        $latest_questions = Cache::store('file')->get('catlist_latest_questions');

        return view('frontend.catlist', compact('cat', 'hotted_questions', 'latest_questions', 'current_active_item'));
    }
}
