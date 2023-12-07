<?php
session_start();

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
    
    <section class="sectionArticle">

        <h1 class="h1_article" >Mieux comprendre les acteurs du climat</h1>

        <article class="article1 right">
            <div class="textArticle">
                <h2>Notre Terre :</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas impedit ex, nulla dolorum molestias totam provident veritatis non consequatur eum nesciunt laudantium omnis quia eius nemo voluptatum tenetur? Placeat, cum.</p>
                <a href="#">En savoir plus</a>
            </div>
            <div class="imageArticle"><img src="" alt="planete terre"></div>

        </article>
        
        <article class="article2 left">
            <div class="imageArticle"><img src="assets/img/climate-change.jpg" alt="image effet de serre"></div>
            <div class="textArticle">
                <h2>Le Climat ?</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas impedit ex, nulla dolorum molestias totam provident veritatis non consequatur eum nesciunt laudantium omnis quia eius nemo voluptatum tenetur? Placeat, cum.</p>
                <a href="#">En savoir plus</a>
            </div>
        </article>

        <article class="article3 right">
            <div class="textArticle">
                <h2>C'est quoi l'effet de serre ?</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas impedit ex, nulla dolorum molestias totam provident veritatis non consequatur eum nesciunt laudantium omnis quia eius nemo voluptatum tenetur? Placeat, cum.</p>
                <a href="#">En savoir plus</a>
            </div>
            <div class="imageArticle"><img src="assets/img/effet-serre.jpg" alt="image effet de serre"></div>
        </article>

        <article class="article4 left">
            <div class="imageArticle"><img src="assets/img/affiche-GIEC.jpeg" alt="image publicité du GIEC"></div>
            <div class="textArticle">
                <h2>Et le GIEC dans tout ça ?</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas impedit ex, nulla dolorum molestias totam provident veritatis non consequatur eum nesciunt laudantium omnis quia eius nemo voluptatum tenetur? Placeat, cum.</p>
                <a href="#">En savoir plus</a>
            </div>
        </article>

    </section>





</body>
</html>