<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <title>United International University</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');


body {
    font-family: "Roboto", sans-serif;
    line-height: 1.8;
}

h1,h2,h3,h4,h5,h6 {
    font-weight: 900 !important;
}

a {
    text-decoration: none;
    transition: all 0.4s ease;
    font-weight: 800;
    color: #20212c;
}

img {
    width: 100%;

}

section {
    padding-top: 80px;
    padding-bottom: 80px;
    z-index: 2;
    position: relative;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(255, 128, 0, 0.7), rgba(0, 224, 254, 0.7));
    z-index: -1;
}

.bg-cover {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

.hero-section {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn {
    padding: 14px 22px;
    transition: all 0.3s ease;
}

.btn-main {
    background: linear-gradient(to right,#00e0fe, #1107fe);
    border-radius: 100px;
    border: none;
    font-weight: 600;
    color: #fff;
}

.btn:hover {
    color: #fff;
    transform: translateY(-5px);
}

.video-btn {
    width: 60px;
    height:60px;
    background: linear-gradient(to right,#00e0fe, #1107fe);
    display: inline-flex;
    justify-content: center;
    align-items: center;
    color:#fff;
    border-radius: 100px;
}

.video-btn i {
    font-size: 32px;
}

.navbar {
    box-shadow: 0 12px 20px rgba(0,0,0,0.1);
}

.navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {
    background: -webkit-linear-gradient(#00e0fe, #1107fe);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.section-intro {
    margin-bottom: 40px;
}

.section-intro .divider {
    height: 4px;
    width: 70px;
    background: linear-gradient(to right,#ff9900, #f68b1f);
    margin: 16px auto;
}

.service .service-img {
    position: relative;
}

.service .service-img .icon {
    width: 90px;
    height: 90px;
    background: linear-gradient(to right,#ff9900, #f68b1f);
    color: #fff;
    border-radius: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    bottom: -45px;
    left: 50%;
    transform: translateX(-50%);
}

.service .service-img .icon i {
    font-size: 36px;
}

.feature i {
    background: -webkit-linear-gradient(#00e0fe, #1107fe);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 54px;
}


.review {
    box-shadow: 0 12px 12px rgba(0,0,0,0.1);
}
.review .person {
    display: flex;
    align-items: center;
    border-bottom: 1px solid rgba(0,0,0,0.07);
    padding-bottom: 18px;
}

.review .person img {
    width: 75px;
    height: 75px;
    border-radius: 100px;
}

.review .stars {
    color: orange;
}

form .form-control {
    border-radius: 0;
    background: transparent;
    color: #fff;
    border-color: rgba(255, 255, 255, 0.5);
}

form .form-control:focus {
    color: #fff;
    background: transparent;
    border-color: #fff;
}

form input.form-control {
    height: 54px;
}

form .form-control::placeholder {
    color: #fff;
}

footer {
    background: linear-gradient(to right,#d55e19, #c3952f);
    color: #fff;
}

footer a {
    color: #fff;
}







    </style>

    <style>
/* ----------------- Footer --------------------- */

footer.footer{
    height: 100%;
    background: black;
    position: relative;
}

footer.footer .container{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

footer.footer .container > div{
    flex-grow: 1;
    flex-basis: 0;
    padding: 3rem .9rem;
}

footer.footer .container h2{
    color: var(--white);
}

footer.footer .newsletter .form-element{
    background: white;
    display: inline-block;
}

footer.footer .newsletter .form-element input{
    padding: .5rem .7rem;
    border: none;
    background: transparent;
    color: white;
    font-family: var(--Josefin);
    font-size: 1rem;
    width: 74%;
}

footer.footer .newsletter .form-element span{
    background: var(--sky);
    padding: .5rem .7rem;
    cursor: pointer;
}

footer.footer .instagram div > img{
    display: inline-block;
    width: 25%;
    height: 50%;
    margin: .3rem .4rem;
}

footer.footer .follow div i{
    color: var(--white);
    padding: 0 .4rem;
}

footer.footer .rights{
    justify-content: center;
    font-family: var(--Josefin);
}

footer.footer .rights h4 a{
    color: var(--white);
}

footer.footer .move-up{
    position: absolute;
    right: 6%;
    top: 50%;
}

footer.footer .move-up span{
    color: var(--midnight);
}

footer.footer .move-up span:hover{
    color: var(--white);
    cursor: pointer;
}

/* ---------x------- Footer ----------x---------- */
</style>

<style>
    @font-face {
    font-family: 'et-line';
    src:url('../fonts/et-line.eot');
    src:url('../fonts/et-line.eot?#iefix') format('embedded-opentype'),
        url('../fonts/et-line.woff') format('woff'),
        url('../fonts/et-line.ttf') format('truetype'),
        url('../fonts/et-line.svg#et-line') format('svg');
    font-weight: normal;
    font-style: normal;
}

/* Use the following CSS code if you want to use data attributes for inserting your icons */
[data-icon]:before {
    font-family: 'et-line';
    content: attr(data-icon);
    speak: none;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    display:inline-block;
}

/* Use the following CSS code if you want to have a class per icon */
/*
Instead of a list of all class selectors,
you can use the generic selector below, but it's slower:
[class*="icon-"] {
*/
.icon-mobile, .icon-laptop, .icon-desktop, .icon-tablet, .icon-phone, .icon-document, .icon-documents, .icon-search, .icon-clipboard, .icon-newspaper, .icon-notebook, .icon-book-open, .icon-browser, .icon-calendar, .icon-presentation, .icon-picture, .icon-pictures, .icon-video, .icon-camera, .icon-printer, .icon-toolbox, .icon-briefcase, .icon-wallet, .icon-gift, .icon-bargraph, .icon-grid, .icon-expand, .icon-focus, .icon-edit, .icon-adjustments, .icon-ribbon, .icon-hourglass, .icon-lock, .icon-megaphone, .icon-shield, .icon-trophy, .icon-flag, .icon-map, .icon-puzzle, .icon-basket, .icon-envelope, .icon-streetsign, .icon-telescope, .icon-gears, .icon-key, .icon-paperclip, .icon-attachment, .icon-pricetags, .icon-lightbulb, .icon-layers, .icon-pencil, .icon-tools, .icon-tools-2, .icon-scissors, .icon-paintbrush, .icon-magnifying-glass, .icon-circle-compass, .icon-linegraph, .icon-mic, .icon-strategy, .icon-beaker, .icon-caution, .icon-recycle, .icon-anchor, .icon-profile-male, .icon-profile-female, .icon-bike, .icon-wine, .icon-hotairballoon, .icon-globe, .icon-genius, .icon-map-pin, .icon-dial, .icon-chat, .icon-heart, .icon-cloud, .icon-upload, .icon-download, .icon-target, .icon-hazardous, .icon-piechart, .icon-speedometer, .icon-global, .icon-compass, .icon-lifesaver, .icon-clock, .icon-aperture, .icon-quote, .icon-scope, .icon-alarmclock, .icon-refresh, .icon-happy, .icon-sad, .icon-facebook, .icon-twitter, .icon-googleplus, .icon-rss, .icon-tumblr, .icon-linkedin, .icon-dribbble {
    font-family: 'et-line';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    display:inline-block;
}
.icon-mobile:before {
    content: "\e000";
}
.icon-laptop:before {
    content: "\e001";
}
.icon-desktop:before {
    content: "\e002";
}
.icon-tablet:before {
    content: "\e003";
}
.icon-phone:before {
    content: "\e004";
}
.icon-document:before {
    content: "\e005";
}
.icon-documents:before {
    content: "\e006";
}
.icon-search:before {
    content: "\e007";
}
.icon-clipboard:before {
    content: "\e008";
}
.icon-newspaper:before {
    content: "\e009";
}
.icon-notebook:before {
    content: "\e00a";
}
.icon-book-open:before {
    content: "\e00b";
}
.icon-browser:before {
    content: "\e00c";
}
.icon-calendar:before {
    content: "\e00d";
}
.icon-presentation:before {
    content: "\e00e";
}
.icon-picture:before {
    content: "\e00f";
}
.icon-pictures:before {
    content: "\e010";
}
.icon-video:before {
    content: "\e011";
}
.icon-camera:before {
    content: "\e012";
}
.icon-printer:before {
    content: "\e013";
}
.icon-toolbox:before {
    content: "\e014";
}
.icon-briefcase:before {
    content: "\e015";
}
.icon-wallet:before {
    content: "\e016";
}
.icon-gift:before {
    content: "\e017";
}
.icon-bargraph:before {
    content: "\e018";
}
.icon-grid:before {
    content: "\e019";
}
.icon-expand:before {
    content: "\e01a";
}
.icon-focus:before {
    content: "\e01b";
}
.icon-edit:before {
    content: "\e01c";
}
.icon-adjustments:before {
    content: "\e01d";
}
.icon-ribbon:before {
    content: "\e01e";
}
.icon-hourglass:before {
    content: "\e01f";
}
.icon-lock:before {
    content: "\e020";
}
.icon-megaphone:before {
    content: "\e021";
}
.icon-shield:before {
    content: "\e022";
}
.icon-trophy:before {
    content: "\e023";
}
.icon-flag:before {
    content: "\e024";
}
.icon-map:before {
    content: "\e025";
}
.icon-puzzle:before {
    content: "\e026";
}
.icon-basket:before {
    content: "\e027";
}
.icon-envelope:before {
    content: "\e028";
}
.icon-streetsign:before {
    content: "\e029";
}
.icon-telescope:before {
    content: "\e02a";
}
.icon-gears:before {
    content: "\e02b";
}
.icon-key:before {
    content: "\e02c";
}
.icon-paperclip:before {
    content: "\e02d";
}
.icon-attachment:before {
    content: "\e02e";
}
.icon-pricetags:before {
    content: "\e02f";
}
.icon-lightbulb:before {
    content: "\e030";
}
.icon-layers:before {
    content: "\e031";
}
.icon-pencil:before {
    content: "\e032";
}
.icon-tools:before {
    content: "\e033";
}
.icon-tools-2:before {
    content: "\e034";
}
.icon-scissors:before {
    content: "\e035";
}
.icon-paintbrush:before {
    content: "\e036";
}
.icon-magnifying-glass:before {
    content: "\e037";
}
.icon-circle-compass:before {
    content: "\e038";
}
.icon-linegraph:before {
    content: "\e039";
}
.icon-mic:before {
    content: "\e03a";
}
.icon-strategy:before {
    content: "\e03b";
}
.icon-beaker:before {
    content: "\e03c";
}
.icon-caution:before {
    content: "\e03d";
}
.icon-recycle:before {
    content: "\e03e";
}
.icon-anchor:before {
    content: "\e03f";
}
.icon-profile-male:before {
    content: "\e040";
}
.icon-profile-female:before {
    content: "\e041";
}
.icon-bike:before {
    content: "\e042";
}
.icon-wine:before {
    content: "\e043";
}
.icon-hotairballoon:before {
    content: "\e044";
}
.icon-globe:before {
    content: "\e045";
}
.icon-genius:before {
    content: "\e046";
}
.icon-map-pin:before {
    content: "\e047";
}
.icon-dial:before {
    content: "\e048";
}
.icon-chat:before {
    content: "\e049";
}
.icon-heart:before {
    content: "\e04a";
}
.icon-cloud:before {
    content: "\e04b";
}
.icon-upload:before {
    content: "\e04c";
}
.icon-download:before {
    content: "\e04d";
}
.icon-target:before {
    content: "\e04e";
}
.icon-hazardous:before {
    content: "\e04f";
}
.icon-piechart:before {
    content: "\e050";
}
.icon-speedometer:before {
    content: "\e051";
}
.icon-global:before {
    content: "\e052";
}
.icon-compass:before {
    content: "\e053";
}
.icon-lifesaver:before {
    content: "\e054";
}
.icon-clock:before {
    content: "\e055";
}
.icon-aperture:before {
    content: "\e056";
}
.icon-quote:before {
    content: "\e057";
}
.icon-scope:before {
    content: "\e058";
}
.icon-alarmclock:before {
    content: "\e059";
}
.icon-refresh:before {
    content: "\e05a";
}
.icon-happy:before {
    content: "\e05b";
}
.icon-sad:before {
    content: "\e05c";
}
.icon-facebook:before {
    content: "\e05d";
}
.icon-twitter:before {
    content: "\e05e";
}
.icon-googleplus:before {
    content: "\e05f";
}
.icon-rss:before {
    content: "\e060";
}
.icon-tumblr:before {
    content: "\e061";
}
.icon-linkedin:before {
    content: "\e062";
}
.icon-dribbble:before {
    content: "\e063";
}

</style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!--navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="welcome">Website name and logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Facult Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Faculty Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Student Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!--hero-->
    <section id="home" class="bg-cover hero-section" style="background-image: url(images/cover_1.jpg);">

        <div class="container text-white text-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4" data-aos="zoom-in">Vision of UIU is to become the center of<br>
                        EXCELLENCE IN TEACHING LEARNING AND RESEARCH IN THE SOUTH ASIA REGION </h1>
                    <p class="my-4" data-aos="fade-up">United City, Madani Avenue, Badda, Dhaka-1212</p>
                    <a href="#" data-aos="fade-up" class="btn btn-main">Get started</a>
                </div>
            </div>
        </div>
    </section>

    <!--services-->
    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>Our Services</h1>
                    <div class="divider"></div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered<br>
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="service">
                        <div class="service-img">
                            <img src="images/image_1.jpg" alt="">
                            <div class="icon"><i class="icon-notebook"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Learn Online</h5>
                        <p>Our university provides us with many resources online. From where students can acquire their skills. Coursera has the facility to do various courses using university email. New students are provided with Elms and Ucam after admission, in which they can view different courses. University salary can be paid online.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="service">
                        <div class="service-img">
                            <img src="images/image_2.jpg" alt="">
                            <div class="icon"><i class="icon-profile-male"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Expert Teachers</h5>
                        <p>We have world class teachers who has many publications. Not only that, our university's research is world-class. Those teachers are read top ranked university. We have many better teachers. Those who study very well. That's why our university is a little different from other private Universities.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="service">
                        <div class="service-img">
                            <img src="images/image_3.jpg" alt="">
                            <div class="icon"><i class="icon-map-pin"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Best Classrooms</h5>
                        <p>We have very good quality classrooms. Our teaching is completely digital. Our classrooms have advanced projectors. High quality AC. So that there is no disruption in teaching. A high-quality glass board is made to ensure that writing on the board is not a problem.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--about-->
    <section id="about" class="bg-cover" style="background-image: url(images/cover_1.jpg);">

         <iframe width="520" height="315" src="https://www.youtube.com/embed/LlbljkO9iy8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         <iframe width="520" height="315" src="https://www.youtube.com/embed/QZQcecSL_IE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         <iframe width="520" height="315" src="https://www.youtube.com/embed/Jnhs_-eyTn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         <iframe width="520" height="315" src="https://www.youtube.com/embed/ICwhmiX2L44" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="container text-white text-center">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>Watch our video</h1>
                    <div class="divider"></div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered<br>
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!--features-->
    <section id="features" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>About Us</h1>
                    <div class="divider"></div>
                     <p>United International University is a private university approved by the Government of the Peopleâ€™s Republic of Bangladesh and University Grants Commission (UGC).
                      United International University is established with the generous support and patronage of the United Group, a very successful conglomerate operating in diverse business areas in Bangladesh.
                      <br>
                      <u>Vision:</u> The vision of UIU is to become the center of excellence in teaching, learning and research in the South Asian region.
                      <br>
                      <u>Mission:</u> The mission of UIU is to create excellent human resources with intellectual, creative, technical, moral and practical skills to serve community, industry and region. We do it by developing integrated, interactive, involved and caring relationships among teachers, students, guardians and employers.
                      <br>
                      <br>
                      <u>UIU ranking</u> <br>
                      . THE Impact Ranking 2020 & 2021 and 2022 UIU is in 32nd position in the world on SDG 8 (Decent Work and Economic Growth)
                      <br>
                      . QS Asia University Ranking 2019, 2020, 2021 & 2022, UIU has been ranked among the top 350
                      universities in Asia.
                    </p>

                </div>
            </div>
            <div class="row gx-4 gy-5">
               <iframe width="560" height="360" src="https://www.youtube.com/embed/XcuMfxEZjDI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


            </div>
        </div>
    </section>
     <!--blog-->
    <section id="blog" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1><a href="#">Our Teachers</a></h1>
                    <div class="divider"></div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered<br>
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                    </p>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-md-4" data-aos="fade-up">
                    <img src="images/vc.jpg" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">PROF DR.MD.ABDUL KASHEM MIA</a></h5>
                        <small><a href="#">Vice Chancellor (In-Charge)</a></small>
                        <p>B.Sc. Engg. (EEE, BUET), M.Sc. Engg. (CSE, BUET) M.S. (System Information Science), Tohoku University, Japan Ph.D (Tohoku University, Japan)</p>
                    </div>
                </div>
                 <div class="col-md-4" data-aos="fade-up">
                    <img src="images/hasan.jpg" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">SARWAR, HASAN</a></h5>
                        <small><a href="#">Professor</a></small>
                        <p>Ph.D. Applied Physics, Electronics and Communication Engineering, University of Dhaka.<br>

M.Phil. Applied Physics, Electronics and Communication Engineering,University of Dhaka.<br>

B.Sc. Engg. Computer Science and Engineering,  Bangladesh  University of Engineering and Technology (BUET).</p>
                    </div>
                </div>
                 <div class="col-md-4" data-aos="fade-up">
                    <img src="images/sak.jpg" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">SWAKKHAR SHATABDA</a></h5>
                        <small><a href="#">Professor</a></small>
                        <p>PhD (2010-2014) Institute for Integrated and Intelligent Systems (IIIS) Griffith University. Thesis Title: Local Search Heuristic for Protein Structure Prediction</p>
                    </div>
                </div>
                 <div class="col-md-4" data-aos="fade-up">
                    <img src="images/huda.png" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">DR. MOHAMMAD NURUL HUDA</a></h5>
                        <small><a href="#">Professor</a></small>
                        <p>PhD<br>
                            Title: A study on articulatory feature extraction for robust speech recognition.
                           University: Toyohashi University of Technology, Aichi, Japan Department: Electronics and Information Engineering. Degree Awarded Date: March 2009.</p>
                    </div>
                </div>
                 <div class="col-md-4" data-aos="fade-up">
                    <img src="images/pro-1.jpg" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">RAHMAN, CHOWDHURY MOFIZUR</a></h5>
                        <small><a href="#">Professor & Advisor to Board of Trustees</a></small>
                        <p>Ph.D. from Department of Computer Science, Tokyo Institute of Technology, Japan in 1996 under the support of Monbusho scholarship of Japanese Government.<br>
                      M.Sc. Engg. from Department of Computer Science & Engineering, Bangladesh University of Engineering & Technology in 1992 with a CGPA of 3.75 in a scale of 4.0


                 </p>
                    </div>
                </div>
                 <div class="col-md-4" data-aos="fade-up">
                    <img src="images/abir.jpg" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">MD. ABIR HASSAN</a></h5>
                        <small><a href="#">Lecturer</a></small>
                        <p>M.Sc. in Electrical and Electronic Engineering (EEE) <br>
                   Bangladesh University of Engineering and Technology (BUET)(Ongoing)<br>

B.Sc. in Electrical and Electronic Engineering (EEE)<br>
                    Bangladesh University of Engineering and Technology (BUET)<br>

                    Passing Year: February, 2017</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--counters-->
    <section class="bg-cover" style="background-image: url(images/coveR.jpg);">

        <div class="container text-white text-center">
            <div class="row gy-4" data-aos="fade-up">
                <div class="col-md-3">
                    <i class="icon-trophy h1"></i>
                    <h1 class="mt-3 mb-2">45</h1>
                    <p>COURSE</p>
                </div>
                <div class="col-md-3">
                    <i class="icon-camera h1"></i>
                    <h1 class="mt-3 mb-2">120</h1>
                    <p>STUDENTS</p>
                </div>
                <div class="col-md-3">
                    <i class="icon-happy h1"></i>
                    <h1 class="mt-3 mb-2">30</h1>
                    <p>TEACHERS</p>
                </div>

            </div>
        </div>
    </section>



    <!--blog-->
    <section id="blog" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>TOP NEWS</h1>
                    <h4>Quest for Excellence</h4>
                    <div class="divider"></div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered<br>
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                    </p>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-md-4" data-aos="fade-up">
                    <img src="images/mars.png" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">UIU MARS ROVER</a></h5>
                        <p>UIU's Mars rover – nicknamed "MAVEN" – ranked 1st among Asian countries and 13th among 36 global finalists at the University Rover Challenge (URC) 2022. The event was organised by the Mars Society, a US-based non-profit organisation that advocates and encourages human and robotic exploration on Mars, and also seeks to establish a permanent human presence on the Red Planet. The three-day world final round of the event took place from June 2-4 at the Mars Desert Research Station (MDRS) in southern Utah. Before the final round, the UIU Mars Rover team competed with 98 other universities from all around the world to secure a place in the finals. MAVEN achieved an outstanding score of 90.92 out of 100 to be selected as one of the 36 finalists from 10 countries including the USA, Canada, Australia, India, Poland, Columbia, Egypt, Mexico, and Turkey.In the initial round, the team had to submit a System Acceptance Review (SAR) video to the competition. This video focused on the various capabilities of the rover, and its ability to perform a variety of missions like terrain traversal and delivery, equipment servicing, and autonomous mission. MAVEN also performed a variety of scientific tests where it analysed soil and rock samples to detect the presence of life. The video also went through MAVEN's core electronic and communication systems, as well as its testing and operation capabilities</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <img src="images/debate.jpg" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">UIU DEBATE CLUB</a></h5>
                        <p>UIU Debate Club became Champion in the 6th Gold Bangladesh National Debate Fest 2022 United International University Debate Club (UIUDC) became the Unbeaten National Champion in Martyred Dr. Shamsuzzoha Memorial 6th Gold Bangladesh National Debate Fest 2022 by defeating Jahangirnagar University by 9-0 ballots. The Fest was held in Rajshahi University on 2-3 September 2022. A team of three members from UIUDC participated in this fest. They are M M Tasnim, Dept. of Economics, Abdullah Al Habib Badhon, Dept. of CSE and K. M. Ismail Safa, Dept. of Economics. Among them, Abdullah Al Habib Badhon became ‘Debater of the Tournament’ and ‘Debater of the Final’ at a time. In this fest, 28 private and public Universities including Dhaka University, Jahangirnagar University, Jagannath University, Rajshahi University, Khulna University, Rajshahi College, East West University, Stamford University, Premier University, CUET, RUET participated in this national debate fest. Professor Golam Shabbir Sattar, honorable Vice-Chancellor of Rajshahi University was the Chief Guest and handed over the Champion trophy to the winners. Professor Md. Sultan-Ul-Islam, Pro Vice-Chancellor of Rajshahi University was the Special Guest. Among others, Prof. Dr. Pradip Kumar Panday, Dept. of Mass Communication and Journalism, Prof. Dr. Md. Rabiul Islam, Dept. of Social Work, University of Rajshahi, Tasmia Haque, President of Gold Bangladesh and other prominent persons were also present there.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <img src="images/project.jpg" alt="">
                    <div class="mt-4">

                        <h5 class="mt-1 mb-2"><a href="#">CSE PROJECT SHOWCASE</a></h5>
                        <p>This segment is open for all students of Schools, Colleges, and Universities. <br>Each and
Every team has to present till end of the program. Participants are allowed to showcase
any hardware or software-based project as product or prototype. The project should be
innovative, comprehensive and suitable for solving real life problems and at the same
time increasing productivity and efficiency of any existing method/system.<br>
Rules:
 A team may consist of students from different institutions.<br>
 Each team will showcase their product or prototype and give a presentation
within 5 minutes.<br>
 Each team can have a maximum of 3 to 5 participants.<br>
 Focus Point: Idea, Business logic, Cost Benefits, Scope of Real Life
Implementation.<br>
 Project can be Hardware or Software<br>
 Participants can present their slide along with the Project<br>
 Formal dress up will be appreciated</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact-->
    <section id="contact" class="bg-cover text-white" style="background-image: url(images/cover_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>Get in touch</h1>
                    <div class="divider"></div>
                    <p>United City, Madani Avenue, Badda, Dhaka<br>Dhaka 1212 09604 848848 <br>Admission Office: +8801759039498, +8801759039465, +8801759039451, +8801914001470<br>

Admissions Office Extension: 1301, 1302, 1303, 1304, 1305 <br>+8801759039498, +8801759039465, +8801759039451, +8801914001470
<br>admissions@uiu.ac.bd<br>
Exam Controller’s Office Extension: 1202, 1203, 1204, 1205, 1206<br>
examcon@uiu.ac.bd<br>
Dept. of CSE monir@cse.uiu.ac.bd<br>
Ext: 3100<br>
Dept. of EEE liton@eee.uiu.ac.bd<br>
Ext: 3300<br></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto" data-aos="fade-up">
                    <form action="#" class="row g-4">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-main" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer class="py-4">
        <div class="container">

        </div>
    </footer>



   <footer class="footer">
        <div class="container">

            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Facebook</h2>
                <div class="flex-row">
                    <img src="images/elms.jpg" alt="insta1">
                    <img src="images/ucam.png" alt="insta2">
                    <img src="images/ccc.png" alt="insta3">
                </div>

            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-dribbble'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-github'></i></a>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2023 All rights reserved | made by Team</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>

</html>
