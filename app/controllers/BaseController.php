<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 14.10.2015
 * Time: 20:17
 */

namespace app\controllers;

use app\Models\News;

class BaseController
{
    public function getIndex()
    {
        require_once(ROOT . '/public/view/index.php');

    }




}