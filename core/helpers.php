<?php
function assets($path = '/')
{
    return URL . '/public/assets' . $path;
}
function css($path = '/')
{
    return URL . '/public/css' . $path;
}
function js($path = '/')
{
    return URL . '/public/js' . $path;
}
function libs($path = '/')
{
    return URL . '/public/libs' . $path;
}
function base($path = '')
{
    return URL . $path;
}
