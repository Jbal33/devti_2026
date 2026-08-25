<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Nome</title>
</head>
<body>
    <h1>Olá, Nome!</h1>
    <br>
    <form action="#" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <?php
            if ($_GET["fnome"] != ""){
            $nome = $_GET["fnome"];
            echo "<h2>Olá $nome</h2>";
            }
        ?>
</body>
</html>