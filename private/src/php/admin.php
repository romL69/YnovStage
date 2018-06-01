<?php
require_once (__DIR__.'/../../../vendor/autoload.php');
require_once 'func/connection.php';

if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username']=="admin-ynov" && $_POST['password']=="secret-ynov")
{

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
    $period=$_POST['period'];
    $connection->queryCreateData("
            INSERT INTO osi_offer (title,class, type, theme, description, period)
            VALUES
            ('$title','$class', '$type', '$theme','$description','$period');
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


require_once 'adminpannel.php';
}
else
{
print'nom utilisateur ou mot de passe incorrect;
</div>
<a class="delete" href="login"> Se connecter </a>
</div>';
}
?>
