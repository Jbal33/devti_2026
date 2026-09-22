<?php
   session_start();
   session_unset();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcador Placar</title>
</head>

<body>
    <h1>Marcador Placar</h1>
    <form action="rodada.php" method="post">
        <label for="fequipea">Nome Equipe A: </label>
        <input name="fequipea">&nbsp;
        <label for="fequipeb">Nome Equipe B: </label>
        <input name="fequipeb">&nbsp;
        <br>
        <br>
        <button type="submit">Iniciar Marcação</button>
    </form>

</body>

</html>