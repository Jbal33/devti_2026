<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Número</title>
</head>
<body>
    <h1>Tabuada Número</h1>
    <p>Este exemplo utiliza PHP para mostrar a tabuada de um número, sendo a tabuada de 0 até 10</p>
    <br>
    <?php 
        $multiplicador = $_GET["fnumero"]; 
        echo "<h2>Tabuada de :$multiplicador</h2>";
        for ($operador = 0; $operador <= 10; $operador++) {
            echo "$multiplicador x $operador = ".$multiplicador * $operador."<br>";
        }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>