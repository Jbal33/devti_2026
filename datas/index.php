<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos Data</title>
</head>
<body>
    <h1>Cálculo Idade</h1>
    <form action="#" method="get">
        <label for="fnome">Nome: </label>
        <input type="text" name="fnome">
        <br>
        <label for="fnasimento">Data Nascimento</label>
        <input type="date" name="fnascimento">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php 
       date_default_timezone_set("America/Sao_paulo");
       if (isset($_GET["fnome"]) && isset($_GET["fnascimento"])) {
          $hoje = new DateTime();
          $datanascimento = new DateTime(($_GET["fnascimento"]));
          $idade = $datanascimento->diff($hoje);
          echo "Olá ".$_GET['fnome']." Sua idade é ".$idade->format("%y anos %m meses %d dias %h horas %i minutos %s segundos ");
       } else {
        echo "ERRO: Informe o nome e a data de nascimento";
       }
    ?>
</body>
</html>