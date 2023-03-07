<!DOCTYPE html>
<html lang="en">
<?php 
@require_once("init.php");
@require("partials/head.php");
?>
<body>
    <?php 
    @require("partials/header.php");
    ?>
    <div class="banner__container">
        <img class="banner__image filter__shadow" src="/img/about-banner.jpg" alt="Picture of me on  a hike." height="400" width="1000">
    </div>
    <section class="about">
        <div class="carousel filter__shadow about" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
            <div class="carousel-cell">
                <div class="about__card flex items__center">
                    <div class="about__card--content font__spacegrotesk--400">
                        <p>From <span class="text__orange">Front End Development</span>,  to <span class="text__orange">User Interface design</span>, and <span class="text__orange">Graphic Design</span>. I have experience with many forms of media working in team environments.
                        <br><br>
                        Ive made various <span class="text__orange">posters</span >, designed and developed <span class="text__orange">websites</span>, all with a focus on user experience to maximize <span class="text__orange">results</span>.  
                        <br><br>
                        I value learning and am always advancing my skills in development, as well as striving to create designs in line with current UI and UX trends and principles.
                        <br><br>
                        I also like activities where you have to stand sometimes such as, <span class="text__orange">exploring</span> the BC outdoors, playing the guitar,or shooting photography.</p>
                    </div >
                </div>
            </div>
        <div class="carousel-cell">
            <div class="about__card flex flex__cols position__relative">
                <h2 class="font__staatliches text__lg text__white">About Me</h2>
                <h3 class="font__spacegrotesk--700 text__md text__white">I do <span class="text__orange">Design</span>, and <span class="text__orange">Development</span></h3>
                <div class="flex flex__cols">
                    <a class="social__links font__spacegrotesk--400" href="#">Linkedin</a>
                    <a class="social__links font__spacegrotesk--400" href="mailto:m.bellan500@gmail.com">m.bellan500@gmail.com</a>
                    <a class="social__links font__spacegrotesk--400" href="tel:+16045002732">604-500-2732</a>
                </div>
                <div class="card__arrow--right text__white flex position__absolute items__center">
                    <p class="font__spacegrotesk--400">Education</p>
                    <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.003 13.0607C15.5888 12.4749 15.5888 11.5251 15.003 10.9393L5.45703 1.3934C4.87124 0.807611 3.92149 0.807611 3.33571 1.3934C2.74992 1.97919 2.74992 2.92893 3.33571 3.51472L11.821 12L3.33571 20.4853C2.74992 21.0711 2.74992 22.0208 3.33571 22.6066C3.92149 23.1924 4.87124 23.1924 5.45703 22.6066L15.003 13.0607ZM0 13.5H13.9423V10.5H0V13.5Z" fill="#FF825E"/>
                    </svg>
                </div>
                <div class="card__arrow--left text__white flex position__absolute items__center">
                    <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.003 13.0607C15.5888 12.4749 15.5888 11.5251 15.003 10.9393L5.45703 1.3934C4.87124 0.807611 3.92149 0.807611 3.33571 1.3934C2.74992 1.97919 2.74992 2.92893 3.33571 3.51472L11.821 12L3.33571 20.4853C2.74992 21.0711 2.74992 22.0208 3.33571 22.6066C3.92149 23.1924 4.87124 23.1924 5.45703 22.6066L15.003 13.0607ZM0 13.5H13.9423V10.5H0V13.5Z" fill="#FF825E"/>
                    </svg>
                    <p class="font__spacegrotesk--400">About Me</p>
                </div>
            </div>
            </div>
            <div class="carousel-cell">
                <div class="about__card flex flex__cols position__relative">
                    <h3 class="font__staatliches text__lg text__white">Schooling</h3>
                    <p class="font__spacegrotesk--400 text__white">Despite limited education, I am a motivated self learner dedicated to improving!</p>
                    <div class="schooling"> 
                        <h4 class="font__staatliches text__white"><span class="text__orange">-High school diploma</span> | <br> EARL MARRIOTT SECONDARY SCHOOL </h4>
                            <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.003 13.0607C15.5888 12.4749 15.5888 11.5251 15.003 10.9393L5.45703 1.3934C4.87124 0.807611 3.92149 0.807611 3.33571 1.3934C2.74992 1.97919 2.74992 2.92893 3.33571 3.51472L11.821 12L3.33571 20.4853C2.74992 21.0711 2.74992 22.0208 3.33571 22.6066C3.92149 23.1924 4.87124 23.1924 5.45703 22.6066L15.003 13.0607ZM0 13.5H13.9423V10.5H0V13.5Z" fill="#FF825E"/>
                            </svg>
                        <h4 class="text__white font__staatliches"><span class="text__orange">-new media design and development</span> | <br> BCIT (Currently enrolled)</h4>
                    </div>
                    <div class="card__arrow--right text__white flex position__absolute items__center">
                    <p class="font__spacegrotesk--400">Design Tools</p>
                    <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.003 13.0607C15.5888 12.4749 15.5888 11.5251 15.003 10.9393L5.45703 1.3934C4.87124 0.807611 3.92149 0.807611 3.33571 1.3934C2.74992 1.97919 2.74992 2.92893 3.33571 3.51472L11.821 12L3.33571 20.4853C2.74992 21.0711 2.74992 22.0208 3.33571 22.6066C3.92149 23.1924 4.87124 23.1924 5.45703 22.6066L15.003 13.0607ZM0 13.5H13.9423V10.5H0V13.5Z" fill="#FF825E"/>
                    </svg>
                </div>
                </div>
            </div>
            <div class="carousel-cell">
                <div class="about__card">

                </div>  
            </div>
            <div class="carousel-cell">
                <div class="about__card">

                </div>
            </div>
            <div class="carousel-cell">
                <div class="about__card">

                </div>
            </div>
        </div>
    </section>
    <script src="/scripts/flickity.pkgd.min.js"></script>
    <script src="/scripts/menu.js"></script>
</body>
</html>