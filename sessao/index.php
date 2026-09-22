<?php
// Inicia a sessão para guardar o usuário após o login.
session_start();

// Carrega os usuários cadastrados no arquivo separado.
require __DIR__ . '/usuarios.php';

if (!isset($usuarios)) {
    // Garante que o login tenha uma lista para percorrer.
    $usuarios = [];
}

if (isset($_SESSION['usuario'])) {
    // Usuários já autenticados não precisam ver o formulário novamente.
	header('Location: login.php');
	exit;
}

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Recupera os dados enviados pelo formulário.
	$nome = trim($_POST['nome'] ?? '');
	$senha = $_POST['senha'] ?? '';

    // Registra a tentativa no log do PHP sem expor a senha em texto puro.
    error_log('Login recebido - usuário: ' . $nome . ' | senha informada: ' . ($senha !== '' ? 'sim' : 'não'));

	// Compara os dados informados com cada usuário cadastrado.
    foreach ($usuarios as $usuarioCadastrado) {
        if ($nome === $usuarioCadastrado['nome'] && $senha === $usuarioCadastrado['senha']) {
			// Salva somente o nome na sessão e abre a página protegida.
            $_SESSION['usuario'] = $nome;
            header('Location: login.php');
            exit;
        }
    }

    // Exibe uma mensagem quando nenhuma credencial corresponde.
    $erro = 'Nome de usuário ou senha inválidos.';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <?php if ($erro !== ''): ?>
    <p><?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <form method="post" action="index.php">
        <label for="nome">Nome de usuário:</label>
        <input type="text" id="nome" name="nome" required>

        <br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <br><br>

        <button type="submit">Entrar</button>
    </form>
</body>

</html>