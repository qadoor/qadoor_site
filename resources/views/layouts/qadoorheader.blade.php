<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    <meta name="baidu-site-verification" content="Z7u08pk92p">
    @yield('qadoor_meta')

    <!-- 收藏夹小图标 -->
    <link rel="icon" href="{{ asset('assets/frontend/img/qadoor_logo_32_32.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/frontend/img/qadoor_logo_32_32.ico') }}" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/public.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/qadoor.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <div class="alert alert-danger topframe" role="alert">目测你是比较恋旧的人啊，比较喜欢一些古董级的玩意,你的浏览器实在<strong>太太太太太太旧了</strong>，告别旧爱，升级浏览器开始一段轰轰烈烈的新旅程吧！
        <a target="_blank" class="alert-link" href="http://browsehappy.com">立即升级</a></div>
    <![endif]-->
</head>
<body>
<header id="header" class="container">
    <div class="head row">
        <div class="logo"><a href="/"><img src="{{ asset('assets/frontend/img/logo.png') }}" alt="QAdoor"></a></div>
        <div class="nav nav_first">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">首页</a></li>
                        <li><a href="/qa_list">推荐</a></li>
                        <li><a href="/qa_list">问答</a></li>
                        {{--<li><a href="#">Android</a></li>--}}
                        {{--<li><a href="#">前端</a></li>--}}
                        {{--<li><a href="#">IOS</a></li>--}}
                        {{--<li><a href="#">后台</a></li>--}}
                        {{--<li><a href="#">产品</a></li>--}}

                        @foreach($cats->take(5) as $cat)
                            <li><a href="/category/{{ $cat->id }}">{{ $cat->name }}</a></li>
                        @endforeach

                        {{--<li><a href="#"><i class="glyphicon glyphicon-heart"></i>注册</a></li>--}}
                        {{--<li><a href="#"><i class="glyphicon glyphicon-user"></i>登录</a></li>--}}
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <!-- /.container-fluid -->

        <div class="search">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="搜索关键词">
                <button type="button" class="btn btn-default" id="examplebtn1">搜索</button>
            </div>
        </div>
        {{--<div class="login">--}}
            {{--<a href="#">注册 </a>·<a href="#"> 登录</a>--}}
        {{--</div>--}}
    </div>
</header>
<div class="container-fluid nav_second">
    <div class="nav  container">
        <ul class="clear_fix">
            <li><a href="/"><i class="glyphicon glyphicon-home"></i>Home</a></li>

            @foreach($tags as $tag)
                <li><a href="/tag_list/{{ $tag->id }}">{{ $tag->name }}</a></li>
            @endforeach

            <li><a href="#">&gt;&gt;</a></li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>

@yield('content')

<!--尾部-->
<footer class="container-fluid row mt40">
    <div class="container row mt40">
        <dl class="col-xs-12 col-sm-6 col-md-3 about clear_fix">
            <dt class="mb10">网站相关</dt>
            <dd><a href="https://github.com/qadoor" target="_blank">关于我们</a></dd>
            {{--<dd><a href="#">服务条款</a></dd>--}}
            {{--<dd><a href="#">帮助中心</a></dd>--}}
            {{--<dd><a href="#">声望与权限</a></dd>--}}
            {{--<dd><a href="#">编辑器语法</a></dd>--}}
            {{--<dd><a href="#">每周精选</a></dd>--}}
            {{--<dd><a href="#">App 下载</a></dd>--}}
            {{--<dd><a href="#">社区服务中心</a></dd>--}}
        </dl>

        <dl class="col-xs-12 col-sm-6 col-md-3 contact clear_fix">
            <dt class="mb10">联系合作</dt>
            <dd><a href="https://github.com/qadoor" target="_blank">联系我们</a></dd>
            {{--<dd><a href="#">加入我们</a></dd>--}}
            {{--<dd><a href="#">合作伙伴</a></dd>--}}
            {{--<dd><a href="#">媒体报道</a></dd>--}}
            {{--<dd><a href="#">建议反馈</a></dd>--}}
        </dl>
        <dl class="col-xs-12 col-sm-6 col-md-3 link clear_fix">
            <dt class="mb10">常用链接</dt>
            <dd><a href="http://www.phpcomposer.com/" target="_blank">Composer中国镜像</a></dd>
            {{--<dd><a href="#" target="_blank">笔记插件: Firefox</a></dd>--}}
            {{--<dd><a href="#" target="_blank">文档镜像</a></dd>--}}
            {{--<dd><a href="#" target="_blank">社区访谈</a></dd>--}}
            {{--<dd><a href="#" target="_blank">D-DAY 技术沙龙</a></dd>--}}
            {{--<dd><a href="#" target="_blank">黑客马拉松 Hackathon</a></dd>--}}
            {{--<dd><a href="#" target="_blank">域名搜索注册</a></dd>--}}
        </dl>
        <dl class="col-xs-12 col-sm-6 col-md-3 follow clear_fix">
            <dt class="mb10">关注我们</dt>
            <dd><a href="https://github.com/qadoor" target="_blank">Github</a></dd>
            {{--<dd><a href="#" target="_blank">Twitter</a></dd>--}}
            {{--<dd><a href="#" target="_blank">新浪微博</a></dd>--}}
            {{--<dd><a href="#" target="_blank">团队日志</a></dd>--}}
            {{--<dd><a href="#" target="_blank">产品技术日志</a></dd>--}}
            {{--<dd><a href="#" target="_blank">社区运营日志</a></dd>--}}
            {{--<dd><a href="#" target="_blank">市场运营日志</a></dd>--}}
        </dl>
        <div class="copyright  col-xs-12 col-md-12 mb40">
            上海森思信息科技有限公司<br />
            © 2016 沪ICP备14034074号-7
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
@yield('customjs')
</body>
</html>