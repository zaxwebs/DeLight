<?php

// auth.php packs helper functions for authentication

require_once(__DIR__ . '/load.php');


function encryptPassword(string $password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword(string $password, string $encryptedPassword)
{
    return verify_password($password, $encryptedPassword);
}
