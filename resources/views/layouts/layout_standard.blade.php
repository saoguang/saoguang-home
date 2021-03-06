<!doctype html>
{{--lang="{{ app()->getLocale() }}"--}}
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Blog Design By Saoguang">
    <meta name="keywords" content="Saoguang">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    @section('title')
        <title>{{ config('app.name', 'Laravel') }}</title>
    @show
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('assets/i/favicon.png')}}">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="{{asset('assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/i/app-icon72x72@2x.png')}}">
    <meta name="msapplication-TileImage" content="{{asset('assets/i/app-icon72x72@2x.png')}}">
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <!-- 流量统计 start -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?a529b91311473760a077fd780db65c57";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- 流量统计 end -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script> (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8174840182897740",
            enable_page_level_ads: true
        });
    </script>
    @yield('head-extend'){{-- 头部扩展 --}}
</head>
<body  id="blog">
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        {{--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo" />--}}
        <h2 class="am-hide-sm-only">
            <a href="{{route('index')}}" title="Saoguang | For Fun">🙈SafetyEngineer之路😀</a>
        </h2>
    </div>
</header>
<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}">
        <span class="am-sr-only">导航切换</span>
        <span class="am-icon-bars"></span>
    </button>
    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="{{Request::url() == route('index') ? 'am-active' : ''}}">
                <a href="{{route('index')}}">首页</a>
            </li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    文章
                    <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li>
                        <a href="{{route('archives', 'year='.date('Y'))}}">所有文章</a>
                    </li>
                    <li>
                        <a href="{{route('folder-article', 1)}}">分类</a>
                    </li>
                </ul>
            </li>
            <li class="{{Request::url() == route('about-me') ? 'am-active' : ''}}">
                <a href="{{route('about-me')}}">关于我</a>
            </li>
            <li class="{{Request::url() == route('it-resource') ? 'am-active' : ''}}">
                <a href="{{route('it-resource')}}">IT学习资料</a>
            </li>
            <li class="{{Request::url() == route('wall') ? 'am-active' : ''}}">
                <a href="{{route('wall')}}">真实的我</a>
            </li>
            @auth
                <li class="{{Request::url() == route('admin') ? 'am-active' : ''}}">
                    <a href="{{route('admin')}}">网站管理</a>
                </li>
            @endauth
        </ul>
        <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
            </div>
        </form>
    </div>
</nav>
<hr>
<!-- nav end -->
@include('errors.error_msg')
@yield('banner')
@yield('content')
<!-- footer start -->
<footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>👻Good Sentence</h3>
            <p class="am-text-sm">Sometimes it is the people who no one imagines anything of who do the things that no one can imagine. —— The Imitation Game
                <br>
                <br>Who will fall in love with ordinary？ —— The Imitation Game
                <br>
                <br>You got a dream, you gotta protect it. —— The Pursuit of Happyness
                <br>
            </p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>我的</h3>
            <p>
                <a href="https://github.com/saoguang" target="_blank">
                    <span class="am-icon-github am-icon-fw blog-icon blog-icon"></span>
                </a>
                <a href="https://weibo.com/u/5248740631" target="_blank">
                    <span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span>
                </a>
            </p>
            <h3>联系我:</h3>
            <p>Q Q : 51747708 (请注明来意)
                <br>邮箱 : saoguang@vip.qq.com
                <br>地点 : 湖南理工学院 5214
                <br>CSDN博客 : <a href="https://blog.csdn.net/u011580175" target="_blank">@骚骚皮皮</a>
            </p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h1>对思维，请放纵他</h1>
            <h3>The Method</h3>
            <p>
            <ul>
                <li>How to explore.</li>
                <li>How to find out.</li>
                <li>How to think.</li>
                <li>...</li>
                @guest
                    <li>
                        <a href="{{route('login')}}">😆Magical Entrance</a>
                    </li>
                @endguest
            </ul>
            </p>
        </div>
    </div>
    <div class="blog-text-center">Copyright © Saoguang All Rights Reserved
        <a href="http://www.miibeian.gov.cn" rel="nofollow" target="_blank">湘ICP备18013534号-1</a>
        <a href="https://tongji.baidu.com/web/25909160/welcome/login" title="百度统计" target="_blank">百度统计</a>
    </div>
</footer>
<!-- footer end -->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{asset('assets/js/amazeui.ie8polyfill.min.js')}}"></script>
<![endif]-->
<script src="{{asset('assets/js/amazeui.min.js')}}"></script>
@yield('script-extend')
</body>
</html>
