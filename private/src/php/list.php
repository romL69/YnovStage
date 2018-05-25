<?php
require_once 'func/connection.php';

$teams = $connection->queryGetData("
        SELECT title, type, class
        FROM osi_offer;
        ");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>
          Stage Campus Ynov - Lyon
        </title>
        <?php
        include 'index.css'
        ?>


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../public/master.css" />
        <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
---->
    </head>
    <?php ?>
    <body>
      <h1> Affinez votre recherche </h1>
      <h1> pour trouvez le profil qui vous correspond </h1>
      <div id= "form">
        <h3> Sélectionnez vos critères de recherche </h3>
        <div class="form-check">
          <label for="form-check"> Année </label>
          <div id="years">
            <input class="form-check-input" type="checkbox" value="" id="selectClass1">
            <label class="form-check-label" for="selectClass1">
              Bachelor 1
            </label>
            <input class="form-check-input" type="checkbox" value="" id="selectClass2">
            <label class="form-check-label" for="selectClass2">
              Bachelor 2
            </label>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="inputThem">Thématique</label>
          <select id="inputThem" class="form-control">
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
          <select id="inputSkill" class="form-control">
            <option selected> PHP </option>
            <option>HTML/CSS</option>
            <option>Java</option>
            <option>Symfony</option>
            <option>Angular</option>
            <option>Node JS</option>
          </select>
        </div>
        <button type="submit" class="btn btn-submit">Recherche</button>
      </div>

      <div class="offer">
         <div class="title">
           <h4>Titre de l'offre</h4>
         </div>
         <div class="classe">
           B1 Ingésup
         </div>
         <div class="description">
           Ce profil bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
         </div>
         <div class="skills">
           Php ...
         </div>
      </div>
      <div class="">


      <?php
            foreach ($teams as $team)
            {
            print '<tr class="table-line">
                        <th class="table-case">'.$team["title"].'</th>
                        <td class="table-case">'.$team["type"].'</td>
                        <td class="table-case">'.$team["class"].'</td>
                    </tr>'."\n";
            }
            print "\n";
        ?>
     </div>
    </body>
</html>
