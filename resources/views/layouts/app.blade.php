<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"> {{--获取config('app.locale')  zh-CN--}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>
    <meta name="description" content="@yield('description', 'LaraBBS 爱好者社区')" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
<div id="app" class="{{ route_class() }}-page">  {{--文件在bootstrap/helpers.php中定义 将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制--}}

    @include('layouts._header')

    <div class="container">
        @include('layouts._message')
        {{--占位符，允许继承此页的子页面内容注入--}}
        @yield('content')
    </div>

    @include('layouts._footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>