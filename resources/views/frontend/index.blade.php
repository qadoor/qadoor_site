@extends('layouts.qadoorheader')
@section('content')
    <div class="container row">
        <div class="col-xs-12 col-md-9 menu_floor">
            @foreach( $cats as $cat)
                <section class="android floor">
                    <div class="title_head mt20">
                        <div class="title_name">
                            <a href="/category/{{ $cat->id }}">{{ $cat->name }}</a>
                        </div>
                        <div class="title_detail">
                            <ul>
                                <li class="mr20 active">
                                    <a href="#news_{{ $cat->name }}" data-toggle="tab">最新的</a></li>
                                <li><a href="#hot_{{ $cat->name }}" data-toggle="tab">热门的</a></li>
                            </ul>
                            <div class="tips">
                                @foreach( $cat->tags->take(3) as $tag)
                                    <a href="/tag_list/{{ $tag->id }}" target="_blank">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                            <div class="more">
                                <a href="#">更多相关标签>> </a>
                            </div>
                        </div>
                    </div>
                    <div class="content tab-content" id="myTabContent1">
                        <div class="tab-pane fade in active" id="news_{{ $cat->name }}">
                            <ul>
                                @foreach($cat->questions->take(6) as $question)
                                <li class="clear_fix">
                                    <ul class="num clear_fix">
                                        <li class="num_vote"><i>{{ $question->votes }}</i>投票</li>
                                        @if($question->answers->count() == 0)
                                            <li class="num_answer_mid"><i>{{ $question->answers->count() }}</i>回答</li>
                                        @elseif($question->answers->count() >= 50)
                                            <li class="num_answer_no"><i>{{ $question->answers->count() }}</i>回答</li>
                                        @else
                                            <li class="num_answer_ok"><i>{{ $question->answers->count() }}</i>回答</li>
                                        @endif
                                        <li class="num_scan"><i>50</i>浏览</li>
                                    </ul>
                                    <div class="question">
                                        <div class="questioner mt20">
                                            <a class="qser_name">Mno</a> 刚刚提问
                                        </div>
                                        <a href="/detail/{{ $question->id }}" class="describe">
                                            {{ $question->title }}
                                        </a>
                                        @foreach($question->tags->take(2) as $tag)
                                        <a href="/tag_list/{{ $tag->id }}" target="_blank" class="fllt">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>


                        <div class="tab-pane fade" id="hot_{{ $cat->name }}">
                            <ul>
                                @foreach($cat->questions()->where('votes', '>', 70)->take(6)->get() as $question)
                                    <li class="clear_fix">
                                        <ul class="num clear_fix">
                                            <li class="num_vote"><i>{{ $question->votes }}</i>投票</li>
                                            @if($question->answers->count() == 0)
                                                <li class="num_answer_mid"><i>{{ $question->answers->count() }}</i>回答</li>
                                            @elseif($question->answers->count() >= 50)
                                                <li class="num_answer_no"><i>{{ $question->answers->count() }}</i>回答</li>
                                            @else
                                                <li class="num_answer_ok"><i>{{ $question->answers->count() }}</i>回答</li>
                                            @endif
                                            <li class="num_scan"><i>50</i>浏览</li>
                                        </ul>
                                        <div class="question">
                                            <div class="questioner mt20">
                                                <a class="qser_name">Mno</a> 刚刚提问
                                            </div>
                                            <a href="/detail/{{ $question->id }}" class="describe">
                                                {{ $question->title }}
                                            </a>
                                            @foreach($question->tags->take(2) as $tag)
                                                <a href="/tag_list/{{ $tag->id }}" target="_blank" class="fllt">{{ $tag->name }}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </section>

            @endforeach

        </div>
        <!--侧栏-->
        <div class="col-xs-12 col-md-3 sub_menu" >
            <section class="login_info mt20" style="display: none;">
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
                        <img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">
                        <div class="favorite_body">
                            <a target="_blank" class="" href="#">增加前端姿势</a>
                            <p class="favorite_num">
                                <span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注
                            </p>
                        </div>
                    </li>
                    <li class="favorite_list">
                        <img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">
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