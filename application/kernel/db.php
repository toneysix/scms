<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 25.04.2018
 * Time: 15:24
 */

namespace Application\Kernel;

class Db
{
    protected $pdo;

    public function __construct( array $settings )
    {
        $this->pdo = new \PDO( "{$settings['type']}:host={$settings['host']};dbname={$settings['dbname']};charset={$settings['charset']}",
        $settings['user'], $settings['pass'], null );
        $this->pdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
    }

    public function execute( $query, array $params = null )
    {
        if(is_null($params))
        {
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll();
        }
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();

    }
}