<?php

function redirect(string $url = '')
{
    header('Location: /' . $url);
    exit;
}

function GET(string $key, $default = null)
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

function POST(string $key, $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}
