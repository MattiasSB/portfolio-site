<!DOCTYPE html>
<html lang="en">
    <!--Flickity for side scrolls-->

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
        <section class="projects__scroll items__center">
            <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
                <div class="carousel-cell">
                    <img class="rounded" src="/img/project-dash.jpg" alt="">
                </div>
                <div class="carousel-cell">
                    <img class="rounded" src="/img/project-botanical.jpg" alt="">
                </div>
                <div class="carousel-cell">
                    <img class="rounded" src="/img/project-bottleshooter.jpg" alt="">
                </div>
            </div>
        </section>
    </main>
    <script src="/scripts/flickity.pkgd.min.js"></script>
    <script src="/scripts/menu.js"></script>
</body>
</html>