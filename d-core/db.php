<?php

require_once(__DIR__ . '/load.php');
loadCore('DB.class.php');

function query($query, $args = [])
{
    return DB::run($query, $args);
}

function fetch($query, $args = [])
{
    return DB::run($query, $args)->fetch();
}

function fetchAll($query, $args = [])
{
    return DB::run($query, $args)->fetchAll();
}

function rowCount($query, $args = [])
{
    return DB::run($query, $args)->rowCount();
}


// for fetching one column value such as id or count

function fetchColumn($query, $args = [])
{
    return DB::run($query, $args)->fetchColumn();
}
