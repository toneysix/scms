<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 25.04.2018
 * Time: 15:50
 */

namespace Application\Models;
use PDO;

class User extends \Application\Model
{
    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static :: GetDB();
        $stmt = $db->query( 'SELECT id, name FROM users' );
        return $stmt->fetchAll( PDO :: FETCH_ASSOC );
    }
}