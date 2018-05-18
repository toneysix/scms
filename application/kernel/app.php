<?php

/**
* Created by PhpStorm.
* User: Infinity
* Date: 25.04.2018
* Time: 15:09
*/

include ROOTPATH.DIRECTORY_SEPARATOR.'..\application\config'.DIRECTORY_SEPARATOR.'db.php';


class Application
{
    protected static $Router;
    protected static $DB;
    protected static $Kernel;

    public static function Init()
    {
        spl_autoload_register( [ 'static', 'loadClass' ] );

        static::$Router = new Application\Kernel\Router();
        static::$Kernel = new Application\Kernel\Core();
        static::$DB = new Application\Kernel\Db( Application\Config\ConfigHandler::$DbConfig );

        error_reporting( E_ALL );
        set_exception_handler( [ 'Application', 'HandleException' ] );
    }

    public static function GetRouter()
    {
        return static :: $Router;
    }

    public static function GetDB()
    {
        return static :: $DB;
    }

    public static function GetKernel()
    {
        return static :: $Kernel;
    }

    public static function loadClass( $className )
    {
        echo 'Trying to load class: '. $className .'<br>';
        $className = lcfirst( str_replace( '\\', DIRECTORY_SEPARATOR, $className ) );
        require_once ROOTPATH.DIRECTORY_SEPARATOR.'..\\'.$className.'.php';
    }

    public static function HandleException( Throwable $e )
    {
        /*if ($e instanceof \App\Exceptions\InvalidRouteException)
            echo static::$kernel->launchAction('Error', 'error404', [$e]);
        else
            echo static::$kernel->launchAction('Error', 'error500', [$e]);*/
    }
}