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
        <form class="create_them" action="?createTheme" method="post">
            <div class="create_them_text">
                <label for="theme">Créer un theme</label>
                <input type="text" name="theme" class="input"/>
            </div>
            <button type="submit" class="form_submit">Créer</button>
        </form>
        <form class="create_skill" action="?createSpeciality" method="post">
            <div class="create_skill_text">
                <label for="speciality">Créer une spécialité</label>
                <input type="text" name="speciality" class="input"/>
            </div>
            <button type="submit" class="form_submit">Créer</button>
        </form>
    </body>
</html>
