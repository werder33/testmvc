<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 08.11.2015
 * Time: 12:50
 */

namespace app\administrator\controller;


class AdminPortfolioController
{
    public function getIndex()
    {
        require_once ('app/administrator/view/portfolio.php');
    }

}