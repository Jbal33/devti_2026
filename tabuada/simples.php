<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Simples</title>
</head>
<body>
    <h1>Tabuada Simples</h1>
    <p>Este exemplo utiliza php para mostrar tabuadas simples e um número, sendo a tabuada de 0 até 10</p>
    <br>
    
        <?php
            $multiplicador = 3;//Neste exemplo será exibida a tabuada do 3
            echo "<h2>Tabuada de $multiplicador</h2>";
            for ($operador = 0; $operador <= 10; $operador++) {
                echo "<p>$multiplicador x $operador = " . ($multiplicador * $operador) . "
                <br>
                </p>";
            }
        ?>
         <a href="index.php">Voltar à página inicial.</a>
</body>
</html>