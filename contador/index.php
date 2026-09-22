<?php 
   session_start();
   if (!isset($_SESSION["contador"])) {
       $_SESSION["contador"] = 0;
   } else {
       echo  "Contator: <strong>".$_SESSION["contador"]."</strong>";
   }
   
   if (isset($_SESSION["Msg"])) {
        echo "<p style='color: darkgray'>".$_SESSION["Msg"]."</p>";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Sessões</title>
</head>
<body>
    <h1>Exemplo Sessões</h1>
    <form action="acao.php" method="get">
        <input type="radio"  value="+" name="acao" checked><label>+ (incrementar)</label>&nbsp;
        <input type="radio"  value="-" name="acao"><label>- (decrementar)</label>
        <br>
        <button type="submit">OK</button>
    </form>
</body>
</html>