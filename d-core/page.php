<?php

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
    include(DIR_PARTIALS . 'header.php');
}

function putFooter()
{
    include(DIR_PARTIALS . 'footer.php');
    pageEnd();
}
