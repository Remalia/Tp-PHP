<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Article</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link rel="stylesheet" href="Vue/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="Vue/assets/css/styles.min.css">

</head>
<body>
<?php
require('Controleur/controller.php');
if (isset($_GET['id'])) {
    $editable=false;
    AffArt($_GET['session'],$_GET['id']);
    if (isset($_GET['session'])) {
        if (testEdit($_GET['session'],$_GET['id'])){
            $editable=true;
        }
    }else echo 'Vous n\'etes pas detenteur de cette article';
}else echo 'Pas d\'article trouvé';
?>
<script src="Vue/assets/js/jquery.min.js"></script>
<script src="Vue/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>
</html>

