DROP DATABASE IF EXISTS ynovstage;
CREATE DATABASE IF NOT EXISTS ynovstage;
                        USE ynovstage;

                        DROP TABLE IF EXISTS `osi_offer`;
                        CREATE TABLE IF NOT EXISTS `osi_offer` (
                          `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                          `title` varchar(255) NOT NULL DEFAULT '',
                          `type` varchar(255) NOT NULL DEFAULT '',
                          `class` varchar(255) NOT NULL DEFAULT '',
                          `description` text NOT NULL,
                          `period` varchar(255) DEFAULT NULL,
                          `from_date` date DEFAULT NULL,
                          `to_date` date DEFAULT NULL,
                          `theme` varchar(255) DEFAULT NULL,
                          PRIMARY KEY (`id`)
                        ) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;


                        INSERT INTO `osi_offer` (`id`, `title`, `type`, `class`, `description`, `period`, `from_date`, `to_date`, `theme`) VALUES
                        (53, 'Developpement web stage', 'Stage', 'Ingesup', '##Description\r\nLes eleves de Bachelor 1 Ingesup recherchent un stage  developpement web afin de valider leur premiere annee d\'etude et d\'acquÃƒÂ©rir une premiÃƒÂ¨re expÃƒÂ©rience professionnelle. Pour rÃƒÂ©aliser ce stage les ÃƒÂ©lÃƒÂ¨ves devront utiliser les compÃƒÂ©tences acquises au cour de leur annÃƒÂ©e d\'ÃƒÂ©tude.\r\n##CompÃƒÂ©tences\r\nDurant cette annÃƒÂ©e les ÃƒÂ©lÃƒÂ¨ves ont acquis des competences en HTML/CSS, PHP, JavaScript, Ergonomie et SEO pour la crÃƒÂ©ation de site web ainsi que des compÃƒÂ©tences en gestion de base de donnÃƒÂ©es SQL. Ils ont pu mettre ÃƒÂ  profit ces compÃƒÂ©tences thÃƒÂ©oriques dans des projets.', '4 semaines', NULL, NULL, 'Developpement web'),
                        (54, 'Developpement web stage', 'Stage', 'Ingesup', '##Description\r\nLes ÃƒÂ©lÃƒÂ¨ves de Bachelor 1 IngÃƒÂ©sup recherchent un stage  dÃƒÂ©veloppement web afin de valider leur premiÃƒÂ¨re annÃƒÂ©e d\'ÃƒÂ©tude et d\'acquÃƒÂ©rir une premiÃƒÂ¨re expÃƒÂ©rience professionnelle. Pour rÃƒÂ©aliser ce stage les ÃƒÂ©lÃƒÂ¨ves devront utiliser les compÃƒÂ©tences acquises au cour de leur annÃƒÂ©e d\'ÃƒÂ©tude.\r\n##CompÃƒÂ©tences\r\nDurant cette annÃƒÂ©e les ÃƒÂ©lÃƒÂ¨ves ont acquis des compÃƒÂ©tences en HTML/CSS, PHP, JavaScript, Ergonomie et SEO pour la crÃƒÂ©ation de site web ainsi que des compÃƒÂ©tences en gestion de base de donnÃƒÂ©es SQL. Ils ont pu mettre ÃƒÂ  profit ces compÃƒÂ©tences thÃƒÂ©oriques dans des projets.', 'tout les soirs', NULL, NULL, 'Developpement web'),
                        (62, 'Developeur jeux video', 'Alternance', 'Animation 3D / Jeux vidÃƒÂ©o', '##Description\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit imperdiet bibendum. Quisque auctor nunc eget orci ullamcorper finibus. Nulla augue sapien, auctor vel blandit non, vulputate ut leo. Pellentesque nec luctus turpis, fringilla mollis est. Pellentesque felis augue, varius nec feugiat id, dapibus ac erat.\r\n##CompÃƒÂ©tences\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit imperdiet bibendum. Quisque auctor nunc eget orci ullamcorper finibus. Nulla augue sapien, auctor vel blandit non, vulputate ut leo. Pellentesque nec luctus turpis, fringilla mollis est. Pellentesque felis augue, varius nec feugiat id, dapibus ac erat.', '1 semaine sur 2', NULL, NULL, 'Jeux video'),
                        (63, 'Developeur jeux video', 'CDD', 'Ingesup', '##Description\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit imperdiet bibendum. Quisque auctor nunc eget orci ullamcorper finibus. Nulla augue sapien, auctor vel blandit non, vulputate ut leo. Pellentesque nec luctus turpis, fringilla mollis est. Pellentesque felis augue, varius nec feugiat id, dapibus ac erat.\r\n##CompÃƒÂ©tences\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit imperdiet bibendum. Quisque auctor nunc eget orci ullamcorper finibus. Nulla augue sapien, auctor vel blandit non, vulputate ut leo. Pellentesque nec luctus turpis, fringilla mollis est. Pellentesque felis augue, varius nec feugiat id, dapibus ac erat.', 'tout les jours', NULL, NULL, 'Jeux video'),
                        (65, 'Developpement web stage', 'CDI', 'Ingesup', '##Description\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit imperdiet bibendum. Quisque auctor nunc eget orci ullamcorper finibus. Nulla augue sapien, auctor vel blandit non, vulputate ut leo. Pellentesque nec luctus turpis, fringilla mollis est. Pellentesque felis augue, varius nec feugiat id, dapibus ac erat.\r\n##CompÃƒÂ©tences\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit imperdiet bibendum. Quisque auctor nunc eget orci ullamcorper finibus. Nulla augue sapien, auctor vel blandit non, vulputate ut leo. Pellentesque nec luctus turpis, fringilla mollis est. Pellentesque felis augue, varius nec feugiat id, dapibus ac erat.', 'CDI', NULL, NULL, 'Developpement web'),
                        (66, 'Developeur jeux video', 'CDD', 'Animation 3D / Jeux vidÃƒÂ©o', 'dded', '6 mois', NULL, NULL, 'Jeux video');


                        DROP TABLE IF EXISTS `osi_offer_skill`;
                        CREATE TABLE IF NOT EXISTS `osi_offer_skill` (
                          `offer_id` int(11) UNSIGNED NOT NULL,
                          `skill_id` int(11) UNSIGNED NOT NULL,
                          KEY `fk_offer_id` (`offer_id`),
                          KEY `fk_skill_id` (`skill_id`)
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;



                        INSERT INTO `osi_offer_skill` (`offer_id`, `skill_id`) VALUES
                        (1, 1),
                        (1, 2),
                        (1, 3),
                        (2, 1),
                        (2, 2),
                        (2, 3),
                        (2, 4),
                        (2, 5);


                        DROP TABLE IF EXISTS `osi_skill`;
                        CREATE TABLE IF NOT EXISTS `osi_skill` (
                          `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                          `title` varchar(255) NOT NULL DEFAULT '',
                          PRIMARY KEY (`id`)
                        ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;



                        INSERT INTO `osi_skill` (`id`, `title`) VALUES
                        (1, 'PHP'),
                        (2, 'Ergonomie'),
                        (3, 'SEO'),
                        (4, 'Symfony'),
                        (5, 'Node.js'),
                        (6, 'c++');
                        DROP TABLE IF EXISTS `osi_theme`;
                        CREATE TABLE IF NOT EXISTS `osi_theme` (
                          `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                          `title` varchar(255) NOT NULL DEFAULT '',
                          PRIMARY KEY (`id`)
                        ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;


                        INSERT INTO `osi_theme` (`id`, `title`) VALUES
                        (3, 'Developpement web'),
                        (5, 'Developpement mobile'),
                        (6, 'Jeux video');
