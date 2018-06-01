<?php



if(strstr($_SERVER["REQUEST_URI"], "/stage") || strstr($_SERVER["REQUEST_URI"], "liste") || strstr($_SERVER["REQUEST_URI"], "offres" ))
  {
require_once '..\private\src\php\list.php';
}
elseif(strstr($_SERVER["REQUEST_URI"], "/login") )
  {
require '..\private\src\php\login.php';
}
elseif(strstr($_SERVER["REQUEST_URI"], "/admin") )
  {
require '..\private\src\php\admin.php';
}
elseif(strstr($_SERVER["REQUEST_URI"], "/specialities") )
  {
require '..\private\src\php\specialities.php';
}
elseif(strstr($_SERVER["REQUEST_URI"], "/offer") )
  {
require '..\private\src\php\offer.php';
}
else {
    require_once '..\private\src\php\list.php';
}
