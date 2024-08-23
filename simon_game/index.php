<?php
$currentLevel = 1; // Set the initial level
$maxLevels = 5; // Set the maximum number of levels
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Simon</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>

<body>
  <img id="logo-image" src="./pictures/logo.png" alt="logo Image">
  <img id="penguin-image" src="./pictures/penguin.png" alt="Penguin Image">
  <div class="container">
    <h1 id="level-title">Press A Key to Start</h1>
    <div class="game-container">
      <div class="row">
        <div type="button" id="green" class="btn green"></div>
        <div type="button" id="red" class="btn red"></div>
      </div>

      <div class="row">
        <div type="button" id="yellow" class="btn yellow"></div>
        <div type="button" id="blue" class="btn blue"></div>
      </div>
    </div>
    <div id="stars-display"></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="script.js" charset="utf-8"></script>

</body>

</html>
