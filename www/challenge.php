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
    <link rel="stylesheet" href="assets/css/challenge.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Hack Smile</title>
  </head>
  <body>
    <?php require 'layout/header.php';?>

    <div class="body-app challenge">
      <div class="time-menu">
        <button class="--ative">Último mês</button>
        <button>Último 3 meses</button>
        <button>Último ano</button>
      </div>

      <div class="box-card statistic">
        <div class="graph">
          <span class="points">2.350</span>
          <span class="legend">Recompensas e <br />Conquistas</span>
        </div>
      </div>

      <div class="listing-horizontal">
        <div class="top-header">
          <h2>Missões disponíveis</h2>
          <img src="assets/img/arrow.svg" alt="seta apontando para direita" />
        </div>
        <h3>Complete missões e turbine seus ganhos</h3>

        <div class="card-container">
          <div class="box-card board">
            <div>
              <img src="assets/img/smile.svg" />
              <h3>50 milhas</h3>
            </div>
            <p>Pague R$ 250 de compras com o cartão Smiles</p>
          </div>

          <div class="box-card board --purple">
            <div>
              <img src="assets/img/money.svg" />
              <h3>50 milhas</h3>
            </div>
            <p>Assine o plano 1000 do clube Smiles</p>
          </div>

          <div class="box-card board --purple">
            <div>
              <img src="assets/img/money.svg" />
              <h3>50 milhas</h3>
            </div>
            <p>Assine o plano 1000 do clube Smiles</p>
          </div>
        </div>
      </div>

      <div class="listing-horizontal">
        <div class="top-header">
          <h2>Desafios</h2>
          <img src="assets/img/arrow.svg" alt="seta apontando para direita" />
        </div>
        <h3>Faça os desafios e colecione medalhas</h3>

        <div class="card-container">
          <div class="box-card card">
            <img src="assets/img/cadastro.svg" alt="cadastro" />
            <h3>
              Complete seu <br />
              cadastro
            </h3>
            <span>2 milhas</span>
          </div>

          <div class="box-card card">
            <img src="assets/img/calendar.svg" alt="cadastro" />
            <h3>
              Programe uma<br />
              viagem com 3 meses
            </h3>
            <span>5 milhas</span>
          </div>
        </div>
      </div>
    </div>

    <?php require 'layout/nav.php';?>
  </body>
</html>
