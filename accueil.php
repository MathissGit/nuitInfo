<?php

define ('ROOT_DIR', '');
$PAGENAME = "Accueil";  

?>


<?php require_once(ROOT_DIR. 'includes/partials/header.php');?>

<main class="main">
    <?php include ROOT_DIR.'widgets/la_terre_cest_quoi.php';?>
    <?php include ROOT_DIR.'widgets/le_climat_cest_quoi.php';?>
    <?php include ROOT_DIR.'widgets/GIEC.php';?>
    <?php include ROOT_DIR.'widgets/HCC.php';?>
    <?php include ROOT_DIR.'widgets/rechauffement.php';?>
    <?php include ROOT_DIR.'widgets/temp.php';?>
</main>

<?php require_once(ROOT_DIR. 'includes/partials/footer.php');?>