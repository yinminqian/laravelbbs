<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','博客系统')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')
{{--引入外部的文件--}}


<div class="container">
    @include('shared._messages')
@yield('content')
{{--占位符--}}


    @include('layouts._foots')
</div>

<script src="/js/app.js"></script>
</body>
</html>