<?php

namespace core;

class Router {
    //роуты
protected $routes = [];
//метод добавления роутов
public function add($route, $params){
    $this->routes[$route] = $params;
}

    /**
     * @return array
     */
    //отобразить все роуты
    public function getRoutes()
    {
        return $this->routes;
    }



}