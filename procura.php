<!DOCTYPE html>
<html>
<head>
	<title>Musicous</title>
	<link rel="stylesheet" type="text/css" href="aparence.css">
</head>
<body>
	<div class="container">
		<div class="menu">
			<ul>
				<a href="index.php"><li>HOME</li></a>
				<a href="search.php"><li>SEARCH</li></a>
				<a href="#"><li>UPDATE</li></a>
				<a href="#"><li>NEW</li></a>
			</ul>
		</div>
		<div class="conteudo">
		<div class="search">
			<form class="linha" action="procura.php" method="POST">
				<h4>Pesquisar por:</h4>
				<select name="tipo">
					<option value="null"></option>
					<option value="artista">Artista</option>
					<option value="album">Album</option>
					<option value="musica">Musica</option>
				</select>
				<input type="submit"><br/>
			</form>
			<form action="busca.php" method="POST">				
				<?php
					session_start();
					$tipo=$_POST ['tipo'];
					$_SESSION['tipo']=$tipo;
					if($tipo=="artista"){
						print "<br/><br/>";
						print "<h3>Artista</h3>"."<h4>Nome:</h4>"."<input type='text' name='nome'>";
						print "<br/><br/>";
						print "<input type='submit'>";	
					}
					else if($tipo=="album"){
						print "<br/><br/>";
						print "<h3>Album</h3>"."<h4>Nome:</h4>"."<input type='text' name='nome'>";	
						print "<br/><br/>";
						print "<input type='submit'>";					
					}
					else if($tipo=="musica"){
						print "<br/><br/>";
						print "<h3>Musica</h3>"."<h4>Nome:</h4>"."<input type='text' name='nome'>";
						print "<br/><br/>";
						print "<input type='submit'>";							
					}
				?>
			</form>
		</div>	
		</div>
		<div class="footer">
			<h4>CopyRight</h4>
		</div>
	</div>
</body>
</html>