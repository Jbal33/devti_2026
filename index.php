<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1 de PHP</title>
</head>

<body>
    <h1>Avaliação</h1>

    <form action="" method="post">
        <label for="altura">Altura: </label>
        <br>
        <input type="number" id="altura" name="altura" min="1" required>
        <br>
        <label for="comprimento">Comprimento: </label>
        <br>
        <input type="number" id="comprimento" name="comprimento" min="1" required>
        <button type="submit" id="calcular" name="calcular">Calcular</button>
    </form>
    <br>


    <?php
    $altura = $_POST["altura"];
    $comprimento = $_POST["comprimento"];
    $area = $altura * $comprimento;
    if ($altura == $comprimento) {
        echo "Área: $area m²<br>Forma: Quadrado";
        
    } elseif ($altura > $comprimento) {
        echo "Área: $area m²<br>Forma: Retângulo Vertical";
        
    } else {
        echo "Área: $area m²<br>Forma: Retângulo Horizontal";
        
    }
    ?>


</body>

</html>