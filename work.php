<!DOCTYPE html>
<html lang="en">
<?php 
$titleTag = "Work";
@require_once("init.php");
@require("partials/head.php");
?>
<body>
    <?php 
        @require("partials/header.php");
    ?>
    <main class="work">
        <section class="work__design flex flex__cols justify__center">
            <h2 class="font__staatliches text__md">Design</h2>
            <div class="projects">
                <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
                    <?php foreach($designScroll as $cardInfo): ?>
                        <?php require(__DIR__ . "/partials/carousel__card.php");?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section class="work__development flex flex__cols justify__center">
            <h2 class="font__staatliches text__white text__md">Development</h2>
            <div class="projects">
                <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
                    <?php foreach($devScroll as $cardInfo): ?>
                        <?php require(__DIR__ . "/partials/carousel__card.php");?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <script src="/scripts/flickity.pkgd.min.js"></script>
    <script src="/scripts/menu.js?v=1"></script>
    <script src="/scripts/pagedetect.js?v=1"></script>
</body>
</html>