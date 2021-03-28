<?php
require 'core/actions.class.php';

$mile = (isset($_GET['mile']))?$_GET['mile']:20000;
$user = Actions::getUserData($mile);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/explore.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Hack Smile</title>
  </head>
  <body>
    <?php require 'layout/header.php';?>

    <div class="body-app explore">
      <div class="nav-top">
        <h3>Encontre terafas nos nossos <br/> parceiros para ganhar milhas!</h3>
      </div>
      <img src="assets/img/map.jpg" alt="mock-map">
      <button class="you"> <img src="assets/img//tip.svg" alt=""></button>
      <button class="partners1"><img src="assets/img//pointer.svg" alt="">
      <button class="partners2"><img src="assets/img//pointer.svg" alt="">
      <button class="partners3"><img src="assets/img//pointer.svg" alt="">
    </button>

    <?php require 'layout/nav.php';?>
    <script src="./index.js"></script>
  </body>
</html>
