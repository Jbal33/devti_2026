<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio Dados</title>
</head>
<?php
   function jogardado() {
       return rand(1,6);
   } 

   function imgdado ($dado) {
        return "dados/$dado.png";
   }
?>
<body>
    <h1>Sorteio Dado</h1>
    <form action="#" method="post">
        <button type="submit" name="bsortear">Jogar Dado</button>
    </form>
    <table>  
    <?php
        for ($linha=1;$linha<=2;$linha++) {
            echo "<tr>";
            for ($coluna=1;$coluna<=3;$coluna++) {
                echo "<td>";
                if (isset($_POST["bsortear"])) {
                    $dado = jogardado();
                    echo "<img src='".imgdado($dado)."' width='180'>";
                } else {
                    echo "<img src='".imgdado(6)."' width='180'>";
                }
            echo "</td>";
            }
        }
    ?>
    </table>
</body>
</html>