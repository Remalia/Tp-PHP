<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Article</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">

</head>

<body>
    <nav>
        <?php include("navBarView.php") ?>
        <?php include("toolBarView.php") ?>
    </nav>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <?php  $art = $article->fetch();?>
                        <h1 class="text-center"><?= htmlspecialchars($art['titre']) ?></h1>
                        <p class="text-center"><span class="by">by</span> <a href="#"><?= htmlspecialchars($art['Auteur']) ?></a></p> <img class="img-fluid" src="<?= htmlspecialchars($art['image']) ?>"></div>
                    <div class="text">
                        <p><?= nl2br(htmlspecialchars($art['resume'])) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>