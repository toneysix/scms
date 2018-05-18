<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 25.04.2018
 * Time: 15:14
 */


namespace Application\Kernel;


class Core
{

    public $defaultControllerName = 'main';
    public $defaultActionName = "index";

    public function launch()
    {
        list( $controllerName, $actionName, $params ) = \Application :: GetRouter()->resolve();
        echo $this->action( $controllerName, $actionName, $params );
    }

    public function action( $controllerName, $actionName, $params )
    {
        $controllerName = empty( $controllerName ) ? $this->defaultControllerName : lcfirst( $controllerName );
        //if(!file_exists( ROOTPATH.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR.$controllerName.'.php' ) )
            //throw new \App\Application\InvalidRouteException();
        require_once ROOTPATH.DIRECTORY_SEPARATOR.'..\\application\\controllers'.DIRECTORY_SEPARATOR.$controllerName.'.php';
        //if( !class_exists( "\\Controllers\\".ucfirst( $controllerName  ) )
            // throw new \Application\Exceptions\InvalidRouteException( "Класс " . "\\Controllers\\".ucfirst( $controllerName  ) . ' не существует!' );
        $controllerName = "\\Controllers\\".lcfirst( $controllerName );
        $controller = new $controllerName;
        $actionName = empty( $actionName ) ? $this->defaultActionName : $actionName;
        //if (!method_exists( $controller, $actionName ) )
        //throw new \Application\Exceptions\InvalidRouteException();
        return $controller->$actionName( $params );
    }
}