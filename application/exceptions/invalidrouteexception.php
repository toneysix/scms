<?php
/**
 * Created by PhpStorm.
 * User: Infinity.Corp
 * Date: 14.05.2018
 * Time: 15:49
 */

namespace Application\Exceptions;

class InvalidRouteException extends \Exception
{
    public function __construct( $message, $code = 0, \Exception $previous = null )
    {
        parent :: __construct( $message, $code, $previous );
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}