<!DOCTYPE html>
<html lang="en">
    <?php 
    @require_once("../app/init.php");
    $titleTag = "BottleShooter Project";
    $metaDescription = "A bottle shooting html, and css game on desktop only.";
    ?>

<?php 
$Projects = $ProjectsArray[0];
$projectOne = $ProjectsArray[1];
@require("partials/head.php");
?>
<body class="project__item">
    <?php @require('partials/header.php');
    ?>
    <?php @require('partials/project__content.php');
    @require('partials/scroll__marker.php');?>
    <?php $Projects = $ProjectsArray[0];?>
    <main>
        <section class="work__stages background__black description__p mx__auto text__white">
            <div class="mx__auto max__w--container">
                <div class="description__p mx__auto">
                    <h2 class="text__center font__staatliches text__lg"><?php echo ($projectOne->projectSectionHeading1)?></h2>
                    <p class="text__md font__spacegrotesk--400"><?php echo ($projectOne->projectParagraph1)?></p>
                    <h3 class="text__md  font__spacegrotesk--700"><?php echo($projectOne->projectSectionHeading2)?></h3>
                    <ul class="font__spacegrotesk--400 text__md">
                        <li>How to make bottle respawns random</li>
                        <li>How to make the respawns at all</li>
                    </ul>
                    <h3 class="text__md font__staatliches">My Solution:</h3>
                    <pre class="rounded filter__shadow">
                        <code class="language-javascript">
                        function gifMe(){
                        <span class="text__orange">/*--------------------------Bottle 1---------------------------*/ </span>
                            if(newBottleDetect &#60; 1 && adsDetect == true){
                                visBottle.style.backgroundImage = GifOne;
                                <span class="text__orange">
                                //finds and removes one after specified index from the array of bottles.
                                //index is the random array
                                </span >
                                newBottleDetect = 1;
                                bottleVisibility.splice(bottleVisibility.indexOf(visBottle), 1);
                                visBottle2 = bottleVisibility[Math.floor(Math.random()*bottleVisibility.length)];
                                visBottle2.style.visibility = "visible";
                            };
                        }

                        </code>
                    </pre>
                </div>
            </div>
        </section>
        <section class="work__stages description__p mx__auto">
            <div class="mx__auto max__w--container">
                <div class="description__p mx__auto">
                    <h2 class="text__center font__staatliches text__lg"><?php echo ($projectTwo->projectSectionHeading1)?></h2>
                    <p class="text__md font__spacegrotesk--400"><?php echo ($projectTwo->projectParagraph1)?></p>
                    <h3 class="text__md font__staatliches">My Solution:</h3>
                    <pre class="rounded filter__shadow">
                        <code class="language-javascript">
                        function gifMe(){
                        <span class="text__orange">/*--------------------------Bottle 1---------------------------*/ </span>
                            if(newBottleDetect &#60; 1 && adsDetect == true){
                                visBottle.style.backgroundImage = GifOne;
                                <span class="text__orange">
                                //finds and removes one after specified index from the array of bottles.
                                //index is the random array
                                </span >
                                newBottleDetect = 1;
                                bottleVisibility.splice(bottleVisibility.indexOf(visBottle), 1);
                                visBottle2 = bottleVisibility[Math.floor(Math.random()*bottleVisibility.length)];
                                visBottle2.style.visibility = "visible";
                            };
                        }

                        </code>
                    </pre>
                    <p class="text__md  font__spacegrotesk--400"><?php echo($projectTwo->projectSectionHeading2)?></p>
                </div>
            </div>
        </section>

        <section class="work__stages background__black description__p mx__auto text__white">
            <div class="mx__auto max__w--container">
                <div class="description__p mx__auto">
                    <h2 class="text__center font__staatliches text__lg"><?php echo ($projectThree->projectSectionHeading1)?></h2>
                    <p class="text__md font__spacegrotesk--400"><?php echo ($projectThree->projectParagraph1)?></p>
                    <ul class="font__spacegrotesk--400 text__md">
                        <li>Background</li>
                        <li>Bucket (For bottles to sit on)</li>
                        <li>Bottle</li>
                        <li>Clouds</li>
                        <li>Bird (P.S. Don't shoot him)</li>
                    </ul>
                    <h3 class="text__md font__staatliches">My Solution:</h3>
                    <iframe class="filter__shadow rounded" src="https://bottleshooter.mattiasbellan.ca" height="700"></iframe>
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
    <script src="scripts/menu.js?v=1" defer></script>
    <script src="scripts/pagedetect.js?v=1" defer></script> 
</body>
</html>