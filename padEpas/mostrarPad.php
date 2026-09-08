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
        $pad = $_GET['pad'];
        $pas = $_GET['pas'];

        /*function calcularIMC($peso, $altura) {
            if ($peso > 0 && $altura > 0) {
                return $peso / ($altura * $altura);
            }
            return 0;
        }*/

        // $imc = calcularIMC($peso, $altura);//
    ?>
    <div id="resultado">
    <h1 class="titulo">Resultado da análise</h1>
    
    <p>Nome: <?php echo $nome; ?></p>
    <p>Idade: <?php echo $idade; ?></p>
    <p>PAD: <?php echo $pad; ?></p>
    <p>PAS: <?php echo $pas; ?></p>
    
    <?php
      function calcularPadePas($pad, $pas) {
        if ($pad <= 0 || $pas <= 0) {
            echo '<p id="invalido">Dados inválidos para a análise.</p>';
        } elseif ($pad < 85 && $pas < 130) {
            echo '<p>Classificação: Normal</p>';
        } elseif ($pad < 90 && $pas >= 140) {
            echo '<p>Classificação: Hipertensão sistólica isolada</p>';
            }
         elseif ($pad < 89 && $pas < 139) {
            echo '<p>Classificação: Normal Limítrofe</p>';
        } elseif ($pad < 99 && $pas < 159) {
            echo '<p>Classificação: Hipertensão estágio 1</p>';
        } elseif ($pad < 109 && $pas < 179) {
            echo '<p>Classificação: Hipertensão estágio 2</p>';
        } else {
            echo '<p>Classificação: Hipertensão estágio 3</p>';
        }
      }

      calcularPadePas($pad, $pas);
    ?>
    </div>
</body>
</html>