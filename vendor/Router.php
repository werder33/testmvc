<?php

namespace vendor;


class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/app/route.php';
        $this->routes = include($routesPath);
        $routesAdmin = 'app/administrator/adminRoutes.php';
        $this->adminRoutes = include($routesAdmin);
    }

    //возващает строку (url)
    private function getUrl()
    {
        $url = urldecode(trim(($_SERVER['REQUEST_URI'])));
        if ($url) {

            return $url;
        }
    }


    public function StartOne()
    {
        $url = $this->getUrl(); // url строка
        $arr = $this->routes;   // роуты из массива app\route.php


        if (isset($arr[$url])) {
            $controller = $arr[$url];
            $controllerArray = explode('@', $controller);
            $controllerName = array_shift($controllerArray);
            $actionName = array_shift($controllerArray);
            $controllerFile = 'app\\controllers\\' . $controllerName;
            $controllerObj = new $controllerFile;
            $controllerObj->$actionName();


        } else
            echo " not found :( ";
    }

    public function StartAdmin()
    {
        $url = $this->getUrl(); // url строка

        $arr = $this->adminRoutes;   // роуты из массива app\administrator\route.php


        $controller = $arr[$url];

        $controllerArray = explode('@', $controller);
        $controllerName = array_shift($controllerArray);
        $actionName = array_shift($controllerArray);
        $controllerFile = 'app\\administrator\\controller\\' . $controllerName;
        $controllerObj = new $controllerFile;
        $controllerObj->$actionName();


    }


    public function Start()
    {
        $url = $this->getUrl();
        $arr = $this->routes;
        $arrUrl = explode('/', $url);


        $zero = array_shift($arrUrl);  // вырезаем пустой элемент массивв
        $path = array_shift($arrUrl);  // путь
        $parameters = $arrUrl;           // переменные
        //echo count($parameters);


        if ($path == 'admin') {
            $this->StartAdmin();
        } elseif (count($parameters) == 0) {
            $this->StartOne();
        } else

            if (isset($arr["/" . $path . "/{id}"])) {           // если нужно передать перемменные

                $controller = $arr["/" . $path . "/{id}"];   // выбираем контроллер из массива route

                $controllerArray = explode('@', $controller);
                $controllerName = array_shift($controllerArray);
                $actionName = array_shift($controllerArray);
                // echo "$controllerName<br> $actionName";
                $controllerFile = 'app\\controllers\\' . $controllerName;
                //echo $controllerName;


                $controllerObj = new $controllerFile;   //создаем объект контролера
                call_user_func_array(array($controllerObj, $actionName), $parameters);
                //  $controllerObj->$actionName();

            } else
                echo "не работает";
    }


}
