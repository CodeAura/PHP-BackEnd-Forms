<?php

$Error = "";
$q1 = $q2 = $q3 = $q4 = $q5 = $q6 = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["vraag1"])) {
        $Error = "⚠ Vraag 1 mag niet leeg zijn";
      } else {
        $q1 = $_POST["vraag1"];
      }
      if (empty($_POST["vraag2"])) {
        $Error = "⚠ Vraag 2 mag niet leeg zijn";
      } else {
        $q2 = $_POST["vraag2"];
      }
      if (empty($_POST["vraag3"])) {
       $Error = "⚠ Vraag 3 mag niet leeg zijn";
      } else {
        $q3 = $_POST["vraag3"];
      }
      if (empty($_POST["vraag4"])) {
        $Error = "⚠ Vraag 4 mag niet leeg zijn";
      } else {
        $q4 = $_POST["vraag4"];
      }
      if (empty($_POST["vraag5"])) {
        $Error = "⚠ Vraag 5 mag niet leeg zijn";
      } else {
        $q5 = $_POST["vraag5"];
      }
      if (empty($_POST["vraag6"])) {
        $Error = "⚠ Vraag 6 mag niet leeg zijn";
      } else {
        $q6 = $_POST["vraag6"];
      }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="background-blur"></div>

<h1 id="title"><span id="anim-title">Mad</span><span id="anim-title">Libs</span></h1>
<br>
<nav>
        <ul>
            <li><a href="index.php">Onkunde</a></li>
            <li><a href="paniek.php">Er heerst paniek..</a></li>
        </ul>
    </nav>
    <br>
<h2>Onkunde</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php if($Error){ ?>
  <span class="error" id="error-style"><?php echo $Error; ?></span>
<?php } ?>
<br>
<br>
<input type="text" name="vraag1" placeholder="Wat zou je graag willen kunnen:">
<input type="text" name="vraag2" placeholder="Met welke persoon kun je goed opschieten:">
<input type="text" name="vraag3" placeholder="Wat heb je altijd bij je als je op vakantie gaat:">
<input type="text" name="vraag4" placeholder="Wat is je beste persoonlijke eigenschap:">
<input type="text" name="vraag5" placeholder="Wat is je slechtste persoonlijke eigenschap:">
<input type="text" name="vraag6" placeholder="Wat is het ergste wat je kan overkomen:">
<input id="button" type="submit" name="submit" value="submit">
</form>

<p id="Naam">© CodeAura</p>

</body>
</html>