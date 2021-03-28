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
    <link rel="stylesheet" href="assets/css/discover.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Hack Smile</title>
  </head>
  <body>
    <?php require 'layout/header.php';?>

    <div class="body-app">
      <div class="discover">
        <h3 class="title">Acumular milhas é fácil, <br />escolha uma opção</h3>
        <div class="container-cards">
          <div class="box-card --column card">
            <img src="assets/img/bell.svg" alt="campainha" />
            <h2>Reserve seu hotel</h2>
            <p>entre mais de 700 mil opções</p>
            <button>Ganhar milhas</button>
          </div>

          <div class="box-card --column card">
            <img src="assets/img/car-front.svg" alt="campainha" />
            <h2>Alugue carros</h2>
            <p>para viagens dentro e fora do país</p>
            <button>Ganhar milhas</button>
          </div>

          <div class="box-card --column card">
            <img src="assets/img/car-side.svg" alt="campainha" />
            <h2>Créditos Uber</h2>
            <p>chegue aonde precisar</p>
            <button>Ganhar milhas</button>
          </div>

          <div class="box-card --column card">
            <img src="assets/img/ticket.svg" alt="campainha" />
            <h2>Garanta a entrada</h2>
            <p>em shows e eventos incríveis</p>
            <button>Ganhar milhas</button>
          </div>

          <div class="box-card --column card">
            <img src="assets/img/camera.svg" alt="campainha" />
            <h2>Agende passeios</h2>
            <p>momentos inesquecíveis</p>
            <button>Ganhar milhas</button>
          </div>

          <div class="box-card --column card">
            <img src="assets/img/mickey.svg" alt="campainha" />
            <h2>Garanta a entrada</h2>
            <p>em shows e eventos incríveis</p>
            <button>Ganhar milhas</button>
          </div>
        </div>
      </div>
    </div>

    <?php require 'layout/nav.php';?>
  </body>
</html>
