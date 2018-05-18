<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 25.04.2018
 * Time: 15:09
 */

namespace Application\Kernel;

class Router
{
    public function resolve()
    {
        $route = "";
        if( ( $pos = strpos( $_SERVER[ 'REQUEST_URI' ], '?' ) ) !== false )
        {
            $route = substr( $_SERVER[ 'REQUEST_URI' ], 0, $pos );
        }
        $route = is_null( $route ) ? $_SERVER[ 'REQUEST_URI' ] : $route;
        $route = explode( '/', $route );
        array_shift( $route );
        $result[ 0 ] = array_shift( $route );
        $result[ 1 ] = array_shift( $route );
        $result[ 2 ] = $route;
        return $result;
    }
}