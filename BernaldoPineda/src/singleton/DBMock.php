<?php

namespace singleton;

class DBMock
{
    private static $instance;
    protected function __construct()
    {
        echo "Connecting to a DB\n";
    }
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
            echo "Creando nueva instancia\n";
        } else {
            echo "Ya existe instancia\n";
        }
        return static::$instance;
    }
    private function __clone()
    {
    }
}
