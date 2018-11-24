<?php
namespace Core;
class Connection {
    //
    protected $connection;
    /*Создаем конструктор подключения к БД*/
    public function __construct($db_host, $db_user, $db_pass, $db_name)
    {
        $this->connection = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if(!$this->connection){
            echo "Ошибка подключения";
        }
    }

}
?>