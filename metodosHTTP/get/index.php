<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="" />
  <title>Login</title>
</head>

<body>
  <main id="container-login">
    <div id="contents">
      <h1>Formulario de login</h1>
      <form action="confirmation.php" method="GET" id="form-login">
        <div class="input-container">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" name="email" id="email" />
        </div>
        <div class="input-container">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="password" id="password" />
        </div>
        <input type="submit" value="enviar">
      </form>
      <div id="submit-contents">
        <div id="lembrar-me">
          <input type="checkbox" name="lembrar" id="lembrar" />
          <p>Lembrar-me</p>
        </div>
        <div id="recovery-password">
          <a href="#">Esqueceu sua senha?</a>
        </div>
      </div>
      <div id="submit-create">

        <p>Não é um membro? <a href="">Cadastre-se agora</a></p>
      </div>
    </div>
  </main>
  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>