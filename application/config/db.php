<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 25.04.2018
 * Time: 15:16
 */

namespace Application\Config;

class ConfigHandler
{
    static public $DbConfig = Array(
        'type' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'cms',
        'charset' => 'utf8',
        'user' => 'root',
        'pass' => ''
        );
}

