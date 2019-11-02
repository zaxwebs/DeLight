<?php

loadCore('DB.class.php');

function query(string $query, array $args = [])
{
    return DB::run($query, $args);
}

function fetch(string $query, array $args = [])
{
    return DB::run($query, $args)->fetch();
}

function fetchAll(string $query, array $args = [])
{
    return DB::run($query, $args)->fetchAll();
}

function rowCount(string $query, array $args = [])
{
    return DB::run($query, $args)->rowCount();
}


// for fetching one column value such as id or count

function fetchColumn(string $query, array $args = [])
{
    return DB::run($query, $args)->fetchColumn();
}
