<?php

session_start();

$_SESSION["RacineServ"] = "../".__DIR__;

if(strstr($_SERVER["REQUEST_URI"], "/stage") || strstr($_SERVER["REQUEST_URI"], "liste") || strstr($_SERVER["REQUEST_URI"], "offres"))
  {
require_once '..\private\src\php\list.php';
}
if(strstr($_SERVER["REQUEST_URI"], "/setDB") )
  {
require '..\private\src\php\func\setDB.php';
}
if(strstr($_SERVER["REQUEST_URI"], "/admin") )
  {
require '..\private\src\php\admin.php';
}
if(strstr($_SERVER["REQUEST_URI"], "/specialities") )
  {
require '..\private\src\php\specialities.php';
}
if(strstr($_SERVER["REQUEST_URI"], "/offer") )
  {
require '..\private\src\php\offer.php';
}
/*
<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/':
        require '../views/home.php';
        break;
    // About page
    case '/about':
        require '../views/about.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require '../views/404.php';
        break;
}
?>*/
