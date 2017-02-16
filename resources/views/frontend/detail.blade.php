@extends('layouts.qadoorheader')
@section('qadoor_meta')
    <title>QADoor问答门问题_{!! $question->title !!}</title>
    <meta name="keywords" content="QADoor,QADoor.com,qadoor.com,问答门,{!! $question->title !!}">
    <meta name="author" content="Lucas, 网站:www.yuanpengfei.com">
    <meta name="description" content="QADoor(问答门)为您提供:{!! $question->title !!}">
@endsection
@section('content')
    <div class="container-fluid question_answer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 ">
                    <div class="question_answer_header pb20">
                        <span class="question_sign">问</span>
                        <h1 class="h3 question_header_title" id="questionTitle">
                            <a href="#">{!! $question->title !!}</a>
                        </h1>

                        <ul class="question_taglist clear_fix mr10">
                            @foreach( $question->tags as $tag)
                            <li class="tagPopup mb5"><a class="tag" href="#" data-toggle="popover" data-trigger="hover" data-img="https://sfault-avatar.b0.upaiyun.com/122/960/1229606535-1040000000089434_huge256" data-placement="top" data-original-title="css" data-content="层叠样式表（英语：Cascading Style Sheets，简写CSS），又称串样式列表，由W3C定义和维护的标准，一种用来为结">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                        <div class="" style="margin-left: 40px">
                            原文:&nbsp;
                            <a class="cut cut70" href="{{ $question->reprint_link }}" target="_blank" style="display:inline-block;">{{ $question->reprint_link }}</a>
                        </div>

                        {{--<div class="question_author ml40">--}}
                            {{--<a href="#" class="mr5"><span>webueum</span></a>--}}
                            {{--1 小时前提问--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 question_answer_header_side">
                    {{--<span>36</span>浏览--}}
                </div>
            </div>
        </div>
    </div>
    <div class="container row question_answer_detail ">
        <div class="col-xs-12 col-md-9 mt20">
            <section class="ad_first mb20">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- QADoor详情页顶部广告1 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-4980361559626740"
                     data-ad-slot="6740761150"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </section>
            <section class="question_item">
                <div class="question_left">
                    {{--<div class="question_vote">--}}
                        {{--<button type="button" class="like" data-id="1010000007532067" data-type="question" data-do="like" data-trigger="hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="问题对人有帮助，内容完整，我也想知道答案">--}}
                            {{--<span class="sr-only">问题对人有帮助，内容完整，我也想知道答案</span>--}}
                        {{--</button>--}}
                        {{--<span class="count">0</span>--}}
                        {{--<button type="button" class="hate" data-id="1010000007532067" data-type="question" data-do="hate" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="问题没有实际价值，缺少关键内容，没有改进余地">--}}
                            {{--<span class="sr-only">问题没有实际价值，缺少关键内容，没有改进余地</span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                </div>
                <div class="question_detail">
                    {!! $question->content !!}
                    {{--<div class="question_more">--}}
                        {{--<ul class="clear_fix">--}}
                            {{--<li><a href="#">4 小时前提问</a></li>--}}
                            {{--<li><a href="#">编辑</a></li>--}}
                            {{--<li><a href="#">评论</a></li>--}}
                            {{--<li><a href="#">邀请回答</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </section>
            <section class="answers_list ">
                <div class="answers_num clear_fix">
                    <h2><bold>{{$question->answers->count()}}</bold>个回答</h2>
                    <div class="sort mt20" role="group">
                        {{--<a href="#" class="default ">默认排序</a>--}}
                        {{--<a href="#" class="time">时间排序</a>--}}
                    </div>
                </div>

                @foreach( $question->answers as $answer)
                    <article>
                        <div class="answers_left">
                            <div class="answers_vote">
                                <button type="button" class="like" data-id="1010000007532067" data-type="answers" data-do="like" data-trigger="hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="问题对人有帮助，内容完整，我也想知道答案">
                                    <span class="sr-only">问题对人有帮助，内容完整，我也想知道答案</span>
                                </button>
                                <span class="count">0</span>
                                <button type="button" class="hate" data-id="1010000007532067" data-type="answers" data-do="hate" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="问题没有实际价值，缺少关键内容，没有改进余地">
                                    <span class="sr-only">问题没有实际价值，缺少关键内容，没有改进余地</span>
                                </button>
                            </div>
                        </div>
                        <div class="answers_detail mt20">
                            {!! $answer->content !!}
                            {{--<div class="answers_more">--}}
                                {{--<ul class="clear_fix">--}}
                                    {{--<li><a href="#">4 小时前提问</a></li>--}}
                                    {{--<li><a href="#">编辑</a></li>--}}
                                    {{--<li><a href="#">评论</a></li>--}}
                                    {{--<li><a href="#">邀请回答</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </article>
                @endforeach
            </section>

        </div>
        <!--侧栏-->
        @include('frontend.sidebar')
    </div>
@endsection
@section('customjs')
    <script src="js/qadoor.js"></script>
@endsection