<?php
/**
 * @return mixed
 * @content 调用 {{ route_class() }}-page
 * 将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}