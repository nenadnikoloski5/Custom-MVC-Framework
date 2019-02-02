<?php

class Database {


  public static $host = 'localhost';
  public static $dbName = '<Your-Database-Name>';
  public static $username = '<Your-Username>';
  public static $password = '<Your-Password>';


  private static function connect() {

    $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }


  public static function all($table){

    $query = "SELECT * FROM $table";

    $statement = self::connect()->prepare($query);
    $statement->execute();

        $data = $statement->fetchAll();
        print_r($data);
  }

  public static function where($table, $column, $value){

    $query = "SELECT * FROM $table where $column = '$value'";

    $statement = self::connect()->prepare($query);
    $statement->execute();

        $data = $statement->fetchAll();
        print_r($data);
  }

  public static function orderBy($table, $column, $value, $orderBy,  $order){

    $query = "SELECT * FROM $table where $column = '$value' ORDER BY $orderBy $order";

    $statement = self::connect()->prepare($query);
    $statement->execute();

        $data = $statement->fetchAll();
        print_r($data);
  }

  public static function insert($table, $valName, $valAge){

    $query = "INSERT INTO $table(name, age) VALUES('$valName',$valAge)";

    $statement = self::connect()->prepare($query);
    $statement->execute();

    self::all($table);
  }

  public static function seed(){

    $query = "INSERT INTO users(name, age) 
    VALUES('Eric',22),
     ('Billy',22),
      ('Jimmy', 35),
       ('Mitch', 35),
        ('Sara', 26),
         ('Paul', 18),
         ('Eric', 30) ";
    $statement = self::connect()->prepare($query);
    $statement->execute();

    self::all('users');

  }



}