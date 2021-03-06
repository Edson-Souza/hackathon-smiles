
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Hack Smile</title>
  </head>
  <body>
    <div class="login">
      <h1 class="title">Faça seu login na XXX Smiles</h1>
      <form class="form" action="home.php">
        <label>CPF ou numero Smiles</label>
        <input />

        <label>Senha</label>
        <input type="password" />
        <div class="checkbox-container">
          <label for="check-remember" class="cursor-pointer"
            >Lembrar CPF ou numero Smiles</label
          >
          <input id="check-remember" type="checkbox" />
          <label for="check-remember" class="cursor-pointer"></label>
        </div>

        <input id="form-brn" type="submit" value="Entrar" />
      </form>

      <div class="forget-container">
        <a class="link" href="#">Esqueceu numero Smiles?</a>
        <a class="link" href="#">Esqueceu sua senha?</a>
      </div>
      <hr class="divider" />
      <h2 class="subtitle">Recebeu seu Cartão de Crédito Gol Smiles?</h2>
      <div class="card-info">
        <img src="assets/img/img/cards.png" alt="cartões smiles" />
        <div>
          <p>
            Chegou a hora de acessar seus dados, acompanhar seu saldo de milhas
            e aproveitar os benefícios.
          </p>
          <button>Primeiro acesso</button>
        </div>
      </div>
    </div>
    <script src="assets/js/script.js"></script>
  </body>
</html>
