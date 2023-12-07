<?php
session_start();
define('ROOT_DIR', '');

$PAGENAME = "Articles";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?php if (isset($PAGENAME)) {echo "$PAGENAME";}?></title>
</head>
<body>

    <main>

        <h1 class="h1_article" >Mieux comprendre les acteurs du climat</h1>
        <img src="assets/img/climate-change.jpg" alt="">

        <section class="sectionArticle">
            <div class="article">
                <?php include ROOT_DIR.'widgets/la_terre_cest_quoi.php';?>
            </div>
            <div class="article">
                <?php include ROOT_DIR.'widgets/le_climat_cest_quoi.php';?>
            </div>
            <div class="article">
                <?php include ROOT_DIR.'widgets/GIEC.php';?>
            </div>
            <div class="article">
                <?php include ROOT_DIR.'widgets/HCC.php';?>
            </div>
            <div class="article">
                <?php include ROOT_DIR.'widgets/rechauffement.php';?>
            </div>
            <div class="article">
                <?php include ROOT_DIR.'widgets/temp.php';?>
            </div>
        </section>
    </main>
    






</body>
</html>