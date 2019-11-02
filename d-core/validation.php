<?php

// validation.php packs helper functions for validation

function isEmail(string $string)
{
    if (filter_var($string, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
}
