<?php
    echo "<h1>Ler arquivo (readfile)</h1>";
    $arquivo = "texto.txt";
    echo "Exibindo conteúdo <strong>$arquivo</strong>";
    echo "<pre>";
    $nrocaracteres = readfile($arquivo);
    echo "\n\nArquivo possui $nrocaracteres caracteres";
    echo "</pre>";
    echo "<br>";
?>