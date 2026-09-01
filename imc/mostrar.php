<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <style>
         .titulo{
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        #resultado{
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        #invalido{
            color: red;
        }
        img {
            width: 150px;;
        }
    </style>
</head>
<body>
    <?php
        $nome = $_GET['nome'] ?? '';
        $idade = $_GET['idade'] ?? '';
        $peso = $_GET['peso'] ?? 0;
        $altura = $_GET['altura'] ?? 0;

        function calcularIMC($peso, $altura) {
            if ($peso > 0 && $altura > 0) {
                return $peso / ($altura * $altura);
            }
            return 0;
        }

        $imc = calcularIMC($peso, $altura);
    ?>
    <div id="resultado">
    <h1 class="titulo">Resultado do IMC</h1>
    <!-- Exibição de saída com os dados do usuário e o IMC calculado -->
    <p>Nome: <?php echo $nome; ?></p>
    <p>Idade: <?php echo $idade; ?></p>
    <p>IMC: <?php echo $imc; ?></p>
    <!-- Exibição da classificação do IMC -->
    <?php
        if ($imc == 0) {
            echo "<p id='invalido'>Dados inválidos para cálculo do IMC. Por favor, insira os dados corretamente.</p>";
        } elseif ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        } elseif ($imc < 24.9) {
            echo "<p>Classificação: Peso normal</p>";
        } elseif ($imc < 29.9) {
            echo "<p>Classificação: Sobrepeso</p>";
        } elseif ($imc < 34.9) {
            echo "<p>Classificação: Obesidade de grau 1</p>";
            echo "<img src='26729698-atencao-simbolo-atencao-ou-perigo-notificacao-vetor.jpg' alt='Atenção'>";
        } elseif ($imc < 39.9) {
            echo "<p>Classificação: Obesidade de grau 2</p>";
            echo "<img src='26729698-atencao-simbolo-atencao-ou-perigo-notificacao-vetor.jpg' alt='Atenção'>";
        } else {
            echo "<p>Classificação: Obesidade de grau 3</p>";
            echo "<img src='26729698-atencao-simbolo-atencao-ou-perigo-notificacao-vetor.jpg' alt='Atenção'>";
        }
    ?>
    </div>
</body>
</html>