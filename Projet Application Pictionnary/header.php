<?php

if(!isset($_SESSION['login'])) {
    
    echo "<div class='cadre_connexion'><ul>";
    echo "<li><a class='active' href='main.php'>Main</a></li>";
    echo "<li><a href='inscription.php'>Inscriptions</a></li>"  ;  
    echo "<li><a href='paint.php'>Dessiner</a></li>";
    echo "</ul></div>";
    
    echo "<h2>Connectez-vous</h2>"; 
    echo "<form class='connexion' action='req_login.php' method='post' name='connexion'>"; 
    echo "<ul>";
    echo "<li><label for='email'>E-mail :</label><input type='email' name='email' id='email' required /></li>";
    echo "<li><label for='password'>Mot de passe :</label><input type='password' name='password' id='password' required /></li>"; 
    echo "<li><input type='submit' value='connexion'></li>";
    echo "</ul>"; 
    echo "</form>"; 
    echo "<a href='inscription.php'>s'inscrire</a>";
}
else { 
    try { 
        
        echo "<div class='cadre_connexion'><ul>";
        echo "<li><a class='active' href='main.php'>Main</a></li>";
        echo "<li><a href='inscription.php'>Inscriptions</a></li>"  ;  
        echo "<li><a href='paint.php'>Dessiner</a></li>";
        echo "<li style='float:right'><a href='logout.php'>Se déconnecter </a></li>";
        echo "</ul></div>";
        
        echo "<h2>Bienvenue ".$_SESSION['prenom']."</h2>"; 
        echo "<img src=".$_SESSION['profilepic']."><br>"; 
        
    }catch(Exception $e) { 
        die($e->getMessage());
    }
}
?>

            
        

