<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos Array</title>
</head>
<body>
    <h1>Exemplos Array</h1>
    <br>
    <h2>Percocerrendo Array com foreach</h2>
    <ol>
    <?php
       $diassemana = array("domingo","segunda","terça","quarta","quinta","sexta","sábado");
       //echo "<ol>";
       foreach ($diassemana as $dia) {
           if ($dia == "domingo" || $dia == "sábado" ) {
            echo "<li>$dia</li>";
           } else {
            echo "<li>$dia-feira</li>";
           }
       }
       //echo "</ol>";
    ?>
    </ol>
    <h2>Listando variáveis SERVER</h2>
    <ul>
        <?php
           foreach ($_SERVER as $variavel) {
               echo "<li>".key($_SERVER)." - ".$variavel."</li>";
               next($_SERVER);
           }
        ?>
    </ul>
</body>
</html>