<?php
include("Utilisateurs.class.php");

$uti = new Utilisateurs;
$login = $_POST['pseudo'];
$password=$_POST['mdp'];
$email=$_POST['email'];
if ($_POST['mdp']==$_POST['mdpconfirm']){
    if ($uti->signIn($email,$login,$password)){
        header('Location: loginView.html');
        } else {
        header('Location: singin.html');
        }
    }else {
    header('Location: singin.html');
    }
exit;
?>