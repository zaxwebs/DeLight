<?php

loadCore('db.php');

function getById(int $id, string $table, array $selects = [])
{
    $select = empty($selects) ? '*' : implode(', ', $selects);
    return fetch('select ' . $select . ' from ' . $table . ' where id=' . $id);
}

function countById(int $id, string $table)
{
    return fetchColumn('select count(id) from ' . $table . ' where id=' . $id);
}

function getByWhere(string $table, string $where, array $selects = [])
{
    $select = empty($selects) ? '*' : implode(', ', $selects);
    return fetch('select ' . $select . ' from ' . $table . ' where ' . $where);
}
