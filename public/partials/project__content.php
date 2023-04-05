
<section class="max__w--container mx__auto project">
    <div class="intro__about grid grid__template--cols-12"> 
        <div class="flex flex__cols items__center intro__about--text mx__auto">
            <h1 class="font__staatliches text__md text__center"><?php echo ($Projects->introHeadingContent)?></h1>
            <p class="font__spacegrotesk--700 font__uppercase"><?php echo ($Projects->introParagraphContent)?></p>
            <div class="flex">
                <div class="button__black flex justify__center items__center filter__shadow">
                    <a class="font__staatliches" href="<?php echo ($Projects->buttonOneLink)?>" title="<?php echo ($Projects->buttonOneTitle)?>"><?php echo ($Projects->buttonOneContent)?></a>
                </div>
                <div class="button__black flex justify__center items__center filter__shadow button__orange">
                <a class="font__staatliches" href="<?php echo ($Projects->buttonTwoLink)?>" title="<?php echo ($Projects->buttonTwoTitle)?>"><?php echo ($Projects->buttonTwoContent)?></a>
                </div>
            </div>
        </div>
        <img class="ratio__square filter__shadow rounded mx__auto" src="/public/img/<?php echo ($Projects->imgSource)?>" alt="<?php echo ($Projects->imgAlt)?>" width="<?php echo ($Projects->height)?>" height="<?php echo ($Projects->width)?>">
    </div>
</section>
<section class="story__explanation max__w--container mx__auto flex flex__cols">
    <div class="description__p mx__auto">
        <h2 class="text__lg font__staatliches text__center">Brief Story</h2>
        <p class="text__md font__spacegrotesk--400">
        <?php echo ($Projects->briefExplanation)?>
        </p>
    </div>
    <div class="description__p mx__auto">
        <h3 class="text__xl font__staatliches">The Long Story</h3>
        <p class="text__md font__spacegrotesk--400">
        <?php echo ($Projects->longExplanation)?>
        </p>
    </div>
</section>