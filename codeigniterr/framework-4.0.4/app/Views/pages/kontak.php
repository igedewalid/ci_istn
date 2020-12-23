<?php

echo view('layout/header');
?>



<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner3.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">KONTAK</h1>
                        <ol class="breadcrumb">
                            <li>Home</li>
                            <li><a href="#">Contact</a></li>
                        </ol>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->


<section id="main-container" class="main-container">
    <div class="container">

        <div class="row text-center">
            <h2 class="section-title">Reaching our Office</h2>
            <h3 class="section-sub-title">Find Our Location</h3>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-md-4">
                <div class="ts-service-box-bg text-center">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-map-marker"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>SKRETARIAT</h4>
                        <p> KAMPUS ISTN JAKARTA SELATAN</p>
                    </div>
                </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>EMAIL</h4>
                        <p>IHC_JAKARTA@YAHOO.CO.ID</p>
                    </div>
                </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-phone-square"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>NARAHUBUNG </h4>
                        <p>087782424612</p>
                    </div>
                </div>
            </div><!-- Col 3 end -->

        </div><!-- 1st row end -->

        <div class="gap-60"></div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.301251342704!2d106.8099063142734!3d-6.35503559540121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee9c6b864061%3A0xda83ce43d90dcde6!2sNational%20Institute%20of%20Science%20And%20Technology!5e0!3m2!1sen!2sid!4v1602496833883!5m2!1sen!2sid" width="1150" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="gap-40"></div>

        <div class="row">

            <div class="col-md-12">

                <h3 class="column-title">SARAN DAN MASUKAN </h3>

                <form id="contact-form" action="contact-form.php" method="post" role="form">
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div><!-- Content row -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->




<?php
echo view('layout/footer');
?>