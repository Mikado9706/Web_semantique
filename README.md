# Web_semantique

c'est quoi les attributs action et method ? 
"action" cible le fichier qui obtiendra les infos du formulaire, "method" est le type de retour d'infos (get = affichage des infos en brut dans l'url, post : sécurisé).

qu'y a-t-il d'autre comme possiblité que post pour l'attribut method ? 
get 

uelle est la différence entre les attributs name et id ? 
name : permet d'être récupéré par la suite en php à travers une variable $_POST["name"] ou $_GET["name"]. id : permet d'être récupéré par la suite en css (attribut unique contrairement à "class").

c'est lequel qui doit être égal à l'attribut for du label ? 
c'est name.

quels sont les deux scénarios où l'attribut title sera affiché ? 
au passage du curseur sur l'input et si le code n'est pas valide 

encore une fois, quelle est la différence entre name et id pour un input ? 
name : permet d'être récupéré par la suite en php à travers une variable $_POST["name"] ou $_GET["name"]. id : permet d'être récupéré par la suite en css (attribut unique contrairement à "class").
 
pourquoi est-ce qu'on a pas mis un attribut name ici ? 
il n'y a pas d'utilité à renvoyer 2 fois la même information en base de données.

quel scénario justifie qu'on ait ajouté l'écouter validateMdp2() à l'évènement onkeyup de l'input mdp1 ? 
la fonction javascript s'effectue quand une touche n'est plus pressée sur le clavier afin de faire une vérification en continue de la similitude du mot de passe entré avec le champ précédent.
