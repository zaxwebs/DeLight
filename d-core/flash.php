<?php

function prefixName($name, $prefix)
{
    return $prefix . '-' . $name;
}

function setFlash($name, $value)
{
    $prefixed = prefixName($name, 'flash');
    $_SESSION[$prefixed] = $value;
}

function unsetFlash($name)
{
    $prefixed = prefixName($name, 'flash');
    unset($_SESSION[$prefixed]);
}

function hasFlash(string $name)
{
    $prefixed = prefixName($name, 'flash');
    if (isset($_SESSION[$prefixed])) {
        return true;
    }
}

function getFlash(string $name, bool $reset = true)
{
    $prefixed = prefixName($name, 'flash');
    if (hasFlash($name)) {
        $value = $_SESSION[$prefixed];
        if ($reset) unset($_SESSION[$prefixed]);
        return $value;
    }
}

function echoFlash(string $name, bool $reset = true)
{
    echo getFlash($name, $reset);
}

function setAlert(string $message, string $type = 'info', string $name = 'primary')
{
    $prefixed = prefixName($name, 'alert');
    setFlash($prefixed, ['message' => $message, 'type' => $type]);
}

function echoAlert(string $name = 'primary', string $class = '')
{
    $prefixed = prefixName($name, 'alert');
    if (hasFlash($prefixed)) {
        $alert = getFlash($prefixed);
        $class .= ' alert alert-' . $alert['type'];
        echo '<div class="' . $class . '" role="alert"><div class="container">' . $alert['message'] . '</div></div>';
    }
}
