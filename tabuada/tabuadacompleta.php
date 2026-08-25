<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Completa</title>
</head>
<body>
    <h1>Tabuada Completa</h1>
    <p>Este exemplo utiliza PHP para mostrar a tabuada completa de de 0 até 10</p>
    <br>
    <?php 
        for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++ ) {
            echo "<h2>Tabuada de  :$multiplicador</h2>";
            for ($operador = 0; $operador <= 10; $operador++) {
                echo "$multiplicador x $operador = ".$multiplicador * $operador."<br>";
            }
        }    
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>