<?php

class Controller extends Database {


    public static function view($viewName){
        require_once("./Views/$viewName.php");
    }

    
}