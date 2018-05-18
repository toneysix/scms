<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 25.04.2018
 * Time: 15:40
 */

namespace Controllers;

class Main extends \Application\Kernel\Controller
{

    public function index()
    {
        return $this->render( 'Main' );
    }

}