<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign in</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login-form---Ambrodu-1.css">
    <link rel="stylesheet" href="assets/css/login-form---Ambrodu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="body" style="padding-top: 100px;">
    <div class="border rounded shadow login-center">
        <form action="../index.php?action=register" method="post" style="padding-top: 32px;">
            <div class="form-group text-center"><img class="img-fluid" style="width: 100px;" src="assets/img/default.png"></div>
            <div class="form-group d-flex justify-content-center"><input class="form-control" type="text" name="email" style="max-width: 300px;" placeholder="Email"></div>
            <div class="form-group d-flex justify-content-center"><input class="form-control" type="text" name="pseudo"style="max-width: 300px;" placeholder="Username"></div>
            <div class="form-group d-flex justify-content-center"><input class="form-control" type="password" name="mdp"style="max-width: 300px;" placeholder="Password"></div>
            <div class="form-group d-flex justify-content-center"><input class="form-control" type="password" name="mdpconfirm"style="max-width: 300px;" placeholder="Confirm password"></div>
            <div class="form-group d-flex justify-content-center"><button class="btn btn-dark" style="width: 147px;margin: 8px 4px;" type="button" onclick="window.location.href='../index.php'" >Cancel</button> <button class="btn btn-dark greenhover" style="width: 147px;margin:8px 4px;" type="submit" name="Inscription" value="Connexion">Inscription</button></div>
        </form>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
