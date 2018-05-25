<?php


if(strstr($_SERVER["REQUEST_URI"], "/stage") || strstr($_SERVER["REQUEST_URI"], "liste") || strstr($_SERVER["REQUEST_URI"], "offres"))
  {
require '..\private\src\php\list.php';
}
require '..\private\src\php\list.php';
?>
