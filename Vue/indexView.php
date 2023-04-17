<!DOCTYPE html>
<html>
<style>
    .articleIndex {
        text-align: justify;
        text-justify: inter-word;
        transition-duration: 0.5s;
        margin-bottom: 6vh;
        padding: 1vw;
        box-shadow: 0.8vw 0.8vw 1.5vw #888888;
    }
    .articleIndex:hover {
        margin-bottom: 4vh;
        cursor: pointer;
        box-shadow: 0.8vw 0.8vw 2vw #888888;
    }
    @media screen and (max-width: 1280px)
    {
        /* Rédigez vos propriétés CSS ici */
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>

    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login-form---Ambrodu.css">
    <link rel="stylesheet" href="assets/css/login-form---Ambrodu-1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php include("navBarView.php") ?>
<div class="article-clean">
    <ul>
        <?php while ($article = $tArticles->fetch()) { ?>
            <li><?= htmlspecialchars($article['titre']) ?></li>
        <?php }
        ?>
    </ul>
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2" >

                <?php while ($article = $articles->fetch()) { ?>
                    <div class="articleIndex" onclick="location.href='article.php?id=<?= htmlspecialchars($article['id_Article']) ?>&amp;session=<?= htmlspecialchars($login) ?> ';">
                        <h1 style="text-justify: auto"><strong><?= htmlspecialchars($article['titre']) ?></strong><br></h1><h2> par <?= htmlspecialchars($article['Auteur']) ?></h2>
                <?php
                if ($article['image'] != null)
                {?>
                    <p>
                        <img class="img-fluid" src="<?= nl2br(htmlspecialchars($article['image'])) ?>">
                    </p>
                <?php } ?>
                <p><?= nl2br(htmlspecialchars($article['resume'])) ?></p>
                        </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<script src="Old/assets/js/jquery.min.js"></script>
<script src="Old/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>