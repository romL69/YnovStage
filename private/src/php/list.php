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
        SELECT title, type, class, description,id
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
    if ($_POST['skill']==='') {
        $_POST['skill']=null;
    }
    $sql = "
        SELECT title, type, class, description, theme,id
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
      <h1> Affinez votre recherche <br> pour trouvez le profil qui vous intéresse </h1>

      <!---- formulaire de recherche --->
      <div class="form">
        <form class="formulaire" action="?recherche" method="POST">
          <h3> Sélectionnez vos critères de recherche </h3>
<<<<<<< HEAD
          <div class="form_type">
            <label for="inputType">Type</label>
            <select id="inputType" class="form_type" name="type">
              <option value=""></option>
              <option>Stage</option>
              <option>Alternance</option>

            </select>
          </div>
=======
            <div class="form_type">
                <label for="inputType">Type</label>
                <select id="inputType" class="form_type" name="type">
                    <option selected>Stage</option>
                    <option>Alternance</option>
                    <option> CDD </option>
                    <option> CDI </option>
                </select>
            </div>
              <div class="form_class">
                <label for="inputClass"> Ecole </label>
                <select id="inputClass" class="form_class" name="class">
                  <option selected>Ingesup</option>
                  <option>Digital Business School</option>
                    <option> Animation 3D / Jeux vidéo </option>
                    <option> Web, com & graphic design</option>
                    <option> Audiovisuel </option>
                </select>
              </div>
              <div class="form_them">
                <label for="inputThem"> Intitulé </label>
                <select id="inputThem" class="form_tem" name="theme">

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
                <select id="inputSkill" class="form_skill" name="speciality">
                    <?php
                        foreach($skills as $skill)
                        {
                            print'<input type="checkbox" name="skills[]" value="'.$skill['title'].'"/>'.$skill['title'].'<br>';
                        }
                     ?>
                </select>
              </div>
              <button type="submit" class="form_submit">Recherche</button>

>>>>>>> 79b70ccf99b70a62c0d5e550a660650d8b9dac72
          <div class="form_class">
            <label for="inputClass"> Ecole </label>
            <select id="inputClass" class="form_class" name="class">
              <option value=""></option>
              <option>B1 Ingesup</option>
              <option>B2 Ingesup</option>

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
            <select id="inputSkill" class="form_skill" name="skill">
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




      <!---- Typical offer --->
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
                   <a class="infos" href="offer.php?'.$team["id"].'"> Plus d\'infos </a>
                   
                </div>'
            ;
            }
            print "\n";
        ?>


     </div>
    </body>
</html>
