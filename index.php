<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistemas de folga</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		<meta name="author" content="Rafael Dimas">
		<meta name="description" content="Sistema de Folgas"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<<?php 
		session_start();
		 ?>
		<div class="body">
			<main class="main">
				<figure class="logo">
					<img src="img/logo1.png" alt="Domino's Pizzaria">
				</figure>
				<form action="login.php" method="post">
					<input class="login" name="login" type="text" placeholder="Usuario">
					
					<br>
					<input class="senha" name="senha" type="password" placeholder="Senha">
					
					<br>
					<input class="entrar" name="entrar" type="submit" value="Entrar">
				</form>
			</main>
		</div>
	</body>
</html>

