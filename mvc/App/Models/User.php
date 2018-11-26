<?php
namespace App\Models;
use Core\Model;

class User extends Model {
   // use Mysqli;
    public static function getAll()
    {
        $db = Model::getDb();
      $result = $db->query('SELECT * From users');
      return $result;
    }
}
?>