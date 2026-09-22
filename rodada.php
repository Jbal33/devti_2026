<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra Rodada</title>
</head>

<body>
    <h1>Resgistra Rodada</h1>
    <?php
    if (!isset($_SESSION["equipea"]) && !isset($_SESSION["equipeb"])) {
        echo "entrou";
        if (isset($_POST["fequipea"]) && isset($_POST["fequipeb"])) {
            $_SESSION["equipea"] = $_POST["fequipea"];
            $_SESSION["equipeb"] = $_POST["fequipeb"];
        } else {
            echo "ERRO! Necessário Informar nomes das equipes.<br>";
            echo "<a href='.'>Voltar</a>";
            die();
        } 
    }
    if (isset($_POST["fpontosa"]) && isset($_POST["fpontosb"])) {
        $_SESSION["rodada"][] = array("a" => $_POST["fpontosa"], "b" => $_POST["fpontosb"]);
    }
    ?>

    <form action="#" method="post">
        <label for="fpontosa">Equipe A:</label>
        <input type="number" name="fpontosa">&nbsp;
        <label for="fpontosb">Equipe B:</label>
        <input type="number" name="fpontosb">&nbsp;
        <button type="submit"><strong> + </strong></button>
    </form>
    <?php
        echo "<br><hr><br>sessão: <pre>";
        var_dump($_SESSION);
        echo "</pre>";
    ?>
</body>

</html>