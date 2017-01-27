@extends('layouts.qadoorheader')
@section('content')
    <div class="container row">
        <div class="col-xs-12 col-md-9 menu_floor">
            <section class="sub_tag">
                <div>
                    {{--<img class="avatar_square_24" src="{{ asset('assets/frontend/img/js.png') }}">--}}
                    <span class="h4 tag_info_title pl10"> {{ $tag->name }}</span>

                </div>
                {{--<p class="tag_info_desc mt10">{{ $tag->name }}</p>--}}

            </section>
            <section>
                <div class="title_head mt20">
                    <div class="title_detail">
                        <ul>
                            <li class="mr20 active">
                                <a href="#answer_list" data-toggle="tab"><i class="glyphicon glyphicon-question-sign"></i>问答</a></li>
                            {{--<li><a href="#wiki_list" data-toggle="tab"><i class="glyphicon glyphicon-book"></i>百科</a></li>--}}
                        </ul>

                    </div>
                </div>
                <div class="content tab-content" id="myTabContent1">
                    <div class="tab-pane fade in active" id="answer_list">
                        <ul>
                            @foreach($questions as $question)
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
                                            <a href="#" class="fllt">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{--百科--}}
                    {{--<div class="tab-pane fade" id="wiki_list">--}}
                        {{--<ul>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data-mongoDB打印出执行的语句--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data-mongoDB打印出执行的语句可以不--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_no"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_no"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚进行了提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句进行了提问--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_mid"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问点啥内--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句进行查询设置数据--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句测试--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data-mongoDB打印出执行的语句--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data-mongoDB打印出执行的语句可以不--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_no"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_no"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚进行了提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句进行了提问--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_mid"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问点啥内--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句进行查询设置数据--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句测试--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data-mongoDB打印出执行的语句--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data-mongoDB打印出执行的语句可以不--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_no"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_no"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚进行了提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句进行了提问--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_mid"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问点啥内--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句进行查询设置数据--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="clear_fix">--}}
                                {{--<ul class="num clear_fix">--}}
                                    {{--<li class="num_vote"><i>0</i>投票</li>--}}
                                    {{--<li class="num_answer_ok"><i>10</i>回答</li>--}}
                                    {{--<li class="num_scan"><i>50</i>浏览</li>--}}
                                {{--</ul>--}}
                                {{--<div class="question">--}}
                                    {{--<div class="questioner mt20">--}}
                                        {{--<a class="qser_name">Mno</a> 刚刚提问--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="describe">--}}
                                        {{--用spring-data语句测试--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="fllt">mongodb3.x</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}
                                    {{--<a href="#" class="fllt">springmvc</a>--}}

                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{$questions->appends(array_except(Request::query(), 'taglist_page'))->links()}}
                </div>
            </section>

            {{--<nav class="clear_fix">--}}
                {{--<ul class="pagination">--}}
                    {{--<li class="disabled"><a href="#">&laquo;</a></li>--}}
                    {{--<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>--}}
                    {{--<li><a href="#">2 </a></li>--}}
                    {{--<li><a href="#">3 </a></li>--}}
                    {{--<li><a href="#">4 </a></li>--}}
                    {{--<li><a href="#">5 </a></li>--}}
                    {{--<li><a href="#">&raquo;</a></li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
        </div>

        <!--侧栏-->
        @include('frontend.sidebar')
    </div>
@endsection