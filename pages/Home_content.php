<?php
require 'function_defination.php';
$query_home_slider_1 = show_home_slider_1();
$data_home_slider_1 = mysqli_fetch_assoc($query_home_slider_1);

$query_home_slider_2 = show_home_slider_2();
$data_home_slider_2 = mysqli_fetch_assoc($query_home_slider_2);

$query_home_slider_3 = show_home_slider_3();
$data_home_slider_3 = mysqli_fetch_assoc($query_home_slider_3);

// -------------part----2----------home_features

$query_home_features = home__features_two_data();
$data_home_features = mysqli_fetch_assoc($query_home_features);

$query_home_features_data = home__features_two_content_data();

// -------------part----3---------popular event

$query_home_event_status = home_event_status_three_data();
$data_home_event = mysqli_fetch_assoc($query_home_event_status);

$query_home_event_content = home_event_content_three_data();

// -------------part----4----------donate now

$query_home_four_status = home_part_four_data();
$data_home_four_data = mysqli_fetch_assoc($query_home_four_status);


// -------------part----5----------who we are

$query_home_five_status = home_part_five_data();
$data_home_five_data = mysqli_fetch_assoc($query_home_five_status);

// -------------part----6---------sponsor

$query_home_six_sponsor_status = home_part_six_sponsor_data();


// -------------part----7 ----------review

$query_home_seven_review_status = home_part_seven_review_data();




?>
<main>
    <!--slider-area start-->
    <div class="slider-area pos-rel">
        <div class="slider-active">
            <div class="single-slider slider-height pos-rel d-flex align-items-center" style="background-image: url(<?php echo "assets1010/" . $data_home_slider_1['slider_image'] ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="slider__content text-left">
                                <span class="sub-title left-line pl-80 mb-35"><?php echo $data_home_slider_1['small_status']; ?></span>
                                <h1 class="main-title mb-35" data-animation="fadeInUp2" data-delay=".2s"><?php echo $data_home_slider_1['big_title_one']; ?>
                                    <span><?php echo $data_home_slider_1['big_title_two']; ?></span>
                                </h1>
                                <ul class="btn-list">
                                    <li><a class="theme_btn theme_btn_bg" href="about.php" data-animation="fadeInLeft" data-delay=".5s">About Us <i class="fa fa-arrow-right"></i></a>
                                    </li>
                                    <li><a class="theme_btn theme-border-btn" href="event.php" data-animation="fadeInLeft" data-delay=".5s">Our work<i class="fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height pos-rel d-flex align-items-center" style="background-image: url(<?php echo "assets1010/" . $data_home_slider_2['slider_image'] ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="slider__content text-left">
                                <span class="sub-title left-line pl-80 mb-35"><?php echo $data_home_slider_2['small_status']; ?></span>
                                <h1 class="main-title mb-35" data-animation="fadeInUp2" data-delay=".2s"><?php echo $data_home_slider_2['big_title_one']; ?>
                                    <span><?php echo $data_home_slider_2['big_title_two']; ?></span>
                                </h1>
                                <ul class="btn-list">
                                    <li><a class="theme_btn theme_btn_bg" href="about.php" data-animation="fadeInLeft" data-delay=".5s">About Us <i class="fa fa-arrow-right"></i></a>
                                    </li>
                                    <li><a class="theme_btn theme-border-btn" href="event.php" data-animation="fadeInLeft" data-delay=".5s">Our work<i class="fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height pos-rel d-flex align-items-center" style="background-image: url(<?php echo  "assets1010/" . $data_home_slider_3['slider_image'] ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="slider__content text-left">
                                <span class="sub-title left-line pl-80 mb-35"><?php echo $data_home_slider_3['small_status']; ?></span>
                                <h1 class="main-title mb-35" data-animation="fadeInUp2" data-delay=".2s"><?php echo $data_home_slider_3['big_title_one']; ?>
                                    <span><?php echo $data_home_slider_3['big_title_two']; ?></span>
                                </h1>
                                <ul class="btn-list">
                                    <li><a class="theme_btn theme_btn_bg" href="about.php" data-animation="fadeInLeft" data-delay=".5s">About Us <i class="fa fa-arrow-right"></i></a>
                                    </li>
                                    <li><a class="theme_btn theme-border-btn" href="event.php" data-animation="fadeInLeft" data-delay=".5s">Our work<i class="fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!--slider-area end-->
    <!--feature-area start-->
    <section class="feature-area grey-bg pos-rel pt-130 pb-100">
        <div class="round-shape">
            <img src="" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 wow fadeInUp2 animated" data-wow-delay='.1s'>
                    <div class="section-title text-center mb-85">
                        <h6 class="left-line pl-75 pr-75"><?php echo $data_home_features['small_status']; ?></h6>
                        <h2><?php echo $data_home_features['big_title_one']; ?><br>
                            <span><?php echo $data_home_features['big_title_two']; ?></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-between">
                <?php while ($data_home_features = mysqli_fetch_assoc($query_home_features_data)) { ?>
                    <div class="col-xl-2 col-lg-4 col-md-4 custom-col wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="features white-bg pos-rel text-center mb-30">
                            <div class="features__icon mb-20">
                                <i class="<?php echo $data_home_features['logo_name'] ?>"></i>
                            </div>
                            <h6><?php echo $data_home_features['part_title'] ?></h6>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </section>
    <!--feature-area end-->

    <!--project-area start-->
    <section class="project-area grey-bg pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title text-center mb-85 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6 class="left-line pl-75 pr-75"><?php echo $data_home_event['small_status'] ?></h6>
                        <h2><?php echo $data_home_event['big_title_one'] ?><br>
                            <span><?php echo $data_home_event['big_title_two'] ?></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while ($home_event_data = mysqli_fetch_assoc($query_home_event_content)) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="events mb-5 wow fadeInUp2 animated" data-wow-delay=".1s">
                            <a class="events_tag" href="event.php"><?php echo $home_event_data['short_title'] ?></a>
                            <div class="events__img pos-rel">
                                <img class="block-one" src="<?php echo "assets1010/" . $home_event_data['event_image'] ?>" alt="">
                                <div class="events-back" style="background-image:url(<?php echo "assets1010/" . $home_event_data['event_image'] ?>);"></div>
                            </div>
                            <div class="events__content pos-abl">

                                <h5 class="events-title"><a href="event.php"><?php echo $home_event_data['main_title'] ?></a></h5>
                                <a href="event.php" class="more_btn"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!--project-area end-->

    <!--donation-area start-->
    <section class="donation-area pt-125 pb-100" style="background-image:url(assets1010/assets/Image/Home_slider/background.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="donation-wrapper">
                        <div class="section-title white-title text-center mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <h6 class="left-line pl-75 pr-75"><?php echo $data_home_four_data['small_status']; ?></h6>
                            <h2><?php echo $data_home_four_data['big_title_one']; ?><br>
                                <span style="font-size: medium;"><?php echo $data_home_four_data['big_title_two']; ?></span>
                            </h2>
                        </div>
                        <ul class="btn-list text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                            <li><a class="theme_btn theme_btn_bg" href="project.php" data-animation="fadeInLeft" data-delay=".7s">Overview <i class="fa fa-arrow-right"></i></a>
                            </li>
                            <li><a class="theme_btn theme-border-btn" href="contact.php" data-animation="fadeInLeft" data-delay=".7s">donate now <i class="fa fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--donation-area end-->
    <!--about-us-area start-->
    <section class="about-us-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about-img mb-30">
                        <div class="about-img__thumb wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <img src="assets/img/about/account.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about__wrapper pl-85 pt-4">
                        <div class="section-title text-left mb-35 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <h6 class="left-line pl-75"><?php echo $data_home_five_data['status_small']; ?></h6>
                            <h2><?php echo $data_home_five_data['title_big_one']; ?><br>
                                <span><?php echo $data_home_five_data['title_big_two']; ?></span>
                            </h2>
                        </div>
                        <div class="partner-list d-sm-flex align-items-center justify-content-between mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="total-client">
                                <h4><?php echo $data_home_five_data['members_title']; ?></h4>
                            </div>
                            <div class="joint-btn">
                                <a href="contact.php" class="theme_btn theme_btn2 ">join with us <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="funding-list">
                            <div class="crowd-box d-flex align-items-center pb-30 mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="crowd-box__icon">
                                    <i class="flaticon-investment"></i>
                                </div>
                                <div class="crowd-box__text">
                                    <h4><?php echo $data_home_five_data['big_title_one']; ?></h4>
                                    <p><?php echo $data_home_five_data['small_title_one']; ?></p>
                                </div>
                            </div>
                            <div class="crowd-box d-flex align-items-center pb-30 mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="crowd-box__icon">
                                    <i class="flaticon-crowdfunding-1"></i>
                                </div>
                                <div class="crowd-box__text">
                                    <h4><?php echo $data_home_five_data['big_title_two']; ?></h4>
                                    <p><?php echo $data_home_five_data['small_title_two']; ?></p>
                                </div>
                            </div>
                            <a href="about.php" class="theme_btn theme_btn_bg wow fadeInUp2 animated" data-wow-delay='.1s'>More About<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--team-area end-->



    <!--counter-area start-->

    <section class="brand-area grey-bg2 pt-130">
        <div class="container custom-container-02">
            <div class="row brand-active pb-125">

                <?php
                while ($data_home_sponsor = mysqli_fetch_assoc($query_home_six_sponsor_status)) {
                ?>

                    <div class="col-xl-2">
                        <div class="brand-slide text-center wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="brand-img">
                                <a href="<?php

                                            if (isset($data_home_sponsor['sponsor_title'])) {
                                                echo $data_home_sponsor['sponsor_title'];
                                            } else {
                                                echo "#";
                                            }


                                            ?>"><img src="<?php echo "assets1010/" . $data_home_sponsor['sponsor_image']; ?>" height="60" alt=""></a>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>



            </div>
        </div>
    </section>
    <!--counter-area end-->

    <!--testimonial-area start-->
    <section class="testimonial-area theme-bg2 pt-125 pb-130" style="background-image:url(assets/img/bg/04.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title white-title text-center mb-70 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6 class="left-line pl-75 pr-75">Feedback</h6>
                        <h2>35675+ Peoples Say<br>
                            <span>About SMS Sosity </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper">
                <div class="row testimonial-active">



                    <?php
                    while ($data_home_review = mysqli_fetch_assoc($query_home_seven_review_status)) {
                    ?>


                        <div class="col-xl-6">
                            <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="author-img fix pb-20">
                                    <div class="author-avatar f-right">
                                        <img src="<?php echo "assets1010/" . $data_home_review['rv_image'] ?>" style="height: 90px;width: 90px;" alt="User Avatar" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="author-content mb-15">
                                    <h5 class="left-line pl-40"><?php echo $data_home_review['rv_name']; ?>,<span class="desig"><?php echo $data_home_review['rv_position']; ?></span>
                                    </h5>
                                </div>
                                <p class="semi-title mb-15"><?php echo $data_home_review['rv_description']; ?></p>
                                <div class="review-icon">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </div>
                            </div>
                        </div>


                    <?php
                    }
                    ?>



                </div>
            </div>
        </div>
    </section>
    <!--testimonial-area end-->
    <!--brand-area start-->

    <!--brand-area end-->
    <!--blog-area start-->

    <!--blog-area end-->

</main>