<div class="carousel-cell">
    <a href="<?php echo($cardInfo->linkSource);?>" title="<?php echo($cardInfo->title);?>">
        <img class="rounded filter__shadow" src="/img<?php echo($cardInfo->imgSource)?>" alt="<?php echo($cardInfo->alt)?>" height="<?php echo($cardInfo->height)?>" width="<?php echo($cardInfo->width)?>">
    </a>
    <a href="<?php echo($cardInfo->linkSource);?>">
        <p class="font__spacegrotesk--400"><?php echo($cardInfo->projectName);?><span class="text__orange"><?php echo($cardInfo->projectType);?></span></p>
    </a>
</div>