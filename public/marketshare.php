<!DOCTYPE html>
<html lang="en">
    <?php 
    @require_once("../app/init.php");
    $titleTag = "MarketShare";
    $metaDescription = "A mobile prototype of a online marketplace application";
    $metaOGTitle = 'MarketShare - Portfolio - Mattias Bellan';
    $metaOGImage = 'https://mattiasbellan.ca/public/img/og_botanical.webp';
    $metaOGDescription = 'Check out my MarketShare interactive prototype project.';
    $metaOGType = 'website';
    $metaOGUrl = 'https://mattiasbellan.ca/public/marketshare.php';
    ?>

<?php 
$Projects = $ProjectsArray[8];
$projectOne = $ProjectsArray[10];
$projectTwo = $ProjectsArray[9];
$projectThree = $ProjectsArray[6];
$projectFour = $ProjectsArray[11];
@require("partials/head.php");
?>
<body class="project__item">
    <?php @require('partials/header.php');
    ?>
    <?php @require('partials/project__content.php');
    @require('partials/scroll__marker.php');?>
    <main>
        <section class="work__stages background__black description__p mx__auto text__white">
            <div class="mx__auto max__w--container">
                <div class="description__p mx__auto">
                    <h2 class="text__center font__staatliches text__lg"><?php echo ($projectOne->projectSectionHeading1)?></h2>
                    <p class="text__md font__spacegrotesk--400"><?php echo ($projectOne->projectParagraph1)?></p>
                    <h3 class="text__md  font__spacegrotesk--700"><?php echo($projectOne->projectSectionHeading2)?>:</h3>
                    <div class="image__container rounded filter__shadow">
                        <svg viewBox="0 0 692 798" preserveAspectRatio="xMidYMid meet">
                            <image href="img/project-MarketShare-styleGuidestyleGuide.svg" width="698" height="792" />
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
                    <div class="image__container rounded filter__shadow">
                        <svg viewBox="0 0 816 522" preserveAspectRatio="xMidYMid meet">
                            <image href="img/project-marketshare-user_flow.svg" width="816" height="522" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section id="marketsharePrototype" class="work__stages background__black description__p mx__auto text__white">
            <div class="mx__auto max__w--container">
                <div class="description__p mx__auto">
                    <h2 class="text__center font__staatliches text__lg"><?php echo ($projectThree->projectSectionHeading1)?></h2>
                    <p class="text__md font__spacegrotesk--400"><?php echo ($projectThree->projectParagraph1)?></p>
                    <h3 class="text__md font__staatliches"><?php echo ($projectThree->projectSectionHeading2)?></h3>
                    <ul class="font__spacegrotesk--400 text__md">
                        <li>Swipe through items</li>
                        <li>Text a seller (Camera)</li>
                        <li>Complete a conversation (Camera)</li>
                        <li>Make a post</li>
                    </ul>
                    <iframe class="rounded filter__shadow" width="800" height="450" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FGuxCnUI2zNX8urbfBhLWzi%2FPROJECT-2%3Fpage-id%3D1%253A2%26node-id%3D23-993%26viewport%3D374%252C339%252C0.08%26scaling%3Dscale-down%26starting-point-node-id%3D23%253A993" allowfullscreen></iframe>
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
    </main>
    <?php @require('partials/social__modal.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <script src="scripts/flickity.pkgd.min.js" defer></script>
    <script src="scripts/menu.js?v=1.1" defer></script>
    <script src="scripts/pagedetect.js?v=1.1" defer></script> 
</body>
</html>