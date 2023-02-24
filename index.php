<!DOCTYPE html>
<html lang="en">
    <!--Flickity for side scrolls-->
    <?php 
    @require_once("init.php");
    ?>

<?php 
@require("partials/head.php");
?>
<body>
    <?php 
    @require("partials/header.php")
    ?>
    <main>
        <section class="intro font__staatliches">
            <div class="intro__container position__relative flex items__center filter__shadow">
                <h1 class="text__xl text__black position__relative line__height--120"><span class="text__orange">Developing</span > design into digital <span class="text__white">solutions</span></h1>
                <img class="position__absolute rounded" src="/img/forrest__photo.jpg" alt="">
            </div>
        </section>
        <section>
        <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
        <?php foreach($homeScroll as $cardInfo): ?>
            <?php require(__DIR__ . "/partials/carousel__card.php");?>
        <?php endforeach; ?>
        </div>
        </section>
    </main>
    <script src="/scripts/flickity.pkgd.min.js"></script>
    <script src="/scripts/menu.js"></script>
</body>
</html>