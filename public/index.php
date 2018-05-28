<?php

session_start();

    $_SESSION["RacineServ"] = "../".__DIR__;

if(strstr($_SERVER["REQUEST_URI"], "/stage") || strstr($_SERVER["REQUEST_URI"], "liste") || strstr($_SERVER["REQUEST_URI"], "offres"))
  {
require_once '..\private\src\php\list.php';
}
require_once '..\private\src\php\list.php';
?>
