<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROOT_DIR.'assets/css/style.css';?>">
    <title>Fact Clima</title>
</head>
<body>
    <header>
        <div class="header_logo">
            <a href="">
                <img src="<?php echo ROOT_DIR.'assets/img/logo.png';?>" alt="logo">
                <h1>Fact Clima</h1>
            </a>
        </div>
        <div class="header_nav">
            <nav>
                <a class="<?php if (isset($PAGENAME) && $PAGENAME == 'Accueil') {echo 'selected';}?>" href="">Accueil</a>
                <a href="">Articles</a>
                <a href="">Jeu</a>
                <a class="<?php if (isset($PAGENAME) && $PAGENAME == '') {echo 'selected';}?>" href="<?php echo ROOT_DIR.'error/404.php'?>">Aller nul part</a>
            </nav>
        </div>
    </header>