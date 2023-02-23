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
        <section class="flex intro__height w__screen justify__center item__intro">
            <div class="position__relative intro">
                <h1 class="font__staatliches intro__text intro__text--black"><span class="intro__text--orange">Developing</span> Design Into <br> Digital <span class="intro__text--white">Solutions</span></h1>
                <img class="position__absolute rounded intro__image filter__shadow" src="/img/forrest__photo.jpg" alt="" height="375" width="625">
            </div >
        </section>
        <section class="h__screen carousel__container">
        <div class="carousel"
  data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
  <div class="carousel-cell"></div>
  <div class="carousel-cell"></div>
  <div class="carousel-cell"></div>
  <div class="carousel-cell"></div>
  <div class="carousel-cell"></div>
</div>

        </section>
    </main>
    <script src="/scripts/menuMobile.js">
    </script>
    <script src="/scripts/flickity.pkgd.min.js">
    var elem = document.querySelector('.main-carousel');
    var flkty = new Flickity( elem, {
    // options
    cellAlign: 'left',
    contain: true
    });

    // element argument can be a selector string
    //   for an individual element
    var flkty = new Flickity( '.main-carousel', {
    // options
    });
    </script>
</body>
</html>