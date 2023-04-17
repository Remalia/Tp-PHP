<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>

    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/login-form---Ambrodu.css">
    <link rel="stylesheet" href="assets/css/login-form---Ambrodu-1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<div id="navigation-block">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container-fluid"><a class="navbar-brand" style="font-family:Bungee, cursive;" href="index.php?session=<?= htmlspecialchars($login) ?>">Super Blog</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">

                <!--
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Service</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact</a></li>-->
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php
                if($login!=null){
                    ?>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="articleView.php">Crée Article</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active"><?= htmlspecialchars($login) ?></a></li> <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Log Out</a></li>
                <?php
                }
                else{
                    ?>
                    </ul><span class="navbar-text actions"> <a class="login" href="Vue/loginView.html">Log In</a><a class="btn btn-light action-button" role="button" href="Vue/signinView.php">Sign Up</a></span></div>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
</div>
</html>
