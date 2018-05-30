<?php
require_once 'func/connection.php';
$themes = $connection->queryGetData("
        SELECT title
        FROM osi_theme;
        ");
$skills= $connection->queryGetData("
        SELECT title,id
        FROM osi_skill
        ");
if (!isset($_GET['recherche']))
{
$teams = $connection->queryGetData("
        SELECT title, type, class, description
        FROM osi_offer;
        ");
    }
if (isset($_GET['recherche']))
{
    if ($_POST['type']==='') {
        $_POST['type']=null;
    }
    if ($_POST['class']==='') {
        $_POST['class']=null;
    }
    if ($_POST['theme']==='') {
        $_POST['theme']=null;
    }
    $sql = "
        SELECT title, type, class, description, theme
        FROM osi_offer
        WHERE 1 = 1
    ";

    if (isset($_POST['type'])) {
        $sql .= "AND type ='".$_POST['type']."'";
    }
    if (isset($_POST['class'])) {
        $sql .= "AND class ='".$_POST['class']."'";
    }
    if (isset($_POST['theme'])) {
        $sql .= "AND theme ='".$_POST['theme']."'";
    }
    $teams = $connection->queryGetData($sql);
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>
          Stage Campus Ynov - Lyon
        </title>
        <!---<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
---->
        <link rel="stylesheet" href="/assets/master.css" >
        <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
---->
    </head>

    <body>
      <h1> Affinez votre recherche </h1>
      <h1> pour trouvez le profil qui vous intéresse </h1>

      <div class="form">
        <form class="formulaire" action="?recherche" method="POST">
          <h3> Sélectionnez vos critères de recherche </h3>
          <div class="form_class">
            <label for="inputClass"> Année </label>
            <select id="inputClass" class="form_class" name="class">
              <option value=""></option>
              <option>B1 Ingesup</option>
              <option>B2 Ingesup</option>

            </select>
          </div>
          <div class="form_type">
            <label for="inputType">Type</label>
            <select id="inputType" class="form_type" name="type">
              <option value=""></option>
              <option>Stage</option>
              <option>Alternance</option>

            </select>
          </div>
          <div class="form_them">
            <label for="inputThem">Thématique</label>
            <select id="inputThem" class="form_tem" name="theme">
                <option value=""></option>
              <?php
                foreach ($themes as $theme)
            {
                print '<option value="' . $theme['title'].'">' . $theme['title'] . '</option>' . "\n                                ";
                    }
                print "\n";
                ?>
            </select>
          </div>
          <div class="form_skill">
            <label for="inputSkill">Spécialité</label>
            <select id="inputSkill" class="form_skill" name="skills">
                <option value=""></option>
                <?php
                    foreach($skills as $skill)
                    {

                        print'<option value="'.$skill['id'].'"/>'.$skill['title'].'</option>' . "\n";
                    }
                 ?>
            </select>
          </div>
          <button type="submit" class="form_submit">Recherche</button>
        </form>
      </div>





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
