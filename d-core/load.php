<?php

// load.php makes it easy to include files

function loadFile($file)
{
    require_once($_SERVER['DOCUMENT_ROOT'] . '/' . $file);
}

function loadConfig($file)
{
    loadFile('d-config/' . $file);
}

function loadCore($file)
{
    loadFile('d-core/' . $file);
}

function loadCustom($file)
{
    loadFile('d-custom/' . $file);
}
