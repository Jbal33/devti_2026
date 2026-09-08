<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Conta de Luz Residencial com Bandeira Tarifária</title>
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
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body> 
    <h1 class="titulo">Simulador de Conta de Luz Residencial com Bandeira Tarifária</h1>
    <div id="dados">
    <form action="mostrarContadeLuz.php" method="post"> <!-- Faz o botão "Calcular" levar ao "mostrarContadeLuz" -->
        <label for="nome">Nome:</label>
        <br>
        <input type="text" id="nome" name="nome" required>
        <br>
        <br>
        <label for="consumo">Consumo do mês (kWh):</label>
        <br>
        <input type="number" id="consumo" name="consumo" min="0" step="0.01" required>
        <br>
        <label for="bandeiratarifária">Bandeira Tarifária:</label>
        <br>
        <select name="bandeiratarifária" id="bandeiratarifária">
            <option value="verde">Verde</option>
            <option value="amarela">Amarela</option>
            <option value="vermelhapat1">Vermelha patamar 1</option>
            <option value="vermelhapat2">Vermelha patamar 2</option>
        </select>
        <br>
        <br>
        <button type="submit">Calcular</button>
        
    </form>
    
</body>
</html>