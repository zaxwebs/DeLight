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
const DIR_PARTIALS = ROOT . '/d-partials/';
const DIR_CORE = ROOT . '/d-core/';
const DIR_CONFIG = ROOT . '/d-config/';
const DIR_CUSTOM = ROOT . '/d-custom/';
const DIR_MODEL = ROOT . '/d-model/';


// page config such as header and footer can be done at core/page.php
