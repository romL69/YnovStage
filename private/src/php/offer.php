<?php
require_once 'func/connection.php';
require_once (__DIR__.'/../../../vendor/autoload.php');

$id=$_GET['id'];
$offre=$connection->queryGetData("
    SELECT *
    FROM osi_offer
    WHERE id='".$id."'
");

$skills=$connection->queryGetData("
SELECT skill_id
FROM osi_offer_skill
WHERE osi_offer_skill.offer_id='".$_GET['id']."'
");

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/assets/master.css" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <title>Détails de l'offre</title>

        <!--Balises méta-->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Détails offre stagiaire alternants informatique Lyon" />
        <meta property="og:sitename" content="ynovStage" />
        <meta property="og:description" content="Découvrez les détails d'un profil de stagiaire ou d'alternant en informatique sur Lyon" />

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


        <div class="retour">
            <p>
              <a href="liste"> < Retour </a>
            </p>
        </div>
        <div class="info_container">
            <div class="left">
                <table>
                    <tr>
                        <td>
                            <div class="title">
                                <h1><?php
                                    print $offre[0]["title"];
                                ?> </h1>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="subtitle">
                                <p class="sub">
                                <?php
                                    print $offre[0]["class"]." - ".$offre[0]["period"];
                                    ?>
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="description">
                                <?php
                                    $Parsedown = new Parsedown();
                                    print $Parsedown->text($offre[0]["description"]);
                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="right">
                <div class="skills">
                    <p id="php"><i class="fab fa-php"></i> PHP</p>
                    <p id="node_js"><i class="fab fa-node"></i> Node.js</p>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['frm_mail'])) {
            echo "<div class=\"alert alert-warn\">";
            echo "<p>Le mail a bien été envoyé !</p>";
            echo "</div>";        }
         ?>
        <form class="form_fields" action="" method="POST">
              <legend class="title_contact">Nous contacter à propos de ce profil</legend>
              <div class="civility">
                <label for="frm_civility">Civilité<span class="needed">*</span></label>
                <select name="frm_civility" data-frmval="Monsieur" data-reqmsg="Ce champ ne peut pas être vide">
                  <option value="Monsieur"  selected="selected">Monsieur</option>
                  <option value="Madame" >Madame</option>
                </select>
              </div>
              <div class="name">
                <label for="frm_name">NOM<span class="frm_required">*</span></label>
                <input type="text" name="frm_name" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class="surname">
                <label for="frm_surname">Prénom<span class="frm_required">*</span></label>
                <input type="text" name="frm_surname" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class="enterprise">
                <label for="frm_enterprise">Nom de l'entreprise<span class="frm_required">*</span></label>
                <input type="text" name="frm_enterprise" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class="email">
                <label for="frm_mail">E-Mail<span class="frm_required">*</span></label>
                <input type="email" name="frm_mail" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class="tel">
                <label for="frm_mobile">Téléphone<span class="frm_required">*</span></label>
                <input type="tel" name="frm_mobile" value=""  data-reqmsg="Ce champ ne peut pas être vide"  />
              </div>
              <div class"message">
                <label for="frm_message">Dites-nous tout :<span class="frm_required">*</span></label>
                <textarea name="frm_message" data-reqmsg="Ce champ ne peut pas être vide"></textarea>
            </div>
            <button type="submit" class="contact_validate"> Envoyer </button>
      </form>


    <?php
        //SWIFT MAILER
        if(isset($_POST['frm_mail'])){
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
                ->setUsername('ynovStageInge@gmail.com')
                ->setPassword('Pouloulou869');

            $mailer = new Swift_Mailer($transport);

            $message = (new Swift_Message("Renseignements à propos d\'un profil : '".$offre[0]["title"]."'"))
                    ->setFrom([$_POST['frm_mail'] => $_POST['frm_surname']." ".$_POST['frm_name']])
                    ->setTo(['ynovStageInge@gmail.com' => 'Offre Stage'])
                    ->setBody($_POST['frm_message']."\n"."\n".$_POST['frm_civility']." ".$_POST['frm_name']." ".$_POST['frm_surname']."\n".
                        'Mail : '.$_POST['frm_mail']." | Téléphone : ".$_POST['frm_mobile'])
            ;
            $result = $mailer->send($message);
        }
    ?>
    </body>
</html>
