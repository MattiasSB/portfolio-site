<!DOCTYPE html>
<html lang="en">
    <?php 
    @require_once("../app/init.php");
    $titleTag = "BottleShooter Project";
    $metaDescription = "A bottle shooting html, and css game on desktop only.";
    ?>

<?php 
$Projects = $ProjectsArray[4];
$projectOne = $ProjectsArray[5];
$projectTwo = $ProjectsArray[6];
$projectThree = $ProjectsArray[7];
$projectFour = $ProjectsArray[8];
@require("partials/head.php");
?>
<body class="project__item">
    <?php @require('partials/header.php');
    ?>



    <?php @require('partials/project__content.php');
    @require('partials/scroll__marker.php');?>
    <section class="work__stages background__black description__p mx__auto text__white">
        <div class="mx__auto max__w--container">
            <div class="description__p mx__auto">
                <h2 class="text__center font__staatliches text__lg"><?php echo ($projectOne->projectSectionHeading1)?></h2>
                <p class="text__md font__spacegrotesk--400"><?php echo ($projectOne->projectParagraph1)?></p>
                <h3 class="text__md  font__spacegrotesk--700"><?php echo($projectOne->projectSectionHeading2)?>:</h3>
                <div class="image__container rounded filter__shadow">
                    <svg viewBox="0 0 463.04 695.37" preserveAspectRatio="xMidYMid meet">
                        <image id="styleguide__botanical" href="img/project-botanical__styleguide.svg" width="463.04" height="695.37" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="work__stages description__p mx__auto">
        <div class="mx__auto max__w--container">
            <div class="description__p mx__auto">
                <h2 class="text__center font__staatliches text__lg"><?php echo ($projectTwo->projectSectionHeading1)?></h2>
                <p class="text__md font__spacegrotesk--400"><?php echo ($projectTwo->projectParagraph1)?></p>
                <h3 class="text__md font__staatliches">User Flow</h3>
                <div class="image__container rounded filter__shadow">
                    <svg viewBox="-0.5 -0.5 822 1152" preserveAspectRatio="xMidYMid meet">
                        <image href="img/project-botanical__user-flow.svg" width="822" height="1152" />
                    </svg>
                </div>

            </div>
        </div>
    </section>

    <section class="work__stages background__black description__p mx__auto text__white">
        <div class="mx__auto max__w--container">
            <div class="description__p mx__auto">
                <h2 class="text__center font__staatliches text__lg"><?php echo ($projectThree->projectSectionHeading1)?></h2>
                <p class="text__md font__spacegrotesk--400"><?php echo ($projectThree->projectParagraph1)?></p>
                <h3 class="text__md font__staatliches"><?php echo ($projectThree->projectSectionHeading2)?></h3>
                <ul class="font__spacegrotesk--400 text__md">
                    <li>Purchase a cactus!!</li>
                    <li>Log in or sign up for an account</li>
                    <li>Visit your account dashboard</li>
                </ul>
                <iframe class="filter__shadow" width="428" height="926" src="https://xd.adobe.com/embed/169f94d0-df46-498e-83f7-98be90ab1e22-43cc/" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="work__stages description__p mx__auto">
        <div class="mx__auto max__w--container">
            <div class="description__p mx__auto">
                <h2 class="text__center font__staatliches text__lg"><?php echo ($projectFour->projectSectionHeading1)?></h2>
                <p class="text__md font__spacegrotesk--400"><?php echo ($projectFour->projectParagraph1)?></p>
            </div>
        </div>
    </section>
    <div class="flex justify__center">
        <div class="button__black flex justify__center items__center filter__shadow">
            <a class="font__staatliches" href="<?php echo ($Projects->buttonOneLink)?>" title="<?php echo ($Projects->buttonOneTitle)?>"><?php echo ($Projects->buttonOneContent)?></a>
        </div>
        <div class="button__black flex justify__center items__center filter__shadow button__orange">
        <a class="font__staatliches" href="<?php echo ($Projects->buttonTwoLink)?>" title="<?php echo ($Projects->buttonTwoTitle)?>"><?php echo ($Projects->buttonTwoContent)?></a>
        </div>
    </div>
    <?php @require('partials/social__modal.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <script src="scripts/flickity.pkgd.min.js" defer></script>
    <script src="scripts/menu.js?v=1.1" defer></script>
    <script src="scripts/pagedetect.js?v=1.1" defer></script> 
</body>
</html>