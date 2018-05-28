<?php
require_once 'func/connection.php';

if (!isset($_GET['recherche']))
{
$teams = $connection->queryGetData("
        SELECT title, type, class
        FROM osi_offer;
        ");
    }
if (isset($_GET['recherche']))
{


    $teams = $connection->queryGetData("
            SELECT title, type, class, description
            FROM osi_offer
            WHERE type='".$_POST['type']."'"
            );


}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>
          Stage Campus Ynov - Lyon
        </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" href="/YnovStage/public/master.css" >
        <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
---->
    </head>

    <body>
      <h1> Affinez votre recherche </h1>
      <h1> pour trouvez le profil qui vous correspond </h1>
      <form class="form" action="?recherche" method="POST">
        <h3> Sélectionnez vos critères de recherche </h3>
        <div class="form-check">
          <label for="form-check"> Année </label>
          <div id="years">
            <input class="form-check-input" type="checkbox" name="ingesup[] "value="B1 Ingesup" id="selectClass1">
            <label class="form-check-label" for="selectClass1">
              Bachelor 1
            </label>
            <input class="form-check-input" type="checkbox" name="ingesup[] "value="B2" id="selectClass2">
            <label class="form-check-label" for="selectClass2">
              Bachelor 2
            </label>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="inputThem">Type</label>
          <select id="inputThem" class="form-control" name="type">
            <option selected>Stage</option>
            <option>Alternance</option>

          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputThem">Thématique</label>
          <select id="inputThem" class="form-control" name="field">
            <option selected>Développement Web</option>
            <option>Développement logiciel</option>
            <option>Développement mobile</option>
            <option>Infrastructure et SI</option>
            <option>Base de données</option>
            <option>Cyber-sécurité</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputSkill">Spécialité</label>
          <select id="inputSkill" class="form-control" name="speciality">
            <option selected> PHP </option>
            <option>HTML/CSS</option>
            <option>Java</option>
            <option>Symfony</option>
            <option>Angular</option>
            <option>Node JS</option>
          </select>
        </div>
        <button type="submit" class="btn btn-submit">Recherche</button>
        </form>


        



      <?php
            foreach ($teams as $team)
            {
                print '<div class="offer">
                   <div class="title">
                     <h4>'.$team["title"].'</h4>
                   </div>
                   '.$team["type"].'
                   <div class="classe">
                     '.$team["class"].'
                   </div>
                   <div class="description">
                '.$team["description"].'
                   </div>
                   <div class="skills">
                     Php ...
                   </div>
                </div>'
            ;
            }
            print "\n";
        ?>
     </div>
    </body>
</html>
