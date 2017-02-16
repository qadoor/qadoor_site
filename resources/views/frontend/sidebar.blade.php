<!--侧栏-->
<div class="col-xs-12 col-md-3 sub_menu" >
    {{--<section class="login_info mt20" style="display: none;">--}}
        {{--<div class="side-ask alert alert-warning">--}}
            {{--<p>--}}
                {{--QAdoor问答门是一个专注于解决编程问题，提高开发技能的社区。--}}
            {{--</p>--}}
            {{--<a href="/user/oauth/google" class="mt20 btn btn-google btn-block">--}}
                {{--<span class="icon-qa-bg-google"></span>--}}
                {{--使用 Google 登录--}}
            {{--</a>--}}
            {{--<a href="/user/oauth/weibo" class="mt20 btn btn-weibo btn-block">--}}
                {{--<span class="icon-qa-bg-weibo"></span>--}}
                {{--使用微博登录--}}
            {{--</a>--}}
            {{--<a href="/user/oauth/weixin" class="mt20 btn btn-weixin btn-block">--}}
                {{--<span class="icon-qa-bg-weixin"></span>--}}
                {{--使用微信登录--}}
            {{--</a>--}}

            {{--<div class="mt20 side-system-notice">--}}
                {{--<i class="fa fa-bullhorn pull-left"></i><a class="side-system-notice--title"--}}
                                                           {{--href="http://sfdc-2016hz.bagevent.com">SFDC--}}
                    {{--杭州开发者大会，优惠售票进行中，长三角伙伴看过来！</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section class="ad_second mt20">
        <div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- QADoor侧栏顶部广告1 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-4980361559626740"
                 data-ad-slot="5264027956"
                 data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </section>
    <section class="Headline mt40">
        <div class="widget_headline widget-box mt20 mb30">
            <h2 class="h4 widget-box_title">最热头条</h2>
            <ul class="list_block pt5 pl20 pb5">

                @foreach($questions as $ques)
                    <li class="pt10">
                        <a href="/detail/{{ $ques->id }}" class="fc">{{ $ques->title }}</a>
                        <p class=""><span class="mr5 praise">{{ $ques->votes }} 赞</span> | <span class="ml5">0 评论</span></p>
                    </li>
                @endforeach

                <a href="/qa_list" target="" class="f12 fc headline_more">更多头条内容→</a>
            </ul>
        </div>
    </section>

    {{--<section class="hot_favorite mt40">--}}
        {{--<p class="favorite_title mb20">热门收藏夹 <span><a href="#">换一组</a></span></p>--}}
        {{--<ul class="favorite_content">--}}
            {{--<li class="favorite_list">--}}
                {{--<img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">--}}
                {{--<div class="favorite_body">--}}
                    {{--<a target="_blank" class="" href="#">增加前端姿势</a>--}}
                    {{--<p class="favorite_num">--}}
                        {{--<span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="favorite_list">--}}
                {{--<img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">--}}
                {{--<div class="favorite_body">--}}
                    {{--<a target="_blank" class="" href="#">增加前端姿势</a>--}}
                    {{--<p class="favorite_num">--}}
                        {{--<span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="favorite_list">--}}
                {{--<img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">--}}
                {{--<div class="favorite_body">--}}
                    {{--<a target="_blank" class="" href="#">增加前端姿势</a>--}}
                    {{--<p class="favorite_num">--}}
                        {{--<span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="favorite_list">--}}
                {{--<img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">--}}
                {{--<div class="favorite_body">--}}
                    {{--<a target="_blank" class="" href="#">增加前端姿势</a>--}}
                    {{--<p class="favorite_num">--}}
                        {{--<span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="favorite_list">--}}
                {{--<img class="favorite_icon" src="{{ asset('assets/frontend/img/10.png') }}" width="32">--}}
                {{--<div class="favorite_body">--}}
                    {{--<a target="_blank" class="" href="#">增加前端姿势</a>--}}
                    {{--<p class="favorite_num">--}}
                        {{--<span>155</span> 个条目 <span class="division">|</span> <span>150</span> 人关注--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</li>--}}

        {{--</ul>--}}
    {{--</section>--}}
</div>