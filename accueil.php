<?php
define('ROOT_DIR', '');


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<!-- Sticky header -->
<header class="header-outer">
	<div class="header-inner responsive-wrapper">
		<div class="header-logo">
			<img src="assets/img/logo_site.png" />
		</div>
		<nav class="header-navigation">
			<a href="#">Acceuil</a>
			<a href="#">A propos</a>
			<a href="#">Articles</a>
			<button>Menu</button>
		</nav>
	</div>
</header>
<!-- Content -->
<main class="main">
	<div class="main-content responsive-wrapper">
		<?php include ROOT_DIR.'widgets/la_terre_cest_quoi.php';?>
		<?php include ROOT_DIR.'widgets/le_climat_cest_quoi.php';?>
		
	</div>
</main>