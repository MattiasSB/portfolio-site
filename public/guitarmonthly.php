<!DOCTYPE html>
<html lang="en">
    <?php 
    @require_once("../app/init.php");
    $titleTag = "Guitar Monthly";
    $metaDescription = "A Guitar Monthly music magazine design project";
    ?>

<?php 
$Projects = $ProjectsArray[13];
$projectOne = $ProjectsArray[14];
$projectTwo = $ProjectsArray[15];
$projectThree = $ProjectsArray[16];
@require("partials/head.php");
?>
<body class="project__item">
    <?php @require('partials/header.php');
    ?>
    <?php @require('partials/project__content.php');
    @require('partials/scroll__marker.php');?>
    <main>
        <section class="work__stages background__black description__p mx__auto text__white">
            <div id="roughsGuitarMagazine" class="mx__auto max__w--container">
                <div class="description__p mx__auto">
                    <h2 class="text__center font__staatliches text__lg"><?php echo ($projectOne->projectSectionHeading1)?></h2>
                    <p class="text__md font__spacegrotesk--400"><?php echo ($projectOne->projectParagraph1)?></p>
                    <h3 class="text__md  font__spacegrotesk--700"><?php echo($projectOne->projectSectionHeading2)?>:</h3>
                    <div class="image__container rounded filter__shadow">
                        <svg viewBox="0 0 465 731" preserveAspectRatio="xMidYMid meet">
                            <image href="img/project-guitar-roughs.svg" width="465" height="731" />
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
                        <svg viewBox="0 0 709 637" preserveAspectRatio="xMidYMid meet">
                            <image href="img/project-guitar-comprehensives.svg" width="709" height="637" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section class="work__stages description__p mx__auto background__black text__white">
            <div class="mx__auto max__w--container">
                <div class="description__p mx__auto">
                    <h2 class="text__center font__staatliches text__lg"><?php echo ($projectThree->projectSectionHeading1)?></h2>
                    <p class="text__md font__spacegrotesk--400"><?php echo ($projectThree->projectParagraph1)?></p>
                </div>
            </div>
        </section>
        <div class="flex justify__center background__black">
            <div class="button__black flex justify__center items__center filter__shadow">
                <a class="font__staatliches" download href="<?php echo ($Projects->buttonOneLink)?>" title="<?php echo ($Projects->buttonOneTitle)?>"><?php echo ($Projects->buttonOneContent)?></a>
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