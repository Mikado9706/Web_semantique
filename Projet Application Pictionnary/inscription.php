<?php
session_start(); 

if(!isset($_SESSION['login'])) {
    include('formulaire_inscription.php');
}
else { 
    header("Location: main.php?erreur=".urlencode("Vous avez déjà un compte")); 
}
?>