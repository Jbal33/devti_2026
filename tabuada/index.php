<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuadas</title>
</head>
<body>
    <h1>Exemplos: Tabuadas</h1>
    <ul>
        <li>
            <a href="simples.php">Tabuada Simples</a>
        </li>
        <li>
            <a href="tabuadacompleta.php">Tabuada Completa</a>
        </li>
        <li>
            <a href="tabuadanumero.php">Tabuada Número</a>
            <br>
            <form action="tabuadanumero.php" method="get">
                <label for="fnumero">
                    Número: 
                </label>
                <input type="number" name="fnumero" value="0">
                <button type="submiti">Enviar</button>
            </form>
        </li>
    </ul>
</body>
</html>