<?php

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
  </body>
</html>
