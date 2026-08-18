<!DOCTYPE html>
<html lang="por-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro código PHP</title>
</head>
<body>
    <h1>Este exemplo apresenta mais um código PHP integrado com html</h1>
    <!--Iniciando código PHP-->
    <?php
    echo "<h2>Olá mundo do server-side script com php</h2>";
    echo "<br>";
    date_default_timezone_set('America/Sao_Paulo');
    echo "Data e hora atual: " . date('d/m/Y H:i:s');
    ?>
    <!--Terminando código PHP-->
    <br>
    <!--Código em JavaScript-->
    <script language="javascript">
        document.write(new Date());
    </script>
</body>
</html>