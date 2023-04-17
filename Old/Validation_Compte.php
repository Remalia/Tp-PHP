<?php
include_once("Utilisateurs.class.php");
session_start();
$uti = new Utilisateurs;
$login = $_POST['pseudo'];
$password=$_POST['mdp'];

if ($uti-> getAuth($login,$password)){
    $_SESSION["Connected"]=$login;
    header('Location: index.php');
    }else{
    header('Location: loginView.html');
    }
exit;
?>