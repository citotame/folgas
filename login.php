<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysql_connect("127.0.0.1", "root") or die ("Sem conexão com o Servidor");
$select = mysql_select_db("server") or die("Sem acesso ao DB, Entre em contato com o Administrador, rafael@compcom.com.br");

$result = mysql_query("select * from 'usuario' where 'nome' = '$login' and 'senha' = '$senha'");

if (mysql_num_rows($result) > 0 ) {
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $login;
	header('location: home.php');
}
else{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location: index.php');
}
?>

</body>
</html>