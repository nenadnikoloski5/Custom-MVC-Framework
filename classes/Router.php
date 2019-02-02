<?php

class Router {

    public static $validRoutes = [];

    public static function set($route, $function){

        self::$validRoutes[] = $route;



        if ($_GET['url'] == $route) {
        // this runs the contents of the function of the route
        $function->__invoke();
      }; 


        
    }
}