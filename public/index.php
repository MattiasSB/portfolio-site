<!DOCTYPE html>
<html lang="en">
    <?php 
    @require_once("../app/init.php");
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
        <section class="intro font__staatliches slide__in">
            <div class="intro__container position__relative flex items__center filter__shadow">
                <h1 class="text__xl text__black position__relative line__height--120"><span class="text__orange">Developing</span > design into digital <span class="text__white">solutions</span></h1>
                <img class="position__absolute rounded" src="img/forrest__photo.jpg" alt="">
            </div>
        </section>
        <section class="projects slide__in">
            <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
                <?php foreach($homeScroll as $cardInfo): ?>
                    <?php include(get_path('public/partials/carousel__card.php'));?>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="max__w--container mx__auto">
            <div class="intro__about grid grid__template--cols-12"> 
                <img class="filter__shadow rounded mx__auto" src="img/self__photo.jpg" alt="Photo of me with my brother" width="400" height="375">
                <div class="flex flex__cols items__center intro__about--text mx__auto">
                    <h2 class="font__spacegrotesk--700">My name is <span class="text__orange">Mattias Bellan</span >. Im a life long learner, striving to <span class="text__orange">innovate</span> and <span class="text__orange">empower</span> through digital design and development.</h2>
                    <div class="button__black flex justify__center items__center filter__shadow"><a class="font__staatliches" href="<?php echo get_public_url('/about.php'); ?>" title="More information about me">About me</a></div>
                </div>
            </div> 
        </section>
        <?php @require('partials/social__modal.php'); ?>
    </main>
    <script src="scripts/flickity.pkgd.min.js" defer></script>
    <script src="scripts/menu.js?v=1" defer></script>
    <script src="scripts/pagedetect.js" defer></script>
</body>
</html>