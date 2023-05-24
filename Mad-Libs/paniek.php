<?php

$Error = "";
$q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = $q8 = "";
$Window = false;

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
    if (empty($_POST["vraag7"])) {
      $Error = "⚠ Vraag 7 mag niet leeg zijn";
    } else {
      $q7 = $_POST["vraag7"];
    }
    if (empty($_POST["vraag8"])) {
      $Error = "⚠ Vraag 8 mag niet leeg zijn";
    } else {
      $q8 = $_POST["vraag8"];
      $Window = true;
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

<style>
  <?php if($Window == true){ ?>
    .background-blur {
      display: block;
    }
    .popup {
      display: block;
    }
  <?php } ?>
  </style>
<body>

<?php if($Window == true){ ?>
  <div id="popup" class="w3-animate-bottom">
  <h1>Er Heerst paniek!</h1>
  <p>Er heerst paniek in het koninkrijk <?=$_POST["vraag3"]?>, Koning Egmod is ten einde raad en als koning <?=$_POST["vraag6"]?> ten einde raad is, dan roept hij zijn ten-einde-aadsheer <?=$_POST["vraag2"]?></p>
  <p>"<?=$_POST["vraag2"]?>! Het is een ramp! het is een schande!"</p>
  <p>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p>
  <p>"Mijn <?=$_POST["vraag1"]?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$_POST["vraag5"]?> voor het gekocht!"</p>
  <p>"Majesteit, uw <?=$_POST["vraag1"]?> komt vast vanzelf weer terug?"</p>
  <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tissentijd"<?=$_POST["vraag8"]?> leren?"</p>
  <p>"Maar Sire, daar kunt u toch uw supercomputer voor gebruiken."</p>
  <p>"<?=$_POST["vraag2"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
  <p>"<?=$_POST["vraag4"]?>, sire."</p>
</div>
<?php } ?>

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
<h2>Er heerst paniek!!</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php if($Error){ ?>
  <span class="error" id="error-style"><?php echo $Error; ?></span>
<?php } ?>
<br>
<br>
<input type="text" name="vraag1" placeholder="Welk huisdier zou je nooit als huisdier willen hebben?">
<input type="text" name="vraag2" placeholder="MWie is de belangrijkste persoon in je leven?">
<input type="text" name="vraag3" placeholder="In welk land zou je graag willen wonen?">
<input type="text" name="vraag4" placeholder="Wat doe je als je je verveelt?">
<input type="text" name="vraag5" placeholder="Met welk speelgoed speelde je als kind het meest?">
<input type="text" name="vraag6" placeholder="Bij welke docent spijbel je het liefst">
<input type="text" name="vraag7" placeholder="Als je $100.000 had, wat zal je dan kopen">
<input type="text" name="vraag8" placeholder="Wat is je favorite bezigheid">
<input id="button" type="submit" name="submit" value="submit">
</form>



<p id="Naam">© CodeAura</p>

</body>
</html>