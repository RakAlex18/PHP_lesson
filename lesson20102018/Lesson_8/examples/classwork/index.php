<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test site</title>
  <!-- Bootstrap --> 
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
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
        <form action="registration.php" method="post"> 
          <div class="form-group">
            <label for="login">Логин:</label>
            <input type="text" class="form-control" name="login">
          </div>
          <button type="submit" class="btn btn-primary" name="regbtn">Зарегистрировать</button>
        </form>
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