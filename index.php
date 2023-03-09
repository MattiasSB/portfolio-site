<!DOCTYPE html>
<html lang="en">
    <?php 
    @require_once("init.php");
    $titleTag = "Home";
    $metaDescription = "Junior Designer, and Developer portfolio. Heres an amalgamation of my work and a little about me";
    ?>

<?php 
@require("partials/head.php");
?>
<body>
    <?php 
    @require("partials/header.php");
    ?>
    <main>
        <section class="intro font__staatliches">
            <div class="intro__container position__relative flex items__center filter__shadow">
                <h1 class="text__xl text__black position__relative line__height--120"><span class="text__orange">Developing</span > design into digital <span class="text__white">solutions</span></h1>
                <img class="position__absolute rounded" src="/img/forrest__photo.jpg" alt="">
            </div>
        </section>
        <section class="projects">
            <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
                <?php foreach($homeScroll as $cardInfo): ?>
                    <?php require(__DIR__ . "/partials/carousel__card.php");?>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="max__w--container mx__auto">
            <div class="intro__about"> 
                <img class="filter__shadow rounded mx__auto" src="/img/self__photo.jpg" alt="Photo of me with my brother" width="400" height="375">
                <div class="flex flex__cols items__center intro__about--text mx__auto">
                    <h2 class="font__spacegrotesk--700">My name is <span class="text__orange">Mattias Bellan</span >. Im a life long learner, striving to <span class="text__orange">innovate</span> and <span class="text__orange">empower</span> through digital design and development.</h2>
                    <div class="button__black flex justify__center items__center filter__shadow"><a class="font__staatliches" href="/about.php" title="More information about me">About me</a></div>
                </div>
            </div> 
        </section>
    </main>
    <script src="/scripts/flickity.pkgd.min.js" defer></script>
    <script src="/scripts/menu.js" defer></script>
    <script src="/scripts/pagedetect.js" defer></script>
</body>
</html>