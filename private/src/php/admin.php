<?php

//parsedown pour les markdown
//$Parsedown = new Parsedown();
//echo $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
// you can also parse inline markdown only
//echo $Parsedown->line('Hello _Parsedown_!'); # prints: Hello <em>Parsedown</em>!
/*
//parsedown pour les markdown (DONE)
$to_show = $_GET['description'];
$Parsedown = new Parsedown();
echo $Parsedown->text($to_show);
*/
require_once (__DIR__.'/../../../vendor/autoload.php');

require_once 'func/connection.php';
$themes = $connection->queryGetData("
        SELECT title
        FROM osi_theme;
        ");
if (isset($_GET['createOffer']))
{
    $class = $_POST['class'];
    $type = $_POST['type'];
    $theme = $_POST['theme'];
    $description=$_POST['description'];
    $title=$_POST['title'];

    $connection->queryCreateData("
            INSERT INTO osi_offer (title,class, type, theme, description)
            VALUES
            ('$title','$class', '$type', '$theme','$description');
            ");
}
$teams = $connection->queryGetData("
        SELECT title, type, class, description,id
        FROM osi_offer;
        ");
        if(isset($_GET['delete']))
        {
            $delete=$connection->queryCreateData("
            DELETE FROM osi_offer
            WHERE id='".$_GET['delete']."';
            ");
            header('Location: admin.php');
        }
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion admin</title>
    <link rel="stylesheet" href="/assets/master.css" >
  </head>
  <body>
      <a href="specialities.php"> Créer des themes<input type="button"></a>
      <form class="" action="?createOffer" method="post">
          <div class="form-div1 form-div2">
                    <label class="form-label">Titre de l'offre</label>
                    <input type="text" name="title" class="input"/>
                </div>
          <div class="form_type">
            <label for="inputType">Classe</label>
            <select id="inputType" class="form_type" name="class">
              <option selected>B1 Ingesup</option>
              <option>B2 Ingesup</option>

            </select>
          </div>
          <div class="form_type">
            <label for="inputType">Type</label>
            <select id="inputType" class="form_type" name="type">
              <option selected>Stage</option>
              <option>Alternance</option>

            </select>
          </div>
          <div class="form_type">
            <label for="inputType">Thématique</label>
            <select id="inputType" class="form_type" name="theme">
                <?php
                  foreach ($themes as $theme)
              {
                  print '<option value="' . $theme['title'].'">' . $theme['title'] . '</option>' . "\n                                ";
                      }
                  print "\n";
                  ?>

            </select>
          </div>
          <div class="form_type">
            <label for="inputType">Spécialité</label>
            <select id="inputType" class="form_type" name="speciality">
              <<option selected> PHP </option>
              <option>HTML/CSS</option>
              <option>Java</option>
              <option>Symfony</option>
              <option>Angular</option>
              <option>Node JS</option>

            </select>
          </div>
          <div class="form-div1 form-div2">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="input"/></textarea>
                </div>
          <button type="submit" class="form_submit">CREER UNE OFFRE</button>

      </form>
      <div class="">
          <?php
                foreach ($teams as $team)
                {
                    $Parsedown = new Parsedown();
                    print '<div class="offer">
                       <div class="title">
                         <h4>'.$team["title"].'</h4>
                       </div>
                       <div class="type">
                         '.$team["type"].'
                       </div>
                       <div class="classe">
                         '.$team["class"].'
                       </div>
                       <div class="description">
                           '.$Parsedown->text($team["description"]).'
                       </div>
                       <a class="delete" href="?delete='.$team["id"].'"> Supprimer l\'offre </a>
                    </div>'
                ;}
                print "\n";
            ?>
      </div>
  </body>
</html>
