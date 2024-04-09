<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Dmytro Kovalenko - web developer with 5+ years of experience. Create web sites and web applications"/>
    <link rel="stylesheet" href="/assets/scss/app.css"/>
    <title>Dmytro Kovalenko</title>
    <link rel="icon" href="/assets/img/icon.png">
</head>

<body class="dark">
<div id="intro" class="intro">
    <p class="logo-header">
        <span class="logo">W</span><span class="logo">e</span><span class="logo">l</span><span
            class="logo">c</span><span class="logo">o</span><span class="logo">m</span><span class="logo">e</span>
    </p>
</div>

<div class="particles-js" id="particles-js"></div>


<header class="header container" id="header">
    <div class="closeNavMenu" id="closeNavMenu">
        <span class="carbon--close"></span>
    </div>
    <a href="/" class="logo" aria-label="mainPage">
        <img src="/assets/img/logo.png" alt="logo">
    </a>
    <nav class="navigation">
        <ul class="nav_list" id="navlist">
            <li class="nav_item"><p data-href="#home" class="nav_link">Home</p></li>
            <li class="nav_item"><p data-href="#myServices" class="nav_link">My services</p></li>
            <li class="nav_item"><p data-href="#about" class="nav_link">About</p></li>
            <li class="nav_item"><p data-href="#skills" class="nav_link">Skills</p></li>
            <li class="nav_item"><p data-href="#works" class="nav_link">Projects</p></li>

        </ul>
        <a href="/assets/docs/Dmytro_Kovalenko_Resume.pdf" aria-label="Resume" target="_blank"
           class="btn _solid resumeLink">Download Resume</a>
    </nav>
    <div class="nav__toggle" id="navToggle">
        <span class="iconamoon--menu-burger-horizontal-fill"></span>
    </div>
</header>

<main id="pagepiling" class="container">

    <!-- HOME -->
    <section class="home" id="home">

        <div class="home__content">
            <div class="content__text">
                <p class="home_title">Hi, <br> I'm <span class="home_title-color">Dmytro</span><br> <span
                        id="autoWrite"></span><span class="_mobile">Full-stack developer</span>
                <p>
                <div class="shortDescription">
                    <p>Through my experience in ReactJS, Laravel PHP and WordPress, I have honed my skills in creating web, and
                        database architecture, building front and back-end from scratch to modern web applications based
                        on
                        visually stunning designs that are both functional and intuitive.</p>
                <br />
                    <p>My goal is to deliver excellent solutions that exceed expectations, drive business grow and success.</p>
                </div>
                <a href="mailto:dmytrokovalenko.new@gmail.com" class="btn _solid">Contact</a>
            </div>
            <div class="home__img">
                <div class="home_background"></div>
                <img src="/assets/img/developer.webp" alt="me">
            </div>
        </div>

        <div class="home__social">
            <a href="https://www.linkedin.com/in/dmytrokovalenko-new/" aria-label="linkedin" target="_blank"
               class="social_link home_social-icon">
                <span class="icon ri--linkedin-fill"></span>
            </a>
            <a href="https://github.com/KovalenkoDmytro" aria-label="github" target="_blank"
               class="social_link home_social-icon">
                <span class="icon bi--github"></span>
            </a>
            <a href="https://gitlab.webeeline.com/dkovalenko" aria-label="gitlab" target="_blank"
               class="social_link home_social-icon">
                <span class="icon uim--gitlab"></span>
            </a>
        </div>
    </section>
    <!-- What can I do -->
    <section class="myServices section" id="myServices">
        <h2 class="section-title">What I am great at</h2>

        <div class="myServices__container">
            <div class="myServices__item">
                <div class="item__wrapper">
                    <span class="icon fluent--search-32-regular"></span>
                    <p class="item__title">Web research</p>
                    <p class="item__text">120 projects</p>
                </div>

            </div>
            <div class="myServices__item">
                <div class="item__wrapper">
                    <span class="icon gravity-ui--code"></span>
                    <p class="item__title">Web development</p>
                    <p class="item__text">56 projects</p>
                </div>

            </div>
            <div class="myServices__item">
                <div class="item__wrapper">
                    <span class="icon tabler--seo"></span>
                    <p class="item__title">SEO</p>
                    <p class="item__text">50 projects</p>
                </div>

            </div>

        </div>
        <div class="benefits__container">
            <div class="benefit">
                <p class="benefit__title">5+</p>
                <p class="benefit__text">Years of Experience</p>
            </div>
            <div class="benefit">
                <p class="benefit__title">50+</p>
                <p class="benefit__text">Satisfied clients</p>
            </div>
            <div class="benefit">
                <p class="benefit__title">700+</p>
                <p class="benefit__text">Created Items</p>
            </div>
        </div>

    </section>
    <!-- ABOUT -->
    <section class="about section" id="about">
        <h2 class="section-title">About</h2>

        <div class="about__container">
            <div class="about__img">
                <img class="b-lazy" src="/assets/img/loader.svg" data-src="/assets/img/about.webp" alt="me">
            </div>

            <div class="about__content">
                <div class="about__text">
                    <p>A highly skilled with 5 years of experience, motivated and talented web developer specializing in
                        web commerce and large-scale SaaS projects in the European and Canadian markets. </p>
                    <p>With an out-of-the-box mindset and a strong focus on innovation and technologies, I can create
                        websites and applications that are highly functional, user-friendly, and rank well on Google's
                        search engine results pages (SEO).</p>
                    <p>My experience positions me to understand and exceed customer expectations, and I am
                        detail-oriented with the ability to handle multiple projects with competing deadlines. </p>
                    <p>As a proactive team player, I demonstrate honest communication during collaboration, embrace
                        challenges, I am eager for personal growth, and contribute my expertise to dynamic projects that
                        demand creativity and technical excellence. </p>
                </div>
                <a href="/assets/docs/Dmytro_Kovalenko_Resume.pdf" aria-label="Resume" target="_blank"
                   class="btn _solid">Download Resume</a>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="section skills" id="skills">
        <h2 class="section-title">Skills</h2>
        <div class="skills__wrapper">
            <div class="skill__items">
                <div class="skill__item">
                    <span class="icon skill-icons--javascript"></span>
                    <span class="skills_name">JavaScript</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--typescript"></span>
                    <span class="skills_name">TypeScript</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--react-dark"></span>
                    <span class="skills_name">ReactJS</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--php-dark"></span>
                    <span class="skills_name">PHP</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--nextjs-dark"></span>
                    <span class="skills_name">NextJS</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--laravel-dark"></span>
                    <span class="skills_name">Laravel</span>
                </div>
                <div class="skill__item">
                    <span class="icon devicon--html5"></span>
                    <span class="skills_name">HTML</span>
                </div>
                <div class="skill__item">
                    <span class="icon devicon--css3"></span>
                    <span class="skills_name">CSS3</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--nodejs-dark"></span>
                    <span class="skills_name">NodeJS</span>
                </div>
                <div class="skill__item">
                    <span class="icon vscode-icons--file-type-scss"></span>
                    <span class="skills_name">LESS/SCSS</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--git"></span>
                    <span class="skills_name">GIT</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--mysql-dark"></span>
                    <span class="skills_name">MySQL</span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--jquery"></span>
                    <span class="skills_name">jQuery </span>
                </div>
                <div class="skill__item">
                    <span class="icon skill-icons--wordpress"></span>
                    <span class="skills_name">WordPress</span>
                </div>
                <div class="skill__item">
                    <span class="icon icon-park--seo"></span>
                    <span class="skills_name">SEO</span>
                </div>
            </div>
        </div>
    </section>

    <!-- WORK -->
    <section class="section works" id="works">
        <h2 class="section-title">Featured projects</h2>

        <div class="work__items">
            <div class="work__item">
                <a class="link__title" href="https://belikeagency.ca/" rel=”nofollow” aria-label="belike"
                   title="belike" target="_blank">belikeagency</a>
                <div class="galery">
                    <div class="images">
                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/belike/thumbnail.webp" alt="belike"/>
                    </div>
                    <span class="btn _second" data-gallery="belike">see preview</span>
                </div>
            </div>
            <div class="work__item">
                <a class="link__title" href="https://www.meininger-hotels.com/en/" rel=”nofollow” aria-label="meininger"
                   title="meininger" target="_blank">meininger</a>
                <div class="galery">
                    <div class="images">
                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/meininger/thumbnail.webp" alt="meininger"/>
                    </div>
                    <span class="btn _second" data-gallery="meininger">see preview</span>
                </div>
            </div>
            <div class="work__item">
                <a class="link__title" href="https://www.pakolorente.com/" rel=”nofollow” aria-label="pakolorente"
                   title="pakolorente" target="_blank">pakolorente</a>
                <div class="galery">
                    <div class="images">
                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/pakolorente/thumbnail.webp" alt="pakolorente"/>
                    </div>
                    <span class="btn _second" data-gallery="pakolorente">see preview</span>
                </div>
            </div>
            <div class="work__item">
                <a class="link__title" href="https://pinali.pl/" rel=”nofollow” title="pinali" aria-label="pinali"
                   target="_blank">pinali</a>
                <div class="galery">
                    <div class="images">
                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/pinali/thumbnail.webp" alt="pinali"/>
                    </div>
                    <span class="btn _second" data-gallery="pinali">see preview</span>
                </div>
            </div>
            <div class="work__item">
                <a class="link__title" href="https://www.ezebra.pl/" rel=”nofollow” title="ezebra" aria-label="ezebra"
                   target="_blank">ezebra</a>
                <div class="galery">
                    <div class="images">
                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/ezebra/thumbnail.webp" alt="ezebra"/>
                    </div>
                    <span class="btn _second" data-gallery="ezebra">see preview</span>
                </div>

            </div>
            <div class="work__item">
                <a class="link__title" href="https://telimena.pl/" rel=”nofollow” title="telimena" aria-label="telimena"
                   target="_blank">telimena</a>
                <div class="galery">
                    <div class="images">
                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/telimena/thumbnail.webp" alt="telimena"/>
                    </div>
                    <span class="btn _second" data-gallery="telimena">see preview</span>
                </div>
            </div>

            <div class="work__item">
                <a class="link__title" href="https://eviso.online/" rel=”nofollow” title="eviso" aria-label="eviso"
                   target="_blank">eviso</a>
                <div class="galery">
                    <div class="images">
                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/eviso/thumbnail.webp" alt="eviso"/>
                    </div>
                    <span class="btn _second" data-gallery="eviso">see preview</span>
                </div>
            </div>

            <div class="work__item">
                <a class="link__title" href="https://gunfire.com/" rel=”nofollow” title="gunfire" aria-label="gunfire"
                   target="_blank">gunfire</a>
                <div class="galery">
                    <div class="images">

                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/gunfire/thumbnail.webp" alt="gunfire"/>

                    </div>
                    <span class="btn _second" data-gallery="gunfire">see preview</span>
                </div>
            </div>

            <div class="work__item">
                <a class="link__title" href="https://nizel.pl/" rel=”nofollow” title="nizel" aria-label="nizel"
                   target="_blank">nizel</a>
                <div class="galery">
                    <div class="images">

                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/nizel/thumbnail.webp" alt="nizel"/>

                    </div>
                    <span class="btn _second" data-gallery="nizel">see preview</span>
                </div>
            </div>

            <div class="work__item">
                <a class="link__title" href="https://www.next-estate.de/en/" rel=”nofollow” title="nextEstate"
                   aria-label="nextEstate" target="_blank">nextEstate</a>
                <div class="galery">
                    <div class="images">

                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/nextEstate/thumbnail.webp" alt="nextEstate"/>

                    </div>
                    <span class="btn _second" data-gallery="nextEstate">see preview</span>
                </div>
            </div>

            <div class="work__item">
                <a class="link__title" href="https://www.ultraupgrade.pl/" rel=”nofollow” title="ultraupgrate"
                   aria-label="ultraupgrate" target="_blank">ultraupgrate</a>
                <div class="galery">
                    <div class="images">

                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/ultraupgrate/thumbnail.webp" alt="ultraupgrate"/>

                    </div>
                    <span class="btn _second" data-gallery="ultraupgrate">see preview</span>
                </div>
            </div>
            <div class="work__item">
                <a class="link__title" href="https://welleundpartner.de/" rel=”nofollow” title="welleundpartner"
                   aria-label="welleundpartner" target="_blank">welleundpartner</a>
                <div class="galery">
                    <div class="images">

                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/welleundpartner/thumbnail.webp" alt="welleundpartner"/>

                    </div>
                    <span class="btn _second" data-gallery="welleundpartner">see preview</span>
                </div>
            </div>
            <div class="work__item">
                <a class="link__title" href="https://sollux.pl/" rel=”nofollow” title="sollux" aria-label="sollux"
                   target="_blank">sollux</a>
                <div class="galery">
                    <div class="images">

                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/sollux/thumbnail.webp" alt="sollux"/>

                    </div>
                    <span class="btn _second" data-gallery="sollux">see preview</span>
                </div>
            </div>
            <div class="work__item">
                <a class="link__title" href="https://sklep.comel-it.com/en/" rel=”nofollow” title="comel"
                   aria-label="comel" target="_blank">comel</a>
                <div class="galery">
                    <div class="images">

                        <img class="b-lazy" src="/assets/img/loader.svg"
                             data-src="/assets/img/works/comel/thumbnail.webp" alt="comel"/>

                    </div>
                    <span class="btn _second" data-gallery="comel">see preview</span>
                </div>
            </div>
        </div>
    </section>


</main>

<footer class="footer container">

    <div class="footer__wrapper">
        <div class="wrapper__item">
            <div class="person">
                <div class="person__photo">
                    <img src="assets/img/meFooter.webp" width="150" height="150" alt="dmytro kovalenko">
                </div>
                <div class="person__about">
                    <h1 class="person__name">Dmytro Kovalenko</h1>
                    <p class="person__position">Calgary, AB, Canada</p>
                </div>
            </div>

        </div>
        <div class="wrapper__item _right">
            <p class="item__title"><span>Get in touch</span><span class="icon fluent--arrow-right-16-filled"></span></p>
            <div class="contacts">
                <div class="contacts__item">
                    <p class="contacts__item__title">Email me:</p>
                    <a href="mailto:dmytrokovalenko.new@gmail.com" aria-label="email" class="email">dmytrokovalenko.new@gmail.com</a>
                </div>
                <div class="contacts__item">
                    <p class="contacts__item__title">Social media:</p>
                    <div class="socialMedia">
                        <a href="https://www.instagram.com/dima_and_world/" aria-label="instagram"
                           class="socialMedia__link">
                            <span class="icon lucide--instagram"></span>
                        </a>
                        <a href="https://www.facebook.com/dmytro.kovalenko.new" aria-label="facebook"
                           class="socialMedia__link">
                            <span class="icon ri--facebook-fill"></span>
                        </a>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <p class="copyright">&#169; 2024 copyright all right reserved</p>
</footer>

<script src="assets/js/vendor/PhotoSwipe/photoswipe.umd.min.js"></script>
<script src="assets/js/vendor/PhotoSwipe/photoswipe-lightbox.umd.min.js"></script>
<script src="assets/js/vendor/lazyLoad.min.js"></script>
<script src="assets/js/vendor/scrollreveal.min.js"></script>
<script src="assets/js/vendor/typeWriter.min.js"></script>
<script src="assets/js/vendor/particles.min.js"></script>
<script src="assets/js/vendor/smoothscroll.min.js"></script>
<script src="assets/js/app.min.js"></script>
</body>

</html>



