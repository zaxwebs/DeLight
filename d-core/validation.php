<?php

// auth.php packs helper functions for authentication

require_once(__DIR__ . '/load.php');

function isEmail($string)
{
    if (filter_var($string, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
}
