<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Fact Climat</title>
</head>
<body>
    <header>
        <div class="header_logo">
            <a href="<?php echo ROOT_DIR.'accueil.php'?>">
                <img src="assets/img/logo_site.png" alt="logo">
                <h1>Fact Climat</h1>
            </a>
        </div>
        <div class="header_nav">
            <nav>
                <a class="<?php if ($PAGENAME == 'Accueil') {echo "selected";}?>" href="<?php echo ROOT_DIR.'accueil.php';?>">Accueil</a>
                <a class="<?php if ($PAGENAME == 'Jeu') {echo "selected";}?>" href="<?php echo ROOT_DIR.'jeu.php';?>">Testez vos idées reçues</a>
                <a class="<?php if ($PAGENAME == 'Classement') {echo "selected";}?>" href="<?php echo ROOT_DIR.'classement.php';?>">Classement</a>
            </nav>
        </div>
    </header>