<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação Arquivos - Ação</title>
</head>

<body>
    <?php 
    if (isset($_GET["acao"])) {
        if ($_GET["acao"] == "readfile") {
            include("readfile.php");
        } elseif ($_GET["acao"] == "editor") {
            include("editor/editor.php");
        }
    } 
    ?>
    <br>
    <a href="index.php">Voltar</a>
</body>

</html>