#Design

Dans ce fichier, vous trouverez l'explication du design utilisé pour le site YnovStage

Nous avons choisi de mettre en place trois pages : la liste des offres, le détail d'un offre et le menu admin

##Charte graphique
Nous avons choisi un design simple reprenant les couleurs d'Ynov. Si l'on ajoute une barre de navigation, on pourrait mettre en avant un logo de l'école.

Les titres de chacune de pages est simple et cohérent. Le design des pages est harmonieux et ne change pas radicalement d'une page à l'autre.

##Page Liste des offres

Cette page se divise en deux parties. On y trouve premièrement le __formulaire__ qui permet d'affiner la rechercher et deuxièmement la __liste des offres__ correspondant aux critères plus haut. Initialement, cette page affiche un formulaire de recherche vierge et toutes les offres disponibles à ce jour. On peut mener la recherche par un ou plusieurs critères.

Le formulaire doit permettre de chercher selon le __type de contract__ (stage, alternance, CDD, CDI), l'__école__/domaine (Ingesup, ISEE, IMART, Audiovisuel et Jeux vidéo), l'__intitulé__ (genre "Développement Web) et la __spécialité__ (php, html...). En appuyant sur le bouton "Rechercher", on lance le tri des offres correspondant aux critères en dessous.

Les aperçus de profils sont clairs et concis et résument simplement le __titre de l'offre__, le __type de contrat__, l'__école__ ainsi que le début de la __description du profil__. Chaque aperçu comporte un bouton "Plus d'infos" qui renvoie vers la page détails du profil en question.

##Page Détails du profil

La page profil présente la __totalité du profil__ (titre, type de contrat, période, spécialités, description complète...).
Elle comporte un __bouton retour__ qui permet de revenir à la page liste.

Elle possède également un __formulaire de contact__ qui envoie un mail à l'école pour une demande de renseignements ou pour une mise en contact avec les personnes correspondant au profil mis en avant. Ce mail possède toutes les caractéristiques de l'offre en question pour que la personne réceptionnant le mail sache de quelle offre il s'agit. Un message de confirmation apparait à l'écran pour valider le bon envoi du mail.  

##Page admin

La partie admin du site doit être __sécurisée par une connexion__ avec identifiant et mot de passe (un compte administrateur unique) pour que les visiteurs du site ne puissent pas accéder à cette partie du site.

Cette page admin comporte un __formulaire permettant de créer une nouvelle offre__ avec toutes les infos dont on a besoin pour pouvoir ensuite l'afficher dans les pages. Il est possible de créer une nouvelle thématique et des nouvelles spécialités pour les ajouter dans les menus déroulants afin de pouvoir les lier aux nouvelles offres créées.

En dessous de ce formulaire, on trouve la liste des offres déjà existantes sous forme d'aperçu. On trouve sur ces aperçus (à la place du bouton "plus d'infos") un __bouton "supprimer"__ qui supprime l'offre de la base de données. Elle n'apparaitra donc plus dans les offres disponibles.
