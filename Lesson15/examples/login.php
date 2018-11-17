<?php
require_once 'login.form.class.php';

$msg = '';

$form = new LoginForm($_POST);

if ($_POST) {
    if ($form->validate()) {
        echo 'ok';
        // to be continued

    } else {
        $msg = 'Please fill in fields';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>

<b><?=$msg; ?></b>
<br/>
<form method="post">
    Username: <input type="text" name="username" value="<?=$form->getUsername(); ?>"/> <br/><br/>
    Password: <input type="password" name="password"/> <br/><br/>
    <input type="submit"/>
</form>

</body>
</html>