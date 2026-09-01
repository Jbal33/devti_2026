<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
    <style>
        .titulo{
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        #dados{
            display: flex;
            justify-content: center; /* Centraliza na horizontal */
            align-items: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin: 70px;
        }
        input{
            border: 1px solid;
            border-radius: 6px;
            padding: 5px;
        }
    </style>
</head>
<body>  <!-- Slide : 91 ... -->
    <h1 class="titulo">Cálculo de IMC</h1>
    <div id="dados">
    <form action="mostrar.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <br>
        <br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">
        <br>
        <br>
        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso">
        <br>
        <br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" step="0.01">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>
    </div>
</body>
</html>