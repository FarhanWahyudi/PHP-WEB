<?php
    $firstname = htmlspecialchars($_GET['firstname']);
    $lastname = $_GET['lastname'];

    $sayHello = 'hello ' . $firstname . ' ' . $lastname;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $sayHello ?></h1>
</body>
</html>