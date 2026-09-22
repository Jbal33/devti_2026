<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Array Mês</title>
</head>

<body>
    <h1>Consulta mês</h1>
    <form action="#" method="get">
        <label for="fnum">Número (1 até 12):</label>
        <input type="number" min="1" max="12" step="1" name="fnum">
        <br>
        <button type="submit">Ver mês</button>
    </form>
    <br>
    <h2>Mês informado</h2>
    <?php 
        $mes=array("Janeiro", "Fevereiro", "Março",
                   "Abril", "Maio", "Junho",
                   "Julho", "Agosto", "Setembro",
                   "Outubro", "Novembro", "Dezembro");
        echo "<strong>".$mes[$_GET["fnum"]-1]."</strong><br>";
        echo "<br><hr><br><pre>";
        var_dump($mes);
        echo "</pre>";
        
    ?>
</body>

</html>