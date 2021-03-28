<?php
require 'core/actions.class.php';

$mile = (isset($_GET['mile']))?$_GET['mile']:20000;
$add = (isset($_GET['add']))?$_GET['add']:0;
$mile = $mile+$add;
$user = Actions::getUserData($mile);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/learn.css" />
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
      <div class="learn">
        <h3 class="title">Saiba tudo sobre sua viagem e ganhe milhas</h3>
        <?php
          for($i=1;$i<5;$i++):
        ?>
        <div class="box-card --row card">
          <a href="learn.php?mile=<?=$user['mile'];?>&add=<?=($i*1000);?>">
            <img class="image-spotlight" src="assets/img/trava.jpg" alt="" />
            <div class="content">
              <h2>Aprenda sobre Trava de Transferência</h2>
              <p>
                Nesta video aula aprenda sobre este recurso fundamental de
                segurança.
              </p>
              <span><?=($i*1000);?> milhas</span>
            </div>
          </a>
        </div>
        <?php endfor;?>
      </div>
    </div>

    <?php require 'layout/nav.php';?>
  </body>
</html>
