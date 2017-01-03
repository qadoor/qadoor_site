@extends('layouts.qadoorheader')
@section('content')
    <div class="container-fluid question_answer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 ">
                    <div class="question_answer_header pb20">
                        <span class="question_sign">问</span>
                        <h1 class="h3 question_header_title" id="questionTitle">
                            <a href="#">{{ $question->title}}</a>
                        </h1>

                        <ul class="question_taglist clear_fix mr10">
                            @foreach( $question->tags as $tag)
                            <li class="tagPopup mb5"><a class="tag" href="#" data-toggle="popover" data-trigger="hover" data-img="https://sfault-avatar.b0.upaiyun.com/122/960/1229606535-1040000000089434_huge256" data-placement="top" data-original-title="css" data-content="层叠样式表（英语：Cascading Style Sheets，简写CSS），又称串样式列表，由W3C定义和维护的标准，一种用来为结">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>

                        <div class="question_author ml40">
                            <a href="#" class="mr5"><span>webueum</span></a>
                            1 小时前提问
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 question_answer_header_side">
                    <span>36</span>浏览
                </div>
            </div>
        </div>
    </div>
    <div class="container row question_answer_detail ">
        <div class="col-xs-12 col-md-9 mt20">
            <section class="question_item">
                <div class="question_left">
                    <div class="question_vote">
                        <button type="button" class="like" data-id="1010000007532067" data-type="question" data-do="like" data-trigger="hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="问题对人有帮助，内容完整，我也想知道答案">
                            <span class="sr-only">问题对人有帮助，内容完整，我也想知道答案</span>
                        </button>
                        <span class="count">0</span>
                        <button type="button" class="hate" data-id="1010000007532067" data-type="question" data-do="hate" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="问题没有实际价值，缺少关键内容，没有改进余地">
                            <span class="sr-only">问题没有实际价值，缺少关键内容，没有改进余地</span>
                        </button>
                    </div>
                </div>
                <div class="question_detail">
                    {{ $question->content }}
                    <div class="question_more">
                        <ul class="clear_fix">
                            <li><a href="#">4 小时前提问</a></li>
                            <li><a href="#">编辑</a></li>
                            <li><a href="#">评论</a></li>
                            <li><a href="#">邀请回答</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="answers_list ">
                <div class="answers_num clear_fix">
                    <h2><bold>{{$question->answers->count()}}</bold>个回答</h2>
                    <div class="sort mt20" role="group">
                        <a href="#" class="default ">默认排序</a>
                        <a href="#" class="time">时间排序</a>
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
                            {{ $answer->content }}
                            <div class="answers_more">
                                <ul class="clear_fix">
                                    <li><a href="#">4 小时前提问</a></li>
                                    <li><a href="#">编辑</a></li>
                                    <li><a href="#">评论</a></li>
                                    <li><a href="#">邀请回答</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                @endforeach



            </section>

        </div>
        <!--侧栏-->
        <div class="col-xs-12 col-md-3 sub_menu">
            <section class="login_info mt20">
                <div class="side-ask alert alert-warning">
                    <p>
                        QAdoor问答门是一个专注于解决编程问题，提高开发技能的社区。
                    </p>
                    <a href="/user/oauth/google" class="mt20 btn btn-google btn-block">
                        <span class="icon-qa-bg-google"></span>
                        使用 Google 登录
                    </a>
                    <a href="/user/oauth/weibo" class="mt20 btn btn-weibo btn-block">
                        <span class="icon-qa-bg-weibo"></span>
                        使用微博登录
                    </a>
                    <a href="/user/oauth/weixin" class="mt20 btn btn-weixin btn-block">
                        <span class="icon-qa-bg-weixin"></span>
                        使用微信登录
                    </a>

                    <div class="mt20 side-system-notice">
                        <i class="fa fa-bullhorn pull-left"></i><a class="side-system-notice--title"
                                                                   href="http://sfdc-2016hz.bagevent.com">SFDC
                            杭州开发者大会，优惠售票进行中，长三角伙伴看过来！</a>
                    </div>
                </div>
            </section>

            <section class="Headline mt40">
                <div class="widget_headline widget-box mt20 mb30">
                    <h2 class="h4 widget-box_title">最新头条</h2>
                    <ul class="list_block pt5 pl20 pb5">
                        <li class="pt10">
                            <a href="#" class="fc">微观SOA：服务设计原则及其实践方式</a>

                            <p class=""><span class="mr5 praise">0 赞</span> | <span class="ml5">0 评论</span></p>
                        </li>
                        <li class="pt10">
                            <a href="#" class="fc">前端工程简介</a>

                            <p class=""><span class="mr5 praise">0 赞</span> | <span class="ml5">0 评论</span></p>
                        </li>
                        <li class="pt10">
                            <a href="#" class="fc">Node 应用开发</a>

                            <p class=""><span class="mr5 praise">0 赞</span> | <span class="ml5">0 评论</span></p>
                        </li>
                        <li class="pt10">
                            <a href="#" class="fc">React 技术栈</a>

                            <p class=""><span class="mr5 praise">1 赞</span> | <span class="ml5">0 评论</span></p>
                        </li>
                        <li class="pt10 pb10">
                            <a href="#" class="fc">前端开发的历史和趋势</a>

                            <p class=""><span class="mr5 praise">1 赞</span> | <span class="ml5">0 评论</span></p>
                        </li>
                        <a href="#" target="_blank" class="f12 fc headline_more">更多头条内容→</a>
                    </ul>
                </div>
            </section>

            <section class="hot_favorite mt40">
                <p class="favorite_title mb20">热门收藏夹 <span><a href="#">换一组</a></span></p>
                <ul class="favorite_content">
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>

                </ul>
            </section>
        </div>
    </div>
@endsection
@section('customjs')
    <script src="js/qadoor.js"></script>
@endsection