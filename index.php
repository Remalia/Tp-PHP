<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Acceuil</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link rel="stylesheet" href="Vue/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Vue/assets/css/login-form---Ambrodu.css">
    <link rel="stylesheet" href="Vue/assets/css/login-form---Ambrodu-1.css">
    <link rel="stylesheet" href="Vue/assets/css/styles.css">
</head>
<body>
<?php
require('Controleur/controller.php');
if (isset($_GET['session'])) doNotDelogIndex($_GET['session']);
elseif (isset($_GET['action']) && empty($_GET['session'])) {
    if ($_GET['action'] == 'register') {
        if (isset($_POST['mdp']) == $_POST['mdpconfirm'] && isset($_POST['pseudo']) && isset($_POST['email'])) {
            register($_POST['pseudo'], $_POST['mdp'], $_POST['email']);
        } else echo 'Vérifier que vous avez remplis tout les champs et que vous avez mis le même mot de passe et confirm mot de passe';
    } elseif ($_GET['action'] == 'loged') {
        loged($_POST['pseudo'], $_POST['mdp']);
    }
}else start();
?>
<script src="Vue/assets/js/jquery.min.js"></script>
<script src="Vue/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>
</html>