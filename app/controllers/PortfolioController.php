<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 07.11.2015
 * Time: 13:19
 */

namespace app\controllers;
use app\Models\Portfolio;

class PortfolioController
{
    public function getIndex()
    {
        $obj = new Portfolio();
        $port = $obj -> getPortfolio();
      // $arr = $port->fetch();
            

       // print_r($arr);
        require_once(ROOT . '/public/view/portfolio.php');
    }

}