<?php
session_start();
define('ROOT_DIR', '');

$PAGENAME = "Articles";

?>
<?php require_once(ROOT_DIR. 'includes/partials/header.php');?>
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

<?php require_once(ROOT_DIR. 'includes/partials/footer.php');?>