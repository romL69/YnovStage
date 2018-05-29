<?php
require_once 'func/connection.php';
if (isset($_GET['createTheme']))
{
    $theme = $_POST['theme'];

    $connection->queryCreateData("
    INSERT INTO osi_theme (title)
    VALUES
    ('$theme')
    ");
}
if (isset($_GET['createSpeciality']))
{
    $skill = $_POST['speciality'];

    $connection->queryCreateData("
    INSERT INTO osi_skill (title)
    VALUES
    ('$skill')
    ");
}
     ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="?createTheme" method="post">
            <div class="form-div1 form-div2">
                      <label class="form-label">Créer un theme</label>
                      <input type="text" name="theme" class="input"/>
                  </div>
                  <button type="submit" class="form_submit">Recherche</button>

        </form>
        <form class="" action="?createSpeciality" method="post">
            <div class="form-div1 form-div2">
                      <label class="form-label">Créer une spécialité</label>
                      <input type="text" name="speciality" class="input"/>
                  </div>
                  <button type="submit" class="form_submit">Créer une spécialité</button>

        </form>
    </body>
</html>
