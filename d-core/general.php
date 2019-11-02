<?php

function redirect(string $url = '')
{
    header('Location: /' . $url);
    exit;
}

function _get(string $key, string $default = null)
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

function _post(string $key, string $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}
