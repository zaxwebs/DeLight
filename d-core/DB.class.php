<?php

class DB
{
    // singleton DB

    protected static $instance = null;

    protected function __construct()
    { }
    protected function __clone()
    { }

    public static function instance()
    {
        // if instance is null set it to new PDO object
        if (self::$instance === null) {
            $options  = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => FALSE,
            );
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHAR;
            self::$instance = new PDO($dsn, DB_USER, DB_PASS, $options);
        }
        return self::$instance;
    }


    // proxy to native PDO methods
    public static function __callStatic($method, $args)
    {
        return call_user_func_array(array(self::instance(), $method), $args);
    }

    public static function run($sql, $args = [])
    {
        if (!$args) {
            return self::instance()->query($sql);
        }
        $statement = self::instance()->prepare($sql);
        $statement->execute($args);
        return $statement;
    }
}
