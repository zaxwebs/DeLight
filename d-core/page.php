<?php

require_once(__DIR__ . '/load.php');
loadCore('flash.php');

// actions to perform at the start of a page
function pageStart()
{
    ob_start();
}

// actions to perform at the end of a page
function pageEnd()
{
    ob_end_flush();
}

function putHeader(string $title = null)
{
    if ($title === null) $title = APP_NAME;
    pageStart();
    include(PARTIALS . 'header.php');
}

function putFooter()
{
    include(PARTIALS . 'footer.php');
    pageEnd();
}
