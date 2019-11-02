<?php

// load.php makes it easy to include files

function loadFile(string $file)
{
    require_once($_SERVER['DOCUMENT_ROOT'] . '/' . $file);
}

function loadConfig(string $file)
{
    loadFile('d-config/' . $file);
}

function loadCore(string $file)
{
    loadFile('d-core/' . $file);
}

function loadCustom(string $file)
{
    loadFile('d-custom/' . $file);
}

function loadModel(string $file)
{
    loadFile('d-models/' . $file);
}
