@extends('layouts.qadoorheader')
@section('qadoor_meta')
    <title>QADoor问答门首页</title>
    <meta name="keywords" content="QADoor,QADoor.com,qadoor.com,问答门">
    <meta name="author" content="Lucas, 网站:www.yuanpengfei.com">
    <meta name="description" content="QADoor(问答门)是一个问答索引站,聚合了互联网各大平台的问答内容,致力于为软件开发相关人员提供高质量的问答结果参考.">
@endsection
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
                                        @elseif($question->answers->count() >= 5)
                                            <li class="num_answer_no"><i>{{ $question->answers->count() }}</i>回答</li>
                                        @else
                                            <li class="num_answer_ok"><i>{{ $question->answers->count() }}</i>回答</li>
                                        @endif
                                        <li class="num_scan"><i>50</i>浏览</li>
                                    </ul>
                                    <div class="question">
                                        <div class="questioner mt20">
                                            <a class="qser_name">lucas</a> 刚刚提问
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
        @include('frontend.sidebar')
    </div>
@endsection