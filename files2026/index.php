<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação Arquivos</title>
</head>

<body>
    <h1>Manipulação de Arquivos</h1>
    <form action="acao.php" method="get">
        <label for="acao">Escolha a ação</label><br>
        <input type="radio" name="acao" value="readfile" checked>Ler arquivo (readfile)<br>
        <input type="radio" name="acao" value="editor">Editor arquivos txt (fopen, fwrite, file_exists)
        <br><br>
        <button type="submit">Executar</button>
    </form>

</body>

</html>