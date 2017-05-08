<?php

class Router {

    private $routes;

    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    /*
        return string;
     */
    private function GetURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {

        // получить строку запроса
        $uri = $this->GetURI();

        // проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                // определить какой  контроллер и action обрабатывают запрос

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;

                // подключить файл класса контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // создать объект, вызвать action
                $controlleObject = new $controllerName;
                //$result = $controlleObject->$actionName($parameters);
                $result = call_user_func_array(array($controlleObject, $actionName), $parameters);
                if ($result != null) {
                    break;
                }
            }
        }







    }

}