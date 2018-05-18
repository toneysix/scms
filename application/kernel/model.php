<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 25.04.2018
 * Time: 15:51
 */

namespace Application;
use PDO;
/**
 * Base model
 *
 * PHP version 7.0
 */
abstract class Model
{
    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected static function GetDB()
    {

    }
}