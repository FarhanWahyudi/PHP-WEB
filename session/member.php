<?php
    session_start();

    if ($_SESSION['login'] != true) {
        header('Location: /session/login.php');
        exit();
    }

    $say = 'hello ' . $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $say ?></h1>
    <a href="/session/logout.php">logout</a>
</body>
</html>