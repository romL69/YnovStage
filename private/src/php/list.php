<?php
require_once 'func/connection.php';
require_once (__DIR__.'/../../../vendor/autoload.php');

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
        <!--Balises méta-->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Recherche stagiaires alternants  informatique Lyon" />
        <meta property="og:sitename" content="ynovStage" />
        <meta property="og:description" content="Trouver un stagiaire ou un alternant en informatique sur Lyon" />

        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'GA_TRACKING_ID');
        </script>
    </head>

    <body>
        <header>
            <div class="banner">
                <img url="/public/logo_ynov_campus_rvb_blanc.jpg" alt="logo ynov">
            </div>
        </header>

        <div class="retour">
          <p>
            <a href="admin">  Page Admin </a>
          </p>
        </div>
      <h1> Affinez votre recherche <br> pour trouvez le profil qui vous intéresse </h1>

      <!-- formulaire de recherche --->
      <div class="form">
        <form class="formulaire" action="?recherche" method="POST">
          <h3> Sélectionnez vos critères de recherche </h3>

            <div class="form_type">
                <label for="inputType">Type</label>
                <select id="inputType" class="form_type" name="type">
                    <option value=""></option>
                    <option>Stage</option>
                    <option>Alternance</option>
                    <option> CDD </option>
                    <option> CDI </option>
                </select>
            </div>

            <div class="form_class">
                <label for="inputClass"> Ecole </label>
                <select id="inputClass" class="form_class" name="class">
                    <option value=""></option>
                    <option >Ingesup</option>
                    <option>Digital Business School</option>
                    <option> Animation 3D / Jeux vidéo </option>
                    <option> Web, com & graphic design</option>
                    <option> Audiovisuel </option>
                </select>
            </div>

            <div class="form_them">
                <label for="inputThem"> Intitulé </label>
                <select id="inputThem" class="form_tem" name="theme">
                    <option value=""></option>

                  <?php

                    foreach ($themes as $theme)
                {
                    print '<option value="' . $theme['title'].'">' . $theme['title'] . '</option>' . "\n";
                        }
                    print "\n";
                    ?>
                </select>
            </div>

            <!--- <div class="form_skill">
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
             </div>--->
            <button type="submit" class="form_submit">Recherche</button>
        </form>
      </div>
      <?php
      if(isset($_GET['recherche']))
        {
            print 'Critères de recherche : ';
            if (isset($_POST['type']))
            {
                print $_POST['type'];
            }
            if (isset($_POST['class'])) {
                print "  -  ";
                print $_POST['class'];
            }
            if (isset($_POST['theme'])) {
                print "  -  ";
                print $_POST['theme'];
            }
            if (!isset($_POST['type']) && !isset($_POST['theme'])&& !isset($_POST['class']))
            {
                print " aucun";
            }
        }
       ?>



      <!-- Typical offer --->
      <?php
            foreach ($teams as $team)
            {
                $text=substr($team["description"], 14, 60);
                $Parsedown = new Parsedown();


                print '<div class="offer">

                                        <div class="title">
                                            <h2>'.$team["title"].'</h2>
                                        </div>

                                        <div class="type">
                                            '.$team["type"].'
                                        </div>

                                        <div class="classe">
                                             '.$team["class"].'
                                        </div>

                                        <div class="description">
                                            '.$Parsedown->text($text).'
                                        </div>

                                        <a class="infos" href="offer.php?id='.$team["id"].'"> Plus d\'infos </a>
                        </div>'
            ;
            }
            print "\n";
        ?>


     </div>
    </body>
</html>
