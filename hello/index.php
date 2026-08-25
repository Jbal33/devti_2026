<html>
        <head>
            <title>Hello World. PHP</title>
        </head>
    <body>
        <h1>Iniciamos com titulo no HTML</h1>
        <!--Quando queremos incluir php, devemos iniciar com a tag abaixo-->
        <?php
            echo "<h2>Esse titulo foi criado pelo php</h2>";
            echo "<br>";

            echo "Navegador (user_agent): " . $_SERVER['HTTP_USER_AGENT'];
        ?>
        <!--OBS:A tag acima informa que terminou o bloco php-->
        <hr>
        <h2>
            Informações do Servidor
        </h2>
        <?php
            echo "Software: Servidor Web: " . $_SERVER['SERVER_SOFTWARE'];
        ?>    
        <br>
        <a href="phpinfo.php">Obtenha informações referentes ao PHP usando o phpinfo()</a>
        <br>
        <a href="olanome.php">Olá, Nome!</a>
    </body>
</html>