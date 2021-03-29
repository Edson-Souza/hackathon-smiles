<?php
require 'core/actions.class.php';

$mile = (isset($_GET['mile']))?$_GET['mile']:20000;
$user = Actions::getUserData($mile);
$promotions = Actions::getPromoData();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Hack Smile</title>
  </head>
  <body>
    <?php require 'layout/header.php';?>

    <div class="body-app home">
      <div class="container-board">
        <?php
          foreach($promotions as $promo):
        ?>
        <div class="board">
          <h2><?=$promo['name'];?></h2>
          <span class="amount"><?=$promo['cost'];?></span>
          <span class="disclaimer">milhas + taxas*</span>
          <a href="">
            <img src="assets/img/<?=$promo['img'];?>" alt="" />
          </a>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="dotted-vertical">
        <img class="cloud" src="assets/img/cloud.svg" alt="nuvens" />
        <img class="airplane" src="assets/img/airplane.svg" alt="nuvens" />
      </div>

      <div class="background"></div>
    </div>

    <?php require 'layout/nav.php';?>
  </body>
</html>
