<?php


// ik laat je zien hoe je in zelfde document kan formhandelen

$username = $_POST["name"];
$email = $_POST["email"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <h1 id="username">Naam: <? echo $username; ?></h1>
    Email: <? echo $email ?>
</body>
</html>

<script>
    var username = document.getElementById('username').innerHTML

    alert(username);
</script>