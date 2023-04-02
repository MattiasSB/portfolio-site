<?php 

@require_once(__DIR__ . "/../init.php");

$bottleShooter = new cardInfo([
    'source' => 'bottleshooter.php',
    'title' => 'bottle shotting web based game project project information',
    'alt' => 'Monitor displaying Bottle Shooter web game',
    'projectName' => 'BottleShooter',
    'projectType' => ' HTML Game',
    'imageSource' => '/project-bottleshooter.jpg',
    'height' => '400',
    'width' => '400'
]);

$dash = new cardInfo([
    'source' => '#',
    'title' => 'responsive website project information',
    'alt' => 'Monitor displaying DASH website',
    'projectName' => 'DASH',
    'projectType' => ' Responsive Website',
    'imageSource' => '/project-dash.jpg',
    'height' => '400',
    'width' => '400'
]);

$botanical = new cardInfo([
    'source' => 'botanical.php',
    'title' => 'mobile app prototype project information',
    'alt' => 'Phone displaying Botanical prototype',
    'projectName' => 'Botanical',
    'projectType' => ' Mobile Prototype',
    'imageSource' => '/project-botanical.jpg',
    'height' => '400',
    'width' => '500'
]);

$guitar = new cardInfo([
    'source' => '#',
    'title' => 'guitar magazine project information',
    'alt' => 'Magazine displaying Guitar Monthly Magazine',
    'projectName' => 'Guitar Monthly',
    'projectType' => ' Magazine',
    'imageSource' => '/project-guitar.jpg',
    'height' => '400',
    'width' => '400'
]);

$marketshare = new cardInfo([
    'source' => '#',
    'title' => 'mobile app prototype project information',
    'alt' => 'Phone displaying MarketShare prototype',
    'projectName' => 'MarketShare',
    'projectType' => ' Mobile Prototype',
    'imageSource' => '/project-marketshare.jpg',
    'height' => '400',
    'width' => '400'
]);

$homeScroll = [
    $bottleShooter, $botanical, $dash
];

$devScroll = [
    $bottleShooter, $dash
];

$designScroll = [
    $guitar, $botanical, $marketshare
];


$bottleShooterProject = new Projects([
    'source' => 'bottleshooter.php',
    'title' => 'bottle shotting web based game project project information',
    'alt' => 'Monitor displaying Bottle Shooter web game',
    'projectName' => 'BottleShooter',
    'projectType' => ' HTML Game',
    'imageSource' => '/project-bottleshooter.jpg',
    'height' => '400',
    'width' => '400',
    'introHeadingContent' => 'BottleShooter',
    'introParagraphContent' => 'BOTTLE SHOOTER IS A AIM TRAINING WEB GAME MADE WITH <span class="text__orange">HTML</span>, <span class="text__orange">CSS</span>, AND <span class="text__orange">JAVASCRIPT</span>. (DESKTOP ONLY)',
    'buttonOneLink' => 'https://www.bottleshooter.mattiasbellan.ca/',
    'buttonOneTitle' => 'Link to the Bottle Shooter game',
    'buttonOneContent' => 'Try Now',
    'buttonTwoLink' => 'https://github.com/MattiasSB/bottleshooter',
    'buttonTwoTitle' => 'Link to the Bottle Shooter github repository',
    'buttonTwoContent' => 'Github',
    'briefExplanation' => 'The <span class="text__orange">BottleShooter</span> game started as an idea for an animation assignment with mouse tracking. The goal shifted and became to create digital assets and make a fully functioning game using as minimal internet and external help as possible. The specific style of game is aim trainer/shooter. ',
    'longExplanation' => 'This project was meant to advance skills in JavaScript, HTML, and CSS. As well as testing my ability to create a project in an iterative manner. <br><br> The project started with a single bottle animation for an Animation assignment, it featured a mouse tracking scope which would appear when pressing SHIFT, and a bottle that would break upon clicking. I could have left it there but something in me really really wanted it to respawn. <br><br> I suppose this is where you could say, “**** hits the fan” .  Despite my problem solving being relatively quickly, the code was very non-flexible, and needed a complete overhaul (as you will see in the version history). '
]);
$botanicalProject = new Projects([
    'source' => 'botanical.php',
    'title' => 'botanical gardens interactive prototype project',
    'alt' => 'Phone displaying botanical gardens prototype',
    'projectName' => 'Botanical',
    'projectType' => ' Interactive Prototype',
    'imageSource' => '/project-botanical.jpg',
    'height' => '400',
    'width' => '500',
    'introHeadingContent' => 'Botanical',
    'introParagraphContent' => 'BOTANICAL IS AN <span class="text__orange">INTERACTIVE PROTOTYPE</span> CREATED IN ADOBE XD, FEATURING MULTIPLE <span class="text__orange">FUNCTIONAL PROCESSES</span>.',
    'buttonOneLink' => 'https://www.bottleshooter.mattiasbellan.ca/',
    'buttonOneTitle' => 'Link to Adobe Xd prototype',
    'buttonOneContent' => 'Try Now',
    'buttonTwoLink' => 'https://github.com/MattiasSB/bottleshooter',
    'buttonTwoTitle' => 'Link to Adobe XD prototype',
    'buttonTwoContent' => 'Figma',
    'briefExplanation' => 'The <span class="text__orange">Botanical</span> prototype is a e-commerce application for a plant store. It featured an initial planning phase consisting of user flows, personas, and mind mapping which contributed to a successful user testing phase.',
    'longExplanation' => 'This project was meant to demonstrate a functional prototype with feasibility in mind. This involved rigorous planning stages as well as creating the fictional botanical identity. <br><br> The first part of planning consisted of a mind map, of potential brand identities to create an application around. The next steps involved mapping the user flows, and developing user personas to better understand the end user.  From there my focus was on creating an intuitive app interface in accordance with my planning document(s) specifications. '
]);

$projectOne = new Projects([
    'projectSectionHeading1' => 'First Version',
    'projectParagraph1' => 'After fulfilling the requirements to my animation assignment, the work never stopped. I then immediately began to think about making bottle respawn (As the first iteration was a single bottle.). <br><br>Considering the nature of the problem (the problem: I had no idea what I was doing) I did what I could and made a breakdown which looked like this:',
    'projectSectionHeading2' => 'Things I need to figure out:'
]);

$projectTwo = new Projects([
    'projectSectionHeading1' => 'Second Version',
    'projectParagraph1' => 'Now the problems were glaringly obvious. There had to be a way to loop this statement. I began researching loops, and was able to deduce I could use a foreach statement in this type of situation. ',
    'projectSectionHeading2' => 'At this point my skills as a programmer had marginally improved, and my understanding of core concepts and principles was beginning to come full circle. <br><br>From here to the end I just had to workout the infinite respawn, game menu, and some new graphics for my game, as previously I was using copyright free graphics I had found.'
]);

$projectThree = new Projects([
    'projectSectionHeading1' => 'Third Version',
    'projectParagraph1' => 'Now it was time to put on my designer hat and hop in Adobe Illustrator to design some new assets.'
]);

$projectFour = new Projects([
    'projectSectionHeading1' => 'Third - Sixth Version',
    'projectParagraph1' => 'This consisted of creating a menu, and adding keyboard commands to navigate the menu (the not very fun stuffs). Ultimately upon completing the menu, and bug fixes, I had reached version 6, and it was time to release my project.'
]);

$projectFive = new Projects([
    'projectSectionHeading1' => 'Initial Process',
    'projectParagraph1' => 'This consisted of creating a menu, and adding keyboard commands to navigate the menu (the not very fun stuffs). Ultimately upon completing the menu, and bug fixes, I had reached version 6, and it was time to release my project.'
]);


$marketshareHeaderImg = new Projects([
    'source' => '#',
    'title' => 'mobile app prototype project information',
    'alt' => 'Phone displaying MarketShare prototype',
    'projectName' => 'MarketShare',
    'projectType' => ' Mobile Prototype',
    'imageSource' => '/project-marketshare.jpg',
    'height' => '400',
    'width' => '400'
]);



$ProjectsArray = [
    $bottleShooterProject, $projectOne, $projectTwo,  $marketshareHeaderImg, $botanicalProject, $projectFive
]

?>