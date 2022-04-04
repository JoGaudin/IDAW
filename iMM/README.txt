Projet IDAW : iMangerMieux

Groupe : Alexandre Favreau & Johan Gaudin

Pour se connecter à son espace perso, allez sur ce lien : http://localhost/IDAW/iMM/front-end/index.php.

Il faut se connecter avec son adresse IMT comme : alexandre.favreau@etu.imt-lille-douai.fr.

Vous arrivez sur la page connecter où il faut sélectionner un onglet parmis les 4 présents :

- Dashboard :
    Vous avez accès aux pourcentages de Glucides, Lipides et Fructoses de votre consommation. 
    Ce graph à été réalisé grâce à Ploty.

- Aliments : 
    Vous avez accès à la liste d'Aliments présent dans la base de donnée. Grâce à Datatables.
    Nous avons passé beaucoup de temps à essayer de résoudre un problème. La table affichait "No data in this table".
    Il manquait en effet des balises <tbody> pour pouvoir régler le problème.

- Profil :
    ça affiche tout simplement les données de l'utilisateur.

- Journal :
    Le Journal permet d'afficher les différents repas consommés par l'utilisateur, trier par date dans l'ordre croissant.
    
Un bouton deconnexion permet de revenir à l'accueil

On aurait bien aimé changer la couleur du background mais le style de la datatable ne rendait pas bien avec les différentes couleurs de background que l'on a choisit.

La base de donnée se trouve dans le fichier back-end/doc
