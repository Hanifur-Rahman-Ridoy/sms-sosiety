<?php
require 'function_defination.php';


$query_show_result = view_web_contact_data_website();
$contact_data = mysqli_fetch_assoc($query_show_result);



?>
<main>

    <!--page-title-area start-->
    <section style="height: 90px;background-color: #1A1E2E;">
        <div class="right-border-shape">
            <img src="assets/img/shape/02.png" alt="">
        </div>
        <!-- <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="page-title-wrapper text-center">
                        <h1 class="page-title wow fadeInUp2 animated" data-wow-delay='.1s'>Contact Us</h1>
                        <div class="breadcrumb">
                            <ul class="breadcrumb-list wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <li><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></li>
                                <li><a class="active" href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!--page-title-area area-->
    <!--contact-box-area start-->
    <section class="contact-box-area pb-80 pt-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title text-center mb-85 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6 class="left-line pl-75 pr-75"><?php echo $contact_data['page_small_status'] ?></h6>
                        <h2><?php echo $contact_data['page_big_status_partOne'] ?> <br>
                            <span><?php echo $contact_data['page_big_status_partTwo'] ?></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="contact-box d-lg-flex mb-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="contact-box__icon">
                            <a href="<?php echo $contact_data['location_map_link'] ?>"><i class="fa fa-map-marker-alt"></i></a>
                        </div>
                        <div class="contact-box__content">
                            <h4><?php echo $contact_data['location_title'] ?></h4>
                            <h5><?php echo $contact_data['location_address'] ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="contact-box d-lg-flex mb-50 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="contact-box__icon">
                            <a href="mailto:<?php echo $contact_data['mail_address'] ?>"> <i class="fal fa-envelope"></i></a>
                        </div>
                        <div class="contact-box__content">
                            <h4><?php echo $contact_data['mail_title'] ?></h4>
                            <a href="mailto:<?php echo $contact_data['mail_address'] ?>">
                                <h5><?php echo $contact_data['mail_address'] ?></h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="contact-box d-lg-flex mb-50 wow fadeInUp2 animated" data-wow-delay='.5s'>
                        <div class="contact-box__icon">
                            <a href="tel:<?php echo $contact_data['phone_number'] ?>"><i class="fal fa-phone"></i></a>
                        </div>
                        <div class="contact-box__content">
                            <h4><?php echo $contact_data['phone_title'] ?></h4>
                            <a href="tel:<?php echo $contact_data['phone_number'] ?>">
                                <h5><?php echo $contact_data['phone_number'] ?></h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-box-area end-->
    <!--contact-area start-->
    <!-- <section class="contact-details-area pb-120 wow fadeInUp2 animated" data-wow-delay='.3s'>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="post-form-area contact-form pt-125">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box">
                                    <h5>Your Full Name</h5>
                                    <div class="input-text mb-35">
                                        <input type="text" class="form-control" placeholder="Full Name Here">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box mb-35">
                                    <h5>Your Email Address</h5>
                                    <div class="input-text input-mail">
                                        <input type="text" class="form-control" placeholder="Email Here">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box mb-35">
                                    <h5>Phone Number</h5>
                                    <div class="input-text input-phone">
                                        <input type="text" class="form-control" placeholder="Write Your Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-box mb-35">
                                    <h5>Subject</h5>
                                    <div class="input-text input-sub">
                                        <input type="text" class="form-control" placeholder="I Would LIke To">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="input-box mb-35">
                                    <h5>Leave A Message</h5>
                                    <div class="input-text input-message">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6">
                                <div class="msg-btn text-md-center">
                                    <a class="theme_btn theme_btn_bg" href="#">send message <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--contact-area end-->
    <!--map-area start-->

    <!--map-area end-->
    <!--cta-area start-->

    <!--cta-area end-->
</main>