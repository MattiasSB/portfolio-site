<!DOCTYPE html>
<html lang="en">
    <?php 
    @require_once("../app/init.php");
    $titleTag = "MarketShare";
    $metaDescription = "A mobile prototype of a online marketplace application";
    $metaOGTitle = 'Dash - Portfolio - Mattias Bellan';
    $metaOGImage = 'https://mattiasbellan.ca/public/img/og_botanical.webp';
    $metaOGDescription = 'Check out my Dash Responsive website project.';
    $metaOGType = 'website';
    $metaOGUrl = 'https://mattiasbellan.ca/public/dash.php';
    ?>

<?php 
$Projects = $ProjectsArray[19];
$projectOne = $ProjectsArray[20];
$projectTwo = $ProjectsArray[21];
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
                        <svg viewBox="0 0 815.03 206.5" preserveAspectRatio="xMidYMid meet">
                            <image href="img/project-dash-logo.svg" width="815" height="206.5" />
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
                    <iframe class="rounded filter__shadow" width="800" height="450" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2Ftl3EwDGsF8HCd5WNt9hzmg%2FUntitled%3Fnode-id%3D0%253A1%26t%3DcSUSXHpvvCDu5B7u-1" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section class="work__stages background__black description__p mx__auto text__white">
            <div class="mx__auto max__w--container">
                <div class="description__p mx__auto">
                    <h2 class="text__center font__staatliches text__lg"><?php echo ($projectThree->projectSectionHeading1)?></h2>
                    <p class="text__md font__spacegrotesk--400"><?php echo ($projectThree->projectParagraph1)?></p>
                    <iframe class="rounded filter__shadow" width="400" height="950" src="https://dash-yogurt.mattiasbellan.ca/" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <div class="flex justify__center background__black">
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