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
			<?php
				include('methods/conect.php');
				include_once('methods/selectall.php');
			?>
		</div>
		<div class="footer">
			<h4>CopyRight</h4>
		</div>
	</div>
</body>
</html>