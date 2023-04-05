<?php 

@require_once(__DIR__ . "/../init.php");

$bottleShooter = new cardInfo([
    'source' => 'bottleshooter.php',
    'title' => 'bottle shotting web based game project project information',
    'alt' => 'Monitor displaying Bottle Shooter web game',
    'projectName' => 'BottleShooter',
    'projectType' => ' HTML Game',
    'imageSource' => '/project-bottleshooter.webp',
    'height' => '400',
    'width' => '400'
]);

$dash = new cardInfo([
    'source' => 'dash.php',
    'title' => 'responsive website project information',
    'alt' => 'Monitor displaying DASH website',
    'projectName' => 'DASH',
    'projectType' => ' Responsive Website',
    'imageSource' => '/project-dash.webp',
    'height' => '400',
    'width' => '400'
]);

$botanical = new cardInfo([
    'source' => 'botanical.php',
    'title' => 'mobile app prototype project information',
    'alt' => 'Phone displaying Botanical prototype',
    'projectName' => 'Botanical',
    'projectType' => ' Mobile Prototype',
    'imageSource' => '/project-botanical.webp',
    'height' => '400',
    'width' => '500'
]);

$guitar = new cardInfo([
    'source' => 'guitarmonthly.php',
    'title' => 'guitar magazine project information',
    'alt' => 'Magazine displaying Guitar Monthly Magazine',
    'projectName' => 'Guitar Monthly',
    'projectType' => ' Magazine',
    'imageSource' => '/project-guitar.webp',
    'height' => '400',
    'width' => '400'
]);

$marketshare = new cardInfo([
    'source' => 'marketshare.php',
    'title' => 'mobile app prototype project information',
    'alt' => 'Phone displaying MarketShare prototype',
    'projectName' => 'MarketShare',
    'projectType' => ' Mobile Prototype',
    'imageSource' => '/project-marketshare.webp',
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
    'imageSource' => '/project-bottleshooter.webp',
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

$botanicalProject = new Projects([
    'source' => 'botanical.php',
    'title' => 'botanical gardens interactive prototype project',
    'alt' => 'Phone displaying botanical gardens prototype',
    'projectName' => 'Botanical',
    'projectType' => ' Interactive Prototype',
    'imageSource' => '/project-botanical.webp',
    'height' => '400',
    'width' => '500',
    'introHeadingContent' => 'Botanical',
    'introParagraphContent' => 'BOTANICAL IS AN <span class="text__orange">INTERACTIVE PROTOTYPE</span> CREATED IN ADOBE XD, FEATURING MULTIPLE <span class="text__orange">FUNCTIONAL PROCESSES</span>.',
    'buttonOneLink' => '#botanicalPrototype',
    'buttonOneTitle' => 'Link to Adobe Xd prototype',
    'buttonOneContent' => 'Try Now',
    'buttonTwoLink' => 'https://xd.adobe.com/view/d8a21240-e366-46d8-b5a4-a98c785dfcaa-8df1/?fullscreen',
    'buttonTwoTitle' => 'Link to Adobe XD prototype',
    'buttonTwoContent' => 'Adobe XD',
    'briefExplanation' => 'The <span class="text__orange">Botanical</span> prototype is a e-commerce application for a plant store. It featured an initial planning phase consisting of user flows, personas, and mind mapping which contributed to a successful user testing phase.',
    'longExplanation' => 'This project was meant to demonstrate my ability to create a functional prototype with feasibility in mind. This involved rigorous planning stages as well as creating the fictional botanical identity. <br><br> The first part of planning consisted of a mind map, of potential brand identities to create an application around. The next steps involved mapping the user flows, and developing user personas to better understand the end user.  From there my focus was on creating an intuitive app interface in accordance with my planning document(s) specifications. '
]);


$projectFive = new Projects([
    'projectSectionHeading1' => 'Botanical Branding',
    'projectParagraph1' => "In this project the focus was on intuitive user experience design, and therefore the branding for the fictional botanical company wasn't a priority. I quickly hopped in illustrator and developed a logo resembling the following",
    'projectSectionHeading2' => 'Mockup Stylesheet'
]);

$projectSix = new Projects([
    'projectSectionHeading1' => 'User Flow',
    'projectParagraph1' => "The next step in the creation of this prototype revolved around understanding the functionality which was to be implemented. As a necessary intermediary step, I began to mock a typical user flow to better understand my goals in relation to the users."
]);

$projectSeven = new Projects([
    'projectSectionHeading1' => 'Interactive Prototype',
    'projectParagraph1' => "Upon completing some of the more ancillary processes such as some User Persona's and a user scenario, I began on my prototype. I quickly developed my interface and began mocking my functionality, after a couple of hours of work I was ready to move to user testing.",
    'projectSectionHeading2' => 'Functions included'
]);

$projectEight = new Projects([
    'projectSectionHeading1' => 'User Testing Phase',
    'projectParagraph1' => "From here, a series of UseBerry user tests revolving around these functions. The data was extrapolated and formalized into a report which ultimately concluded the project. The report provides insight as to potential improvements to be made. The testing ultimately concluded and the design was intuitive and successful"
]);

$projectNine = new Projects([
    'projectSectionHeading1' => 'User Flow',
    'projectParagraph1' => "The next step in the creation of this prototype revolved around understanding the functionality which was to be implemented. As a necessary intermediary step, I began to mock a typical user flow to better understand my goals in relation to the users."
]);

$marketShareProject = new Projects([
    'source' => 'marketshare.php',
    'title' => 'MarketShare interactive prototype project',
    'alt' => 'Phone displaying MarketShare prototype',
    'projectName' => 'Market Share',
    'projectType' => ' Interactive Prototype',
    'imageSource' => '/project-marketshare.webp',
    'height' => '400',
    'width' => '400',
    'introHeadingContent' => 'MarketShare',
    'introParagraphContent' => 'MarketShare <span class="text__orange">is an interactive prototype</span> created in Figma, featuring multiple <span class="text__orange">functional processes</span>.',
    'buttonOneLink' => 'https://www.figma.com/file/GuxCnUI2zNX8urbfBhLWzi/PROJECT-2?node-id=1%3A2&t=RMgShP22WN3fL8vh-1',
    'buttonOneTitle' => 'Link to Figma prototype',
    'buttonOneContent' => 'Try Now',
    'buttonTwoLink' => '#marketsharePrototype',
    'buttonTwoTitle' => 'Link to Figma prototype',
    'buttonTwoContent' => 'Figma',
    'briefExplanation' => 'The <span class="text__orange">MarketShare</span> prototype is an endless swipe interface (similar to apps like Tinder) for an online marketplace. It featured an initial planning phase consisting of user flows, personas, and mind mapping which contributed to a successful user testing phase.',
    'longExplanation' => 'This project was meant to demonstrate my ability to create a functional prototype with feasibility in mind. This involved rigorous planning stages as well as creating the fictional MarketShare identity.
    <br><br>
    The first part of planning consisted of a mind map, of potential brand identities to create an application around. The next steps involved mapping the user flows, and developing user personas to better understand the end user. From there my focus was on creating an intuitive app interface in accordance with my planning document(s) specifications.'
]);


$projectTen = new Projects([
    'projectSectionHeading1' => 'MarketShare Branding',
    'projectParagraph1' => "The main focus of this project was on creating an intuitive user experience design. As a result, the branding for the fictional MarketShare company wasn't given top priority. To quickly address this, I designed a logo that resembled the following image in Adobe Illustrator.",
    'projectSectionHeading2' => 'Mockup Stylesheet'
]);

$projectEleven = new Projects([
    'projectSectionHeading1' => 'User Testing Phase',
    'projectParagraph1' => "Following this, a series of Maze user tests were conducted that revolved around these functions. The data gathered during the tests was extrapolated and formalized into a report, which provided valuable insights and recommendations for potential improvements. The testing ultimately concluded that the design was intuitive and successful."
]);

$projectTwelve = new Projects([
    'projectSectionHeading1' => 'User Flow',
    'projectParagraph1' => "The next step in creating this prototype involved understanding the functionality that was to be implemented. As an essential intermediary step, I started to mock a typical user flow to gain a better understanding of my goals in relation to the users."
]);



$guitarMonthlyProject = new Projects([
    'source' => 'guitarmonthly.php',
    'title' => 'guitarMonthlyMagazine',
    'alt' => 'Guitar Monthly Magazine Mockup',
    'projectName' => 'Guitar Monthly',
    'projectType' => ' Magazine',
    'imageSource' => '/project-guitar.webp',
    'height' => '400',
    'width' => '400',
    'introHeadingContent' => 'Guitar Monthly',
    'introParagraphContent' => "<span class='text__orange'>Guitar monthly</span> involved an iterative approach to traditional print design using <span class='text__orange'>Adobe InDesign</span>. The project was for a Graphic Design course at BCIT.",
    'buttonOneLink' => 'downloads/GuitarMonthly_magazine.pdf',
    'buttonOneTitle' => 'Download Guitar Monthly Magazine PDF',
    'buttonOneContent' => 'Download PDF',
    'buttonTwoLink' => 'https://acrobat.adobe.com/link/review?uri=urn:aaid:scds:US:dfd3bac1-4504-3d14-a1da-442beefd4c64',
    'buttonTwoTitle' => 'View the Guitar Monthly PDF',
    'buttonTwoContent' => 'View PDF',
    'briefExplanation' => 'The Guitar Monthly Magazine involved a two planning stages, and the final product. The end deliverable featured a Cover Page, Spread, and a BCIT ad placement on the final page. The cover page provides insight to the content, and the content was not placeholder, emulating the process of real print media work.',
    'longExplanation' => "The Guitar Monthly Magazine is a fictional publication that caters to guitar enthusiasts and professionals. The magazine is released on a monthly basis, and each issue is carefully curated to showcase the latest trends in the world of guitars. The two planning stages involved extensive research and brainstorming to ensure that the content is relevant, engaging, and informative. <br><br> The final product of The Guitar Monthly Magazine, being a fictional publication, is a result of the hard work put in during the planning stages. The Cover Page, Spread, and BCIT ad placement on the final page were carefully designed to grab the reader's attention and provide a seamless reading experience. The cover page not only features visually appealing graphics but also provides a glimpse into the content of the magazine. The content featured in the magazine was not placeholder, which means that it was carefully curated to emulate the process of real print media work, ensuring that readers receive only the best quality content."
]);

$projectThirteen = new Projects([
    'projectSectionHeading1' => 'Project Roughs',
    'projectParagraph1' => "The first step in this design process was a set of five hand-drawn roughs, the idea is to pick which iteration best suits your objective. In this case it was 3 that was selected.",
    'projectSectionHeading2' => 'Hand Drawn Roughs'
]);

$projectFourteen = new Projects([
    'projectSectionHeading1' => 'Comprehensive iterations',
    'projectParagraph1' => "The comprehensives are an expansion of the design ideology displayed at<a href='#roughsGuitarMagazine'>#3 within the roughs.</a> The expansion of ideation was done twice, and there the favourite comprehensive became Comprehensive #2"
]);

$projectFifteen = new Projects([
    'projectSectionHeading1' => 'Final Edition',
    'projectParagraph1' => "Upon the addition of graphics and real content it was apparent that some changes needed to be made. In specific the advertisement was made smaller and placed on the center of the back cover as opposed to a central component."
]);

$projectSixteen = new Projects([
    'projectSectionHeading1' => 'User Testing Phase',
    'projectParagraph1' => "From here, a series of UseBerry user tests revolving around these functions. The data was extrapolated and formalized into a report which ultimately concluded the project. The report provides insight as to potential improvements to be made. The testing ultimately concluded and the design was intuitive and successful."
]);

$dashProject = new Projects([
    'source' => 'dash.php',
    'title' => 'Dash Yogurt',
    'alt' => 'Dash Yogurt Company Website',
    'projectName' => 'Dash Yogurt Company',
    'projectType' => ' Responsive Site',
    'imageSource' => '/project-dash.webp',
    'height' => '400',
    'width' => '400',
    'introHeadingContent' => 'Dash Yogurt Company',
    'introParagraphContent' => "<span class='text__orange'>DASH yogurt company site</span> was a cohesive design and development process, with an emphasis on creating actionable designs for development.",
    'buttonOneLink' => 'https://dash-yogurt.mattiasbellan.ca/',
    'buttonOneTitle' => 'Dash Yogurt company website',
    'buttonOneContent' => 'View Site',
    'buttonTwoLink' => 'https://www.figma.com/file/tl3EwDGsF8HCd5WNt9hzmg/Untitled?node-id=0%3A1&t=VA1TmOxpKvBrwpeL-1',
    'buttonTwoTitle' => 'Figma file',
    'buttonTwoContent' => 'Figma',
    'briefExplanation' => 'The DASH Yogurt Company website is a responsive website developed with Tailwind CSS, and designed in Figma. It featured a single page previewed on multiple screen sizes. From there it was developed, and the lightbox plugin was added for images.',
    'longExplanation' => "The DASH Yogurt Company website was developed with Tailwind CSS and designed in Figma. It features a responsive single-page design that was previewed on multiple screen sizes, ensuring it looks and performs flawlessly across devices. A lightbox plugin was added for images, allowing users to view them in a larger format without navigating to a separate page.
    <br><br>
    The website was developed with a focus on clean, efficient, and optimized code to ensure optimal performance. The result is a visually stunning and functional website that showcases the benefits of responsive design, CSS frameworks, and design tools. The DASH Yogurt Company website is an excellent example of how a website can meet both the client's and user's needs."
]);

$projectNineteen = new Projects([
    'projectSectionHeading1' => 'DASH Yogurt Company Logos',
    'projectParagraph1' => "The logos were designed in Adobe Illustrator, and featured original graphics, and color scheme. The logo was to be implemented on the site as well, and thus it needed to be memorable, and smaller profile. ",
    'projectSectionHeading2' => 'Mockup Stylesheet'
]);

$projectTwenty = new Projects([
    'projectSectionHeading1' => 'DASH Figma Prototype',
    'projectParagraph1' => "Using Figma it was now time to mockup the three targeted screen sizes, this was done specifically to make development as streamlined as possible, while still having a good looking design."
]);

$projectTwelve = new Projects([
    'projectSectionHeading1' => 'Live Site',
    'projectParagraph1' => "Next i rapidly developed the site making slight adjustments to account for design feedback. The Dash responsive site is now live"
]);


$ProjectsArray = [
    $bottleShooterProject, $projectOne, $projectTwo, $botanicalProject, $projectFive, $projectSix, $projectSeven, $projectEight, $marketShareProject, $projectNine, $projectTen, $projectEleven, $projectTwelve, $guitarMonthlyProject, $projectThirteen, $projectFourteen, $projectFifteen, $projectSixteen, $projectSeventeen, $dashProject,  $projectNineteen, $projectTwenty
]

?>