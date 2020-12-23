<?php

echo view('layout/header');
?>


<div id="main-slide" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators visible-lg visible-md">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <!--/ Indicators end-->

    <!-- Carousel inner -->
    <div class="carousel-inner">
        <div class="item active" style="background-image:url(images/home/logoihc1.png)">
            <div class="slider-content">
                <div class="col-md-12 text-center">
                    <h5 class="slide-title animated4"><b>ISTN HOCKEY CLUB</b></h5>
                    <h2 class="slide-sub-title animated5">SINCE 1982</h2>
                    <p>
                        <a href="services.html" class="slider btn btn-primary">Wanna play?</a>
                        <a href="kontak.php" class="slider btn btn-primary border">Wanna join?</a>
                    </p>
                </div>
            </div>
        </div>
        <!--/ Carousel item 1 end -->

        <div class="item" style="background-image:url(images/home/IHR2.jpeg)">
            <div class="slider-content text-left">
                <div class="col-md-12">
                    <h3 class="slide-title animated3"><b>INVITASI HOCKEY RUANGAN NASIONAL</b></h3>
                    <h2 class="slide-sub-title animated3">ISTN JAKARTA</h2>
                    <p class="animated3">
                        <a href="proker.php" class="slider btn btn-primary border">proker</a>
                    </p>
                </div>
            </div>
        </div>
        <!--/ Carousel item 2 end -->

        <div class="item" style="background-image:url(images/home/istn2.jpg)">
            <div class="slider-content text-right">
                <div class="col-md-12">
                    <h3 class="slide-title animated6"><b>ONE OF THE BIGGEST HOCKEY TEAM</b></h3>
                    <h2 class="slide-sub-title animated7">IN INDONESIA</h2>
                    <p>
                        <a href="prestasi.php" class="slider btn btn-primary">prestasi</a>
                        <a href="club.php" class="slider btn btn-primary border">HISTORY</a>

                    </p>
                </div>
            </div>
        </div>
        <!--/ Carousel item 3 end -->

    </div><!-- Carousel inner end-->

    <!-- Controllers -->
    <a class="left carousel-control" href="#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
    </a>
</div>
<!--/ Carousel end -->

<section id="facts" class="facts-area dark-bg ">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-10">
                    <div class="call-to-action-text">
                        <h3 class="action-title">"DONT PRACTICE UNTIL YOU GET IT RIGHT, PRACTICE
                            UNTIL YOU CAN'T GET IT WRONG"
                        </h3>
                    </div>
                </div><!-- Col end -->

            </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="ts-intro">
                    <h2 class="into-title"><b>About Us</b></h2>
                    <h3 class="into-sub-title">WELCOME TO OUR SITE</h3>
                    <p>Selamat datang di website istn hockey club, website ini bertujuan untuk menjadi media informasi dan juga sebagai sumber informasi mengenai istn hockey club.
                        istn hockey club mempunyai sejarah yang panjang, organisasi ini pertama kali didirikan pada tahun 1982 oleh mahasiswa di angkatan tsb dan alhamdulillah masih berdiri hingga sekarang.

                        dalam sejarah panjang tersebut istn hockey sudah banyak melahirkan orang-orang yang berpengaruh di perhokian DKI Jakarta maupun di indonesia mulai dari atlit, ataupun wasit yang pernah mewakili indonesia di kancah internasional.<br>
                    </p>
                </div><!-- Intro box end -->

                <div class="gap-20"></div>




            </div><!-- Col end -->

            <div class="col-md-6 col-xs-12">
                <h3 class="into-sub-title">JADWAL LATIAN</h3>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">SENIN</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>FISIK, TEKNIK, GAME </p>
                            </div>
                        </div>
                    </div>
                    <!--/ Panel 1 end-->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo"> RABU</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> TEKNIK , GAME</p>
                            </div>
                        </div>
                    </div>
                    <!--/ Panel 2 end-->


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                                    SABTU</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>FISIK, TEKNIK, GAME </p>
                            </div>
                        </div>
                    </div>
                    <!--/ Panel 3 end-->

                </div>
                <!--/ Accordion end -->

            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
    <div class="container">
        <div class="row">
            <div class="facts-wrapper">
                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">

                    </div>

                </div><!-- Col end -->

            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Facts end -->

<section id="ts-service-area" class="ts-service-area">
    <div class="container">
        <div class="row text-center">
            <h3 class="section-sub-title">kegiatan</h3>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-md-4">
                <div class="ts-service-box">
                    <div class="ts-service-box-img pull-left">

                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">LATIHAN</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 1 end -->

                <div class="ts-service-box">
                    <div class="ts-service-box-img pull-left">

                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">SPARING</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 2 end -->



            </div><!-- Col end -->

            <div class="col-md-4 text-center">
                <img class="service-center-img img-responsive" src="kiw.jpeg" alt="" />
            </div><!-- Col end -->

            <div class="col-md-4">
                <div class="ts-service-box">
                    <div class="ts-service-box-img pull-left">

                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">PROGRAM KERJA</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 4 end -->

                <div class="ts-service-box">
                    <div class="ts-service-box-img pull-left">

                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">TOURNAMENT</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 5 end -->

            </div>
        </div><!-- Service 6 end -->
    </div><!-- Col end -->
    </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <h3 class="section-sub-title">PROGRAM KERJA</h3>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="isotope-nav" data-isotope-nav="isotope">
                <ul>
                    <li><a href="#" class="active" data-filter="*">PROGRAM KERJA</a></li>
                    <li><a href="#" data-filter=".commercial">LIGA HOKI</a></li>
                    <li><a href="#" data-filter=".education">DIKLAT</a></li>
                    <li><a href="#" data-filter=".government">BUKBER</a></li>
                    <li><a href="#" data-filter=".infrastructure">ULANG TAHUN</a></li>
                    <li><a href="#" data-filter=".residential">MUBES</a></li>
                    <li><a href="#" data-filter=".healthcare">IHR</a></li>
                </ul>
            </div><!-- Isotope filter end -->


            <div id="isotope" class="isotope">
                <div class="col-md-4 col-sm-6 col-xs-12 commercial isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="images/projects/ligahoki.jpeg">
                            <img class="img-responsive" src="images/projects/ligahoki.jpeg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single.html">LIGA HOKI</a>
                                </h3>
                                <p class="project-cat">Commercial, Interiors</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 1 end -->

                <div class="col-md-4 col-sm-6 col-xs-12 healthcare isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="images/projects/diklat.jpeg">
                            <img class="img-responsive" src="images/projects/diklat.jpeg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single.html">DIKLAT</a>
                                </h3>
                                <p class="project-cat">Healthcare</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 2 end -->

                <div class="col-md-4 col-sm-6 col-xs-12 government isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="images/projects/project3.jpg">
                            <img class="img-responsive" src="images/projects/project3.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single.html">BUKBER</a>
                                </h3>
                                <p class="project-cat">Government</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 3 end -->

                <div class="col-md-4 col-sm-6 col-xs-12 education isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="images/projects/ultah.jpeg">
                            <img class="img-responsive" src="images/projects/ultah.jpeg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single.html">ULANG TAHUN</a>
                                </h3>
                                <p class="project-cat">Infrastructure</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 4 end -->

                <div class="col-md-4 col-sm-6 col-xs-12 infrastructure isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="images/projects/project5.jpg">
                            <img class="img-responsive" src="images/projects/project5.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single.html">MUSYAWARAH BESAR</a>
                                </h3>
                                <p class="project-cat">Infrastructure</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 5 end -->

                <div class="col-md-4 col-sm-6 col-xs-12 residential isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="images/projects/ihr19.jpeg">
                            <img class="img-responsive" src="images/projects/ihr19.jpeg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single.html">INVITASI HOKI RUANGAN </a>
                                </h3>
                                <p class="project-cat">Residential</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 6 end -->
            </div><!-- Isotop end -->

            <div class="general-btn text-center">
                <a class="btn btn-primary" href="proker.php">LIHAT SEMUA PROKER</a>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->


<section class="subscribe no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="subscribe-call-to-acton">
                    <h3></h3>
                    <h4></h4>
                </div>
            </div><!-- Col end -->

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="ts-newsletter">
                    <div class="newsletter-introtext">
                        <h4></h4>
                        <p></p>
                    </div>
                </div><!-- Newsletter end -->
            </div><!-- Col end -->

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ News end -->

<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <h3 class="section-sub-title">PRESTASI</h3>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img class="img-responsive" src="images/prestasi/ihritb.jpeg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html">IHR ITB </a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> July 20, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 1st post col end -->

            <div class="col-md-4 col-xs-12">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img class="img-responsive" src="images/prestasi/fungamesup.jpeg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html">FUN GAMES UP </a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> June 17, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 2nd post col end -->

            <div class="col-md-4 col-xs-12">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img class="img-responsive" src="images/prestasi/fungamestei.jpeg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html">FUN GAMES STEI</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> Aug 13, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 3rd post col end -->
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center">
            <a class="btn btn-primary" href="prestasi.php">See All Posts</a>
        </div>

    </div>
    <!--/ Container end -->
</section>
<!--/ News end -->



<?php
echo view('layout/footer');
?>