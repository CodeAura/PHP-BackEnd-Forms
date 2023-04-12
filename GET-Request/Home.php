<?php

$username = $_GET["username"]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DenHertog</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<!-- VIDEO Background -->
    <video autoplay muted loop id="Background">
        <source src="Background.mp4" type="video/mp4">
    </video>
    <audio autoplay loop>
        <source src="Backgroundmusic.mp3" type="audio/mp3">
    </audio>
<!-- -->
<div class="area">
<h1>Hi <? echo $username ?></h1>
</div>
</body>
<script type="text/javascript" src="script.js"></script>
</html>
