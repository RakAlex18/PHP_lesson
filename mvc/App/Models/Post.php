<?php
namespace App\Models;
use Core\Model;

class Post extends Model {
   // use Mysqli;
    public static function getAll()
    {
        $db = Model::getDb();
      $result = $db->query('SELECT * From news');
      return $result;
    }
}
?>