<?php
session_start();
define('ROOT_DIR', '');

$PAGENAME = "Articles";

?>
<?php require_once(ROOT_DIR. 'includes/partials/header.php');?>
    <main>

        <div class="random">
            <h1 class="h1_article">Le Changement Climatique Expliqué : Mythes, Réalités et Solutions</h1>
            <div class="machin">
                <p>Le réchauffement climatique est bien plus qu'une simple question de températures. Il s'agit d'un appel urgent à la préservation de notre planète face à des événements marquants comme celui de Marseille : Le Grand Défi de ramassage de déchets. Lors de cette initiative, des tonnes de débris, allant des trottinettes aux panneaux de signalisation, ont été récupérées des eaux méditerranéennes. Ces gestes, bien que louables, reflètent l'ampleur du problème environnemental auquel nous sommes confrontés.<br><br>Cet événement, bien que local, révèle une réalité globale. Il nous rappelle l'urgence de repenser nos modes de consommation et d'agir collectivement pour préserver notre planète.</p>
                <video class="video" autoplay="true" controls>
                <source src="assets/video/Brut_mp4.mp4" type="video/mp4" />
                </video>
                
            </div>
        </div>

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