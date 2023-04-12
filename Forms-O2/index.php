<?php

$username = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $email = $_POST["email"];
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- Form -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Naam: <input type="text" name="name" required>
        <br>
        Email: <input type="email" name="email" required>
        <input type="submit" name="submit" value="submit">
    </form>

<!-- Gegevens-->
<h1>Jou gegevens:</h1>
<p id="Naam">Naam: <?echo $username; ?></p>
<p>Email: <?echo $email; ?></p>
</body>
</html>

<script>
    username = document.getElementById("Naam").innerHTML
    alert(username);
</script>