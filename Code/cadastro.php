<?php
  include("db.php");
  if(isset($_POST['entrar'])){
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $endereco = $_POST['endereco'];    
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];    
    $senha = $_POST['senha'];    
    $query = "INSERT INTO users (email, nome, endereco, telefone, senha, matricula) VALUES ('$email', '$nome', '$endereco', '$telefone', '$senha', '$matricula')";
    $insert = mysql_query($query,$connect);
  }
?>

<html>
  <head>
    <title>Fazer login</title>
    <link rel="stylesheet" href="cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="caixa">
      <div class="titulo1">CADASTRAR</div>
      <div class="subtitulo1">Conheça o nosso sistema!</div>
      <div class="caixas_texto">
          <div class="rotulo">NOME</div>
          <form class="texto">
            <input type="text" placeholder="João Lucas" name="nome">
          </form>
          <div class="rotulo">MATRÍCULA</div>
          <form class="texto">
            <input type="text" placeholder="20170107286" name="matricula">
          </form>
          <div class="rotulo">ENDEREÇO</div>
          <form class="texto">
            <input type="text" placeholder="Rua Jose Ricardo Mota Morais, 170, João Pessoa - PB" name="endereco">
          </form>
          <div class="rotulo">TELEFONE</div>
          <form class="texto">
            <input type="number" placeholder="(83)98223-4567" name="telefone">
          </form>
          <div class="rotulo">E-MAIL</div>
          <form class="texto">
            <input type="text" placeholder="lucas_oliveira@gmail.com" name="email">
          </form>
          <div class="rotulo">SENHA</div>
          <form class="texto">
            <input type="password" placeholder="*******" name="senha">
          </form>
          <div class="rotulo">CONFIRME SUA SENHA</div>
          <form class="texto">
            <input type="password" placeholder="*******">
          </form>
      </div>
      <div>
        <form>
          <input type="submit" value="CONFIRMAR" class="botao_entrar" name="entrar">
        </form>
      </div>
    </div>
  </body>
</html>