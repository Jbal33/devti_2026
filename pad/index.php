<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do PAD e PAS</title>
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
        #menu {
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>
<body>  <!-- Slide : 91 ... -->
    <h1 class="titulo">Cálculo de PAD e PAS</h1>
    <div id="dados">
    <form action="mostrarPad.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <br>
        <br>
        <label for="idade">Idade:</label>
        <br>
        <input type="number" id="idade" name="idade"> <!-- Ver como pegar a idade através da data de nascimento -->
        <br>
        <br>
        <label for="pad">PAD(mmHg):</label>
        <input type="number" id="pad" name="pad">
        <br>
        <br>
        <label for="pas">PAS(mmHg):</label>
        <input type="number" id="pas" name="pas">
        <br>
        <br>
        <button type="submit">Calcular</button>
        
    </form>
    </div>
    <div id="menu">
        <a href="../imc/index.php">Calcular IMC</a>
    </div>
</body>
</html>