<html>
  <head>
    <title>Principal</title>
    <link rel="stylesheet" href="inicio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
  	<div id="esquerda">
  	  <div id="foto_perfil"></div>
      <div class="titulo1">João Lucas Oliveira</div>
      <div class="subtitulo1">Ph.D em Mídias Digitais</div>
      <a href="login1.php"><button class="ver_perfil">Ver perfil</button></a>
      <a href="inicio.php" style="width: 100%;">    	
	      <button class="rotulo" id="evidencia">
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
      <a href="podcasts.php" style="width: 100%;">    	
	      <button class="rotulo">
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
  		<div id="titulos">
  			<div class="titulo2" id="p1">Acontecimentos</div>
  			<div class="titulo2" id="p2">Pessoas recomendadas</div>
  		</div>
  		<div id="feed">
  			<div id="acontecimentos">
  				<div class="acontecimento">
  					<img src="images/Acontecimento1.jpg" width="100%;" height="300px;">
					<div class="titulo2">Fundação da Escola de Agronomia do Nordeste</div>
					<div class="subtitulo2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					<div style="width: 100%;">
						<a href="login1.php"><button class="saber_mais">Saber mais</button></a>
					</div>
				</div>
  				<div class="acontecimento">
  					<img src="images/Acontecimento2.png" width="100%;" height="300px;">
					<div class="titulo2">Fundação da Escola Politécnica da Paraíba</div>
					<div class="subtitulo2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					<div style="width: 100%;">
						<a href="login1.php"><button class="saber_mais">Saber mais</button></a>
					</div>
  				</div>
  			</div>
  			<div id="recomendados">
		      <div class="pessoa">
		      	<img src="images/Modelo2.jpg" width="60px;" height="60px;" style="padding-right: 25px;">
		      	<div class="descricoes">
		      		<div class="titulo3">Helena Gonçalves</div>
		      		<div class="subtitulo3">Msc. em Jornalismo</div>
		      		<div class="subsubtitulo3">Turma de 1985</div>
					<a href="login1.php"><button class="conectar">Conectar</button></a>
		      	</div>
		      </div>
		      <hr width = "90%" size = "1px"> 
		      <div class="pessoa">
		      	<img src="images/Modelo3.jpg" width="60px;" height="60px;" style="padding-right: 25px;">
		      	<div class="descricoes">
		      		<div class="titulo3">Rodrigo Almeida</div>
		      		<div class="subtitulo3">Ph.D em Física</div>
		      		<div class="subsubtitulo3">Turma de 2004</div>
					<a href="login1.php"><button class="conectar">Conectar</button></a>
		      	</div>
		      </div>
		      <hr width = "90%" size = "1px"> 
		      <div class="pessoa">
		      	<img src="images/Modelo4.jpg" width="60px;" height="60px;" style="padding-right: 25px;">
		      	<div class="descricoes">
		      		<div class="titulo3">Cecília Nóbrega</div>
		      		<div class="subtitulo3">Ph.D em Medicina</div>
		      		<div class="subsubtitulo3">Turma de 2005</div>
					<a href="login1.php"><button class="conectar">Conectar</button></a>
		      	</div>
		      </div>
  			</div> 			
  		</div>
  	</div>
  </body>
</html>