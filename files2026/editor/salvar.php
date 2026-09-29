<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor - Salvar</title>
</head>

<body>
    <?php 
    try {
        if (isset($_POST["fnomearq"]) && isset($_POST["ftextoarq"])) {
                //$caminho = dirname(__DIR__)."/editor/arq/";
                $caminho = dirname(__DIR__)."\\editor\\arq\\";
                $nomearquivo = $caminho.basename($_POST["fnomearq"]); 
                if (!file_exists($nomearquivo)) {
                    if ($arq = fopen($nomearquivo, "x")) {

                        echo "Arquivo $nomearquivo salvo com ".fwrite($arq,$_POST["ftextoarq"])." bytes<br>"; 
                        fclose($arq);
                    } else {
                        throw new Exception("Erro ao salva arquivo $nomearquivo", 1);  
                    }
                } else {
                    echo "ERRO! Arquivo já existe";
                }
        }
    } catch (Exception $e) {
        echo "Erro! ".$e->getMessage();
    }
    ?>
    <br>
    <a href="../../acao.php?acao=editor">Voltar</a>
</body>

</html>