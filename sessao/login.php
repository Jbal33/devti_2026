<?php
// Recupera a sessão iniciada na página de login.
session_start();

if (!isset($_SESSION['usuario'])) {
	// Impede o acesso à página sem uma sessão autenticada.
	header('Location: index.php');
	exit;
}

if (isset($_GET['sair'])) {
	// Remove os dados da sessão para realizar o logout.
	session_unset();
	session_destroy();
	header('Location: index.php');
	exit;
}

// Escapa o nome antes de exibi-lo no HTML.
$nome = htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Área logada</title>
</head>
<body>
	<h1>Bem-vindo, <?= $nome ?>!</h1>
	<p>Você está logado.</p>
	<a href="login.php?sair=1">Sair</a>
</body>
</html>
