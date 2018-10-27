<?php
  // define("DB_SERVER", "localhost");
  // define("DB_USER", "");
  // define("DB_PASS", "");
  // define("DB_NAME", "");

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');  
    if(!$connection) {
        die("Database connection failed");
    }

?>
<div class="container">   
  <div class="col-sm-12">
<?php
  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if(!$result) {
      die('Query FAILED' . mysqli_error());
  }
      
  while($row = mysqli_fetch_assoc($result)) {
      
      echo $row;

  } ?>

  </div>
</div>