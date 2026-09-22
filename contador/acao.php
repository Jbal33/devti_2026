<?php
   session_start();
   if (isset($_SESSION["contador"])) {
       if (isset($_GET["acao"])) {
          if ($_GET["acao"] == "+") {
              $_SESSION["contador"]++;
              $_SESSION["Msg"] = "Incrementado Contador";
          } else {
              $_SESSION["contador"]--;
              $_SESSION["Msg"] = "Decrementado Contador";
          }
       }
   } else {
       $_SESSION["Msg"] = "Erro! Primeiro inicialize o contator";
   }
    header("Location: .");
?>