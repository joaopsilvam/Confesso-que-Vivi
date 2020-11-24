<html>
  <head>
    <title>Meus Podcasts</title>
    <link rel="stylesheet" href="podcasts.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
  	<div id="esquerda">
  	  <div id="foto_perfil"></div>
      <div class="titulo1">João Lucas Oliveira</div>
      <div class="subtitulo1">Ph.D em Mídias Digitais</div>
      <a href="login1.php"><button class="ver_perfil">Ver perfil</button></a>
      <a href="inicio.php" style="width: 100%;">    	
	      <button class="rotulo">
	      	<img src="images/Principal.png" width="35px;" height="35px;" style="padding-bottom: 5px;">
	      	<div>PRINCIPAL</div>
	      </button>
      </a>
      <a href="videos.php" style="width: 100%;">    	
	      <button class="rotulo">
	      	<img src="images/Videos.png" width="45px;" height="45px;" style="padding-bottom: 5px;">
	      	<div>MEUS VÍDEOS</div>
	      </button>
      </a>
      <a href="" style="width: 100%;">    	
	      <button class="rotulo" id="evidencia">
	      	<img src="images/Podcast.png" width="35px;" height="35px;" style="padding-bottom: 5px;">
	      	<div>MEUS PODCASTS</div>
	      </button>
      </a>
      <a href="formacao.php" style="width: 100%;">    	
	      <button class="rotulo">
	      	<img src="images/Livros.png" width="35px;" height="35px;" style="padding-bottom: 5px;">
	      	<div>FORMAÇÃO ACADÊMICA</div>
	      </button>      
      </a>
    </div>
  	<div id="direita">
  		<div id="barra_busca">
  			<div id="buscar">
		        <form class="texto">
		          <input type="text" placeholder="Busque por pessoas, anos ou turmas.">
		        </form>
	  			<button style="background-color: white; border: none;">
	  				<img src="images/Busca2.png" width="20px;" height="20px;">
	  			</button>
	  		</div>
			<a href=""><img src="images/Postar.png" width="33px;" height="33px;" style="padding-right: 15px;"></a> 
			<a href="login2.php"><img src="images/Logout.png" width="25px;" height="25px;"></a> 
  		</div>
  		<div class="titulo2" style="padding: 2%;">Meus Podcasts</div>
  		<div id="feed">
  			<div id="podcasts">
  				<div class="podcast">
            <img src="images/Podcasts.jpg" width="100%;" height="250px;" style="margin-bottom: 10px;">
            <audio controls item-width="100%">
              <source src="assets/Bethoven.mp3" type="audio/mpeg">
            </audio>
  					<div class="titulo2"> Inauguração do Hospital Universitário</div>
  					<div class="subtitulo2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
  				</div>
   				<div class="podcast">
            <img src="images/Podcasts.jpg" width="100%;" height="250px;" style="margin-bottom: 10px;">
            <audio controls item-width="100%">
              <source src="assets/Bethoven.mp3" type="audio/mpeg">
            </audio>
            <div class="titulo2">Terceiro Congresso Cientifico de Fisioterapia</div>
  					<div class="subtitulo2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
  				</div>
   				<div class="podcast">
            <img src="images/Podcasts.jpg" width="100%;" height="250px;" style="margin-bottom: 10px;">
            <audio controls item-width="100%">
              <source src="assets/Bethoven.mp3" type="audio/mpeg">
            </audio>
            <div class="titulo2">Seminário de práticas laboratoriais e convergência jornalística</div>
  					<div class="subtitulo2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
  				</div>
  				<div class="podcast">
            <img src="images/Podcasts.jpg" width="100%;" height="250px;" style="margin-bottom: 10px;">
            <audio controls item-width="100%">
              <source src="assets/Bethoven.mp3" type="audio/mpeg">
            </audio>
            <div class="titulo2">Inauguração do Prédio da Prefeitura</div>
  					<div class="subtitulo2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </body>
</html>