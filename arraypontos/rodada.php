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
    if (!isset($_SESSION["equipea"]) && 
        !isset($_SESSION["equipeb"]) &&
        isset($_POST["fequipea"]) && 
        isset($_POST["fequipeb"])) {
            $_SESSION["equipea"] = $_POST["fequipea"];
            $_SESSION["equipeb"] = $_POST["fequipeb"];
    } 

    if (isset($_POST["fpontosa"]) && isset($_POST["fpontosb"])) {
        $_SESSION["rodada"][] = array("a" => $_POST["fpontosa"], "b" => $_POST["fpontosb"]);
    }
    ?>
    <table style="border: 1px solid;">
        <tr>
            <th><?= $_SESSION["equipea"] ?></th><th><?= $_SESSION["equipeb"] ?></th>
        </tr>
        <?php
          $somaa=0;
          $somab=0;
          foreach ($_SESSION["rodada"] as $rodada) {
            $somaa += $rodada["a"];
            $somab += $rodada["b"];
             echo "<tr><td style='text-align:center;'>".$rodada["a"]."</td><td style='text-align:center;'>".$rodada["b"]."</td>
                   </tr>"; 
          }
        ?>
        <tr>
        <tr>
            <th>Total A: <?= $somaa ?></th><th>Total A:<?= $somab ?></th>
        </tr>
        <form action="#" method="post">
            <td colspan="2"><label for="fpontosa">Equipe A:</label>
            <input type="number" name="fpontosa" style="width: 80px";>
            <label for="fpontosb">Equipe B:</label>
            <input type="number" name="fpontosb" style="width: 80px";>&nbsp;
            <button type="submit"><strong> + </strong></button></td>
        </tr>
        </form> 
    </table>
    <a href=".">Reiniciar</a>
</body>
</html>
