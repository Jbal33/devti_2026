<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Funções</title>
</head>
   <?php
      function parimpar($numero) {
        if (($numero % 2) > 0) {
            return "ímpar";
        } else {
            return "par";
        }
      } 
   ?>
<body>
    <h1>Exemplo Funções</h1>
    <h2>Par e Ímpar</h2>
    <form action="#" method="get">
        <label for="fnumero">Número: </label>
        <input type="text" name="fnumero" placeholder="Informe um número">
        <br>
        <button type="submit">Checar</button> 
    </form>
    <?php
       if (isset($_GET["fnumero"])) {
         echo "O número ".$_GET["fnumero"]." informado, é ".parimpar($_GET["fnumero"]);
       } 
    ?>
    
</body>
</html>