<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 07.11.2015
 * Time: 13:44
 */

namespace app\Models;


use vendor\DataBase;

class Portfolio extends DataBase
{
    public  function getPortfolio()
    {
        $db = $this->db_connect();

        $STH = $db->query('SELECT * from portfolio');

        return $STH;
    }

}