<?php
namespace App\Models;

use Core\Connection;

class Posts extends Connection {
    //

    /*Метод экранирования символов*/
    public function escape($str){
        return \mysqli_escape_string($this->connection, $str);
    }
    /*Метод обработки запроса к БД*/
    public function selectAll($sql){

        $result = $this->connection->query($sql);
        $data = [];
        foreach ($result as $item){
            $data[] = $item;
        }
        return $data;
    }
}
?>