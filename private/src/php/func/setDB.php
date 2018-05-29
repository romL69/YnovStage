<?php
require_once 'SQL.php';

if (isset($_GET['setDB'])) {

$BDD = new SQL("", $_POST["userName"], $_POST["password"]);
$BDD->queryCreateData("DROP DATABASE IF EXISTS " . $_POST["dbName"] . ";");

$BDD->queryCreateData("
CREATE DATABASE IF NOT EXISTS " . $_POST["dbName"] . ";" . "
                        USE " . $_POST["dbName"] . ";" . "

DROP TABLE IF EXISTS `osi_offer`;

CREATE TABLE `osi_offer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `theme` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `osi_offer` (`id`, `title`, `type`, `class`, `description`, `period`, `from_date`, `to_date`)
VALUES
	(1,'Developpeur Web en Stage','Stage','B1 Ingesup','## Description\n\nLes Ã©tudiants de premiÃ¨re annee cherchent un stage. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.\n\n## CompÃ©tences acquises\n\nLes Ã©tudiants ont rÃ©alisÃ© un **projet transvesal**. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.','4 semaines','2018-07-01','2018-08-31'),
	(2,'Developpeur Web en Alternance','Alternance','B2 Ingesup','## Description\n\nLes Ã©tudiants de deuxiÃ¨me annÃ©e cherchent une alternance. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.\n\n## CompÃ©tences acquises\n\nLes Ã©tudiants ont rÃ©alisÃ© un **projet Symfony**. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat fermentum gravida. In eleifend venenatis dui, ut congue nisi ullamcorper ut. Nunc gravida rhoncus volutpat. In pharetra maximus purus quis elementum. Sed commodo auctor metus quis semper. Pellentesque sagittis condimentum massa ut rhoncus. Pellentesque luctus dignissim velit, eu malesuada tortor tristique eget. Fusce eget tempus orci.','une semaine sur deux','2018-08-31','2019-06-30');

DROP TABLE IF EXISTS `osi_offer_skill`;

CREATE TABLE `osi_offer_skill` (
  `offer_id` int(11) unsigned NOT NULL,
  `skill_id` int(11) unsigned NOT NULL,
  KEY `fk_offer_id` (`offer_id`),
  KEY `fk_skill_id` (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `osi_offer_skill` (`offer_id`, `skill_id`)
VALUES
	(1,1),
	(1,2),
	(1,3),
	(2,1),
	(2,2),
	(2,3),
	(2,4),
	(2,5);

DROP TABLE IF EXISTS `osi_skill`;

CREATE TABLE `osi_skill` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `osi_skill` (`id`, `title`)
VALUES
	(1,'PHP'),
	(2,'Ergonomie'),
	(3,'SEO'),
	(4,'Symfony'),
	(5,'Node.js');
    ");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/assets/master.css" >

        <title></title>
    </head>
    <body>
        <h1>CREATION DB</h1>
        <form class="" action="?setDB" method="post">
            <label class="form-label">Nom DB</label>
                    <input type="text" name="dbName" class="input"/>
            <label class="form-label">Nom utilisateur</label>
                    <input type="text" name="userName" class="input"/>
            <label class="form-label">Mot de passe</label>
                    <input type="text" name="password" class="input"/>
            <button type="submit" class="btn btn-submit">Créer DB</button>

        </form>
    </body>
</html>
