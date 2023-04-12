<?php

$nameErr = $emailErr = "";
$username = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        echo "<script>alert('Name is required');</script>";
      } else {
        $username = $_POST["name"];
      }
      
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        echo "<script>alert('Email is required');</script>";
      } else {
        $email = $_POST["email"];
      }
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
<style>
.error {color: #FF0000;}
</style>

<body>
    <!-- Form -->
        Naam: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br>
        Email: <input type="email" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <input id="button" type="submit" name="submit" value="submit">
    </form>

<!-- Gegevens-->
<h1>Jou gegevens:</h1>
<p id="Naam">Naam: <?echo $username; ?></p>
<p>Email: <?echo $email; ?></p>
</body>
</html>

<script>
    username = document.getElementById("Naam").innerHTML
    button = document.getElementById("button").onclick = function() {checkIfError()}

</script>