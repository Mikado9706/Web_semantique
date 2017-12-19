<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <title>Pictionnary - Inscription</title>
    <link rel="stylesheet" media="screen" href="css/styles.css">
    <link rel="stylesheet" media="handheld" href="css/portrait.css">
    <!-- <link rel="stylesheet" media="handheld and orientation:portrait" href="css/paysage.css"> -->
    <!-- <link rel="stylesheet" media="handheld and orientation:landscape" href="css/paysage.css"> -->
</head>

<body>
    <div class='cadre_connexion'>
        <ul>
            <li><a class='active' href='main.php'>Main</a></li>
            <li><a href='#'>Inscriptions</a></li>
            <li><a href='paint.php'>Dessiner</a></li>
        </ul>
    </div>
    
    <h2>Inscrivez-vous</h2>
    <form class="inscription" action="req_inscription.php" method="post" name="inscription">

        <!-- c'est quoi les attributs action et method ? -->
        <!-- R: L'attribut 'action' permet de savoir dans quel fichier se trouve l'action à exécuter et l'attribut 'method' est le type de retour d'informations (post étant celui sécurisé). -->

        <!-- qu'y a-t-il d'autre comme possiblité que post pour l'attribut method ? -->
        <!-- R: oui il existe aussi get. -->

        <span class="required_notification">Les champs obligatoires sont indiqués par *</span>
        <ul>

            <li>
                <label for="email">E-mail :</label>
                <input type="email" name="email" id="email" autofocus required />
                <!-- ajouter à input l'attribut qui lui donne le focus automatiquement -->
                <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->

                <!-- quelle est la différence entre les attributs name et id ? -->
                <!-- R: l'attribut 'name' va être utilisé pour le php afin d'être récupéré et utilisé a différentes tâches (ici pour enregistrer les informations dans la base de données) et l'attribut 'id' va être utilisé par le css afin de modifier le style pour cet id-ci. -->

                <!-- c'est lequel qui doit être égal à l'attribut for du label ? -->
                <!--  R: -->

                <span class="form_hint">Format attendu "name@something.com"</span>
            </li>

            <li>
                <label for="mdp1">Mot de passe :</label>
                <input type="password" name="password" id="mdp1" pattern="[a-zA-Z0-9]{6,8}" onkeyup="validateMdp2()" title="Le mot de passe doit contenir de 6 à 8 caractères alphanumériques." required placeholder="6 à 8 caractères alphanumériques">

                <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->
                <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->
                <!-- spécifiez l'expression régulière: le mot de passe doit être composé de 6 à 8 caractères alphanumériques -->

                <!-- quels sont les deux scénarios où l'attribut title sera affiché ? -->
                <!-- R: l'attribut 'title' sera affiché lorsque l'utilisateur soumettra son formulaire sans avoir respecté le nombre de caractères demandés. Il sera affiché lors du passage de la souris sur la case. -->

                <!-- encore une fois, quelle est la différence entre name et id pour un input ? -->
                <!-- R: l'attribut 'name' va être utilisé pour le php afin d'être récupéré et utilisé a différentes tâches (ici pour enregistrer les informations dans la base de données) et l'attribut 'id' va être utilisé par le css afin de modifier le style pour cet id-ci. -->

                <span class="form_hint">De 6 à 8 caractères alphanumériques.</span>
            </li>

            <li>
                <label for="mdp2">Confirmez mot de passe :</label>
                <input type="password" id="mdp2" required onkeyup="validateMdp2()">

                <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->
                <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->

                <!-- pourquoi est-ce qu'on a pas mis un attribut name ici ? -->
                <!-- R: si on remet un attribut 'name' ici, nous en auront 2 et les deux seront envoyés au serveur ce qui est inutile. -->

                <!-- quel scénario justifie qu'on ait ajouté l'écouter validateMdp2() à l'évènement onkeyup de l'input mdp1 ? -->
                <!-- R: Si l'utilisateur saisie son mdp après avoir saisi la confirmation de mdp, on aurait eu un problème si on avait pas ajouté l'écouter validateMdp2() à l'évènement onkeyup de l'input mdp1. -->

                <span class="form_hint">Les mots de passes doivent être égaux.</span>
                <script>
                    validateMdp2 = function(e) {
                        var mdp1 = document.getElementById('mdp1');
                        var mdp2 = document.getElementById('mdp2');
                        if ( /* est-ce que mdp1 est valide ?  */ mdp1.value.match(/^[a-zA-Z0-9]{6,8}$/) && /* est-ce que mdp1 et mdp2 ont la même valeur ? */ mdp1.value == mdp2.value) {
                            // ici on supprime le message d'erreur personnalisé, et du coup mdp2 devient valide.  
                            mdp2.setCustomValidity('');
                        } else {
                            // ici on ajoute un message d'erreur personnalisé, et du coup mdp2 devient invalide.  
                            mdp2.setCustomValidity('Les mots de passes doivent être égaux.');
                        }
                    }

                </script>
            </li>

            <li>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" />
            </li>

            <li>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" required placeholder="Jean" />

                <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->
                <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->

            </li>

            <li>
                <label for="telephone">Telephone :</label>
                <input type="tel" name="telephone" id="telephone" />
            </li>

            <li>
                <label for="site_web">Site web :</label>
                <input type="url" name="site_web" id="site_web" />
            </li>

            <li>
                <label for="sexe">Sexe :</label>
                <input type="radio" name="sexe" id="sexe" value="Homme" />Homme <br>
                <input type="radio" name="sexe" id="sexe" value="Femme" />Femme <br>
            </li>

            <li>
                <label for="birthdate">Date de naissance :</label>
                <input type="date" name="birthdate" id="birthdate" placeholder="JJ/MM/AAAA" required onchange="computeAge()" />
                <script>
                    computeAge = function(e) {
                        try {
                            // j'affiche dans la console quelques objets javascript, ce qui devrait vous aider.  
                            console.log(Date.now());
                            console.log(document.getElementById("birthdate"));
                            console.log(document.getElementById("birthdate").valueAsDate);
                            console.log(Date.parse(document.getElementById("birthdate").valueAsDate));
                            console.log(new Date(0).getYear());
                            console.log(new Date(65572346585).getYear());
                            // modifier ici la valeur de l'élément age
                            age = Date.now() - Date.parse(document.getElementById("birthdate").valueAsDate);
                            //R: l'age étant en milliseconde, je le converti en année
                            age = age / 31536000000;
                            //R: il faut penser aux années bisextiles
                            age = age - ((age / 4) * 0.0027322404371585);
                            document.getElementById("age").value = Math.floor(age);
                        } catch (e) {
                            // supprimez ici la valeur de l'élément age  
                            document.getElementById("age").value = null;
                        }
                    }

                </script>
                <span class="form_hint">Format attendu "JJ/MM/AAAA"</span>
            </li>

            <li>
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" disabled/>

                <!-- à quoi sert l'attribut disabled ? -->
                <!-- R: l'attribut disabled permet de voir que la case existe mais sans pouvoir y faire quoi que ce soit du côté utilisateur. -->

            </li>

            <li>
                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville" />
            </li>

            <li>
                <label for="taille">Taille :</label>
                <input type="range" max="2.50" min="0" step="0.01" name="taille" id="taille" />
            </li>

            <li>
                <label for="couleur_prefere">Couleur preférée :</label>
                <input type="color" name="couleur_prefere" id="couleur_prefere" />
            </li>

            <li>
                <label for="profilepicfile">Photo de profil:</label>
                <input type="file" id="profilepicfile" onchange="readImage(this)" />
                <!-- l'input profilepic va contenir le chemin vers l'image sur l'ordinateur du client -->
                <!-- on ne veut pas envoyer cette info avec le formulaire, donc il n'y a pas d'attribut name -->
                <span class="form_hint">Choisissez une image.</span>
                <input type="hidden" name="profilepic" id="profilepic" />
                <!-- l'input profilepic va contenir l'image redimensionnée sous forme d'une data url -->
                <!-- c'est cet input qui sera envoyé avec le formulaire, sous le nom profilepic -->
                <canvas id="preview" width="0" height="0"></canvas>
                <!-- le canvas (nouveauté html5), c'est ici qu'on affichera une visualisation de l'image. -->
                <!-- on pourrait afficher l'image dans un élément img, mais le canvas va nous permettre également   
                de la redimensionner, et de l'enregistrer sous forme d'une data url-->
                <script>
                    var canvas = document.getElementById("preview");
                    var context = canvas.getContext("2d");
                    var MAX_WIDTH = 96;
                    var MAX_HEIGHT = 96;

                    function readImage(img) {
                        if (img.files && img.files[0]) {
                            var width = img.width;
                            var height = img.width;

                            var fr = new FileReader();
                            fr.onload = (e) => {
                                var img = new Image();
                                img.addEventListener("load", () => {

                                    var h = 0;
                                    var w = 0;

                                    if (img.width > img.height) {
                                        w = MAX_WIDTH;
                                        h = MAX_HEIGHT / img.width * img.height;
                                    } else {
                                        w = MAX_WIDTH / img.height * img.width;
                                        h = MAX_HEIGHT;
                                    }
                                    preview.width = w;
                                    preview.height = h;
                                    context.drawImage(img, 0, 0, w, h);
                                });
                                img.src = e.target.result;
                            };
                            fr.readAsDataURL(img.files[0]);
                        }
                    }

                </script>
            </li>

            <li>
                <input type="submit" value="Soumettre">
            </li>

        </ul>
    </form>
</body>

</html>
