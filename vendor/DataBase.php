<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 06.11.2015
 * Time: 16:07
 */

namespace vendor;

use PDO;


class DataBase
{
    private $db_settings;

    public function __construct()
    {
        $routesPath = ROOT . '/setting/db_setting.php';
        $this->db_settings = include($routesPath);
    }

    public function db_connect()
    {
        $db_set = $this->db_settings;
        //print_r($db_set);
        try {
            $host = $db_set['host'];
            $dbname = $db_set['dbname'];

            # MySQL через PDO_MYSQL
            $DB = new PDO("mysql:host=$host;dbname=$dbname", $db_set['user'], $db_set['pass']);
            //PDO::ERRMODE_EXCEPTION
            // В большинстве ситуаций этот тип контроля выполнения скрипта предпочтителен.
            // Он выбрасывает исключение, что позволяет вам ловко обрабатывать ошибки и скрывать
            // щепетильную информацию.
            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $DB;
        } catch (PDOException $e) {
            echo $e->getMessage();

        }


    }

}