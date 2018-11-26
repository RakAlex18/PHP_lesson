<?php
namespace Core;
class Model{
   // use Mysqli;
    public static function getDb()
    {
        $db = new \Mysqli(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME);
      return $db;
    }
}
?>