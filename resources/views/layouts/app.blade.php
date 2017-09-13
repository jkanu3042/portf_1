
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport" />
    <meta content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI." name="description" />
    <meta content="Semantic-UI, Theme, Design, Template" name="keywords" />
    <meta content="PPType" name="author" />
    <meta content="#ffffff" name="theme-color" />
    <title>Welcome to KanuWeb</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/default.css" rel="stylesheet" type="text/css" />
    <link href="/css/pandoc-code-highlight.css" rel="stylesheet" type="text/css" />
    @yield('style')

</head>

@if (Auth::guest())
    <li><a href="{{ url('/auth/login') }}">Login</a></li>
    <li><a href="{{ url('/auth/register') }}">Register</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ route('sessions.destroy') }}">
                    로그아웃
                </a>
            </li>
        </ul>
    </li>
@endif


<body>
{{-- Navi section --}}
<div class="ui inverted huge borderless fixed fluid menu">
    <a class="header item" href="{{route('home')}}">KanuWeb</a>
    <div class="right menu">
        @if(Auth::guest())
            <a class="item" href="{{route('sessions.create')}}">로그인</a>
            <a class="item" href="{{route('users.create')}}">회원가입</a>
        @else
            <div style="position: relative; top:13px; color:white;">
                {{Auth::user()->name.'님 환영합니다.'}}
            </div>
            <a class="item" href="{{ route('sessions.destroy') }}">
                        로그아웃
            </a>
        @endif
    </div>
</div>
<div class="ui grid">
    {{--side Section--}}
    <div class="row">
        <div class="column" id="sidebar">
            <div class="ui secondary vertical fluid menu">
                <a class="item" href="{{route('home')}}">Home</a>
                <a class="item" href="{{route('posts.index')}}">자유게시판</a>
                <a class="item">갤러리</a>
                <a class="item">방명록</a>
            </div>
        </div>
     {{-- Content Section --}}
        <div class="column" id="content">
            <div class="ui grid">
                <div class="container">
                    @yield('content')
                </div>
                <div class="ui divider"></div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script src="/js/app.js/"></script>
@yield('script')
<style type="text/css">
    body {
        display: relative;
    }

    #sidebar {
        position: fixed;
        top: 51.8px;
        left: 0;
        bottom: 0;
        width: 18%;
        background-color: #f5f5f5;
        padding: 0px;
    }
    #sidebar .ui.menu {
        margin: 2em 0 0;
        font-size: 16px;
    }
    #sidebar .ui.menu > a.item {
        color: #337ab7;
        border-radius: 0 !important;
    }
    #sidebar .ui.menu > a.item.active {
        background-color: #337ab7;
        color: white;
        border: none !important;
    }
    #sidebar .ui.menu > a.item:hover {
        background-color: #4f93ce;
        color: white;
    }

    #content {
        margin-left: 19%;
        width: 81%;
        margin-top: 3em;
        padding-left: 3em;
        float: left;
    }
    #content > .ui.grid {
        padding-right: 4em;
        padding-bottom: 3em;
    }
    #content h1 {
        font-size: 36px;
    }
    #content .ui.divider:not(.hidden) {
        margin: 0;
    }
    #content table.ui.table {
        border: none;
    }
    #content table.ui.table thead th {
        border-bottom: 2px solid #eee !important;
    }
</style>
</html>
