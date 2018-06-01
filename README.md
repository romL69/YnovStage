#README.md

Dans ce fichier vous pourrez trouver comment mettre en place notre projet.

##Google Analytics

    Il faut créer une propriété dans Google Analytics. Pour cela il faut se connecter sur Google Analytics. Lors de la création de la propriété il faut faire attention à l'URL de notre site, s'il n'est pas valide la propriété ne pourra pas être créée, ainsi qu'à la génération de l'ID de suivi, un ID = un site.

    Pour pouvoir analyser les différentes pages il faut remplacer GA_TRACKING_ID par son propre ID de suivi dans le code se trouvant dans les balises <head> de chaque page.

    Il faut aussi penser à vérifier si la mise en place du Google Analytics a fonctionné. Pour cela il faut accéder à son site et vérifier si notre visite est enregistrée dans les rapports en temps réel.

##Google Search Console

    Afin de mettre en place la Search Console il faut ajouter un chemin d'accès complet, URL, pour accéder au site ou à une de ses pages. Une fois le site accessible il faut confirmer que vous êtes le propriétaire du site. Pour cela il y a plusieurs méthodes. La méthode recommandée est l'importation d'un fichier HTML mais on peut également ajouter une balise méta, se connecter à votre fournisseur de nom de domaine ou utiliser son compte Google Analytics ou Google Tag Manager.
