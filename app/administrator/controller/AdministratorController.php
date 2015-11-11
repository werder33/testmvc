<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 07.11.2015
 * Time: 14:47
 */

namespace app\administrator\controller;


class AdministratorController
{
    public function getIndex()
    {
        require_once ('app/administrator/view/index.php');
    }

    public function getUsers()
    {
        require_once('app/administrator/view/users.php');
    }

}