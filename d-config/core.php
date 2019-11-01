<?php


// core.php is used to set up the app configuration.
// You can define globals, constants, etc. here.


// app
const APP_NAME = 'DeLight';

// server

// database
const DB_HOST = 'localhost';
const DB_NAME = 'light';
const DB_USER = 'root';
const DB_PASS = '';
const DB_CHAR = 'utf8';

// path helpers
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
const PARTIALS = ROOT . '/d-partials/';
const CORE = ROOT . '/d-core/';
const CONFIG = ROOT . '/d-config/'; 


// page config such as header and footer can be done at core/page.php
