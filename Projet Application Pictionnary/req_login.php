<?php
session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {
	$email= $_POST['email'];
	$password = $_POST['password'];
	try {
		include 'connectionPDO.php';
		$query = $pdo->prepare('SELECT * FROM users WHERE email = ?');
		$query->execute(array($email));
		$res = $query->fetch(PDO::FETCH_ASSOC);
		if($res) {
			// Etudiant trouvé
			echo 'Utilisateur trouvé<br>';
			if($password == $res['password']) {
				// MDP correct
				echo "Mot de passe correct";
				$_SESSION['login'] = $res['email'];
                $_SESSION["prenom"]= $res['prenom'];
                $_SESSION["couleur"]= $res['couleur'];
                $_SESSION["profilpic"]= $res['profilpic'];
				header('Location: main.php');
			} else {
				// Mot de passe incorrect
				echo 'Mot de passe incorrect';
				$_SESSION['Error'] = "Unknown_Account";
				header("Location: main.php");
			}
		} else {
			// Etudiant inconnu
			echo 'Utilisateur inconnu';
			$_SESSION['Error'] = "Unknown_Account";
			header("Location: main.php");
			
		}
	} catch (Exception $e) {
        if(substr($e->getMessage(), 0, 22) === "SQLSTATE[HY000] [1049]" || substr($e->getMessage(), 0, 22) === "SQLSTATE[HY000] [1045]")
            $_SESSION['Error'] = "Unknown_DB";
		echo 'Exception reçue : ',  $e->getMessage(), "\n";
        header("Location: index.php");
	}
	
} else {
	if(!isset($_SESSION['login'])) {
        if(isset($_SESSION['Error'])) {
            switch($_SESSION['Error']) {
                case "Unknown_DB" :
                    echo '<script>$("#profil_block").before($("<p>").attr("style", "color: red; font-size: 16px").text("Connexion à la base de données impossible"));</script>';
                    break;
                
                case "Unknown_Account" :
                    echo '<script>$("#profil_block").before($("<p>").attr("style", "color: red; font-size: 16px").text("Identification incorrecte"));</script>';
                    break;
            }
			$_SESSION['Error'] = "";
        }
		
	} 
}
?>