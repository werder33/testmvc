<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 06.11.2015
 * Time: 14:47
 */

namespace app\Models;
use PDO;
use vendor\DataBase;

class News extends DataBase
{

     public function getNews()
    {
        $db = $this->db_connect();

        $STH = $db -> query('SELECT * from news');

        return $STH;

# устанавливаем режим выборки

    }

}