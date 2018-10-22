<?php
 $nameErr = $emailErr = '';
 $name = $email = '';

if ($_POST['submit']) {
  // $errors = array();
//   foreach ($_POST as $key => $value) {
//     if (empty($_POST[$key])) {
//      $errors[] = $key . ' is required';
//    } 
//     else {
//      $value = valid($_POST[$key]);
//    }
// }
   if (empty($_POST['name'])) {
   $nameErr = 'Name is required';
 } 
 else {
   $name = valid($_POST['name']);
 }

  if (empty($_POST['email'])) {
   $emailErr = 'email is required';
 } 
 else {
   $email = valid($_POST['email']);
 }
}

 function valid($data) {
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php 
  // if ($_POST['submit']) {
  //   if ($errors) {
  //     foreach ($errors as $key => $value) {
  //       echo $value . " is required<br>";
  //     }
  //   } else {
  //     echo "registration succes";
  //   }
  // }


  ?>
  <form action="" method="post">
    <input type="text" name="name" value="<?= $name?>">
    <span style="color:red;"><?= $nameErr; ?></span>
    <br>
    <input type="email" name="email" value="<?= $email?>">
    <span style="color:red;"><?= $emailErr; ?></span>
    <br>
    <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>