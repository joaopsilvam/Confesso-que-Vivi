<?php
  include("db.php");
  if(isset($_POST['entrar'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $verifica = mysql_query("SELECT * FROM users WHERE email = '$email' AND senha = '$senha'");
    if(mysql_num_rows($verifica) <= 0){
      echo "<h3>Usuario ou senha errados.</h3>";
    }else{
      echo "<h3>deu bom nao</h3>";
      setcookie("login", $email);
      header("Location: login1.php");
    }
  }
?>

<html>
  <head>
    <title>Fazer login</title>
    <link rel="stylesheet" href="login2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="caixa">
      <div class="titulo1">ENTRAR</div>
      <div class="subtitulo1">Acesse o nosso sistema!</div>
      <div class="caixas_texto">
        <div class="rotulo">E-MAIL</div>
          <form class="texto">
            <input type="text" placeholder="lucas_oliveira@gmail.com" name="email">
          </form>
          <div class="rotulo">SENHA</div>
          <form class="texto">
            <input type="password" placeholder="*******" name="senha">
          </form>
      </div>
      <div>
        <a href="inicio.php" class="linkmenu">
          <button class="botao_entrar">
            CONFIRMAR
          </button>
        </a>
      </div>
      <div class="subtitulo2">
        <a href="cadastro.php" class="link">
          Cadastre-se
        </a>
      </div>
      <div class="subtitulo2">
        <a href="alterar_senha.html" class="link">
          Esqueceu a senha?
        </a>
      </div>
    </div>
  </body>
</html>