<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test site</title>
  <!-- Bootstrap --> 
  <link href="../homework/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
<div class="container"> 
  <div class="row">
  <header class="col-sm-12 col-md-12 col-lg-12">
    
  </header>
  </div>

  <div class="row">
  <nav class="col-sm-12 col-md-12 col-lg-12">

  </nav>
  </div>
  <main>
    <div class="row">
      <section class="col-sm-12 col-md-12 col-lg-12">
        <?php

    // Выводим все наши логины
    echo "<h1>Список всех логинов:</h1>";

    $users = 'users.txt';

    $arr = file($users);

    $count = count($arr);

    echo '<select name="sel" class="form-control">';

      for ($i = 0; $i < $count; $i++) {

    echo '<option value="'.trim($arr[$i]).'">'.trim($arr[$i]).'</option>';

}
    echo '</select>';
    ?>
      </section>
    </div>
  </main>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>