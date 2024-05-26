<?php
    session_start();
    
    if ($_SESSION['login'] == true) {
        header('Location: /session/member.php');
        exit();
    }

    $error = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['username'] == 'farhan' && $_POST['password'] == '123') {
            $_SESSION['login'] = true;
            $_SESSION['username'] = 'farhan';
            header('Location: /session/member.php');
            exit();
        } else {
            $error = 'gagal login';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($error != '') { ?>
        <h1><?= $error ?></h1>
    <?php } ?>
    <form action="/session/login.php" method='post' >
        <label>username: 
            <input type="text" name='username' />
        </label>
        <br/>
        <label>password: 
            <input type="password" name='password' />
        </label>
        <br/>
        <input type="submit" value='login' >
    </form>
</body>
</html>