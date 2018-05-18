<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 25.04.2018
 * Time: 15:26
 */

namespace Application\Kernel;

abstract class Controller
{
    final public function renderLayout( $body )
    {
        ob_start();
        require ROOTPATH.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR."main.php";
        return ob_get_clean();
    }

    final public function render( $viewName, array $params = [] )
    {
        $viewFile = ROOTPATH.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.lcfirst( $viewName ).'.php';
        extract( $params );
        ob_start();
        require $viewFile;
        $body = ob_get_clean();
        ob_end_clean();
        return $this->renderLayout( $body );
    }

}