<?php


function all_data_org()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_contact WHERE web_contact_id =1 ";

    if (mysqli_query($con, $sql)) {
        $adtional_information_data = mysqli_query($con, $sql);
        return $adtional_information_data;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


$adtional_information_data = all_data_org();
$adtional_information = mysqli_fetch_assoc($adtional_information_data);




?>
<header id="top-menu" class="transparent-head">
    <div class="header-top-area heding-bg pt-15 pb-15 d-none d-lg-block">
        <div class="container custom-container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="top-cta">
                        <span class="media-link"><i class="fa fa-envelope"></i> <?php echo $adtional_information['mail_address']; ?></span>
                        <span class="media-link"><i class="fa fa-map-marker-alt"></i> <?php echo $adtional_information['location_address']; ?></span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-flex justify-content-end">

                    <div class="top-right-nav">
                        <ul>
                            <?php if ($adtional_information['facebook_link'] != NULL) { ?>
                                <li> <a href="<?php echo $adtional_information['facebook_link']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <?php  } ?>
                            <?php if ($adtional_information['twitter_link'] != NULL) { ?>
                                <li><a href="<?php echo $adtional_information['twitter_link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <?php  } ?>
                            <?php if ($adtional_information['youtube_link'] != NULL) { ?>
                                <li><a href="<?php echo $adtional_information['youtube_link']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <?php  } ?>
                            <?php if ($adtional_information['instagram_link'] != NULL) { ?>
                                <li> <a href="<?php echo $adtional_information['instagram_link']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <?php  } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area">
        <div class="container custom-container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo">
                        <a class="logo-img" href="index.php"><img src="assets/img/logo/header_logo_one.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9 d-none d-lg-block text-lg-center text-xl-right">
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="index.php">Home </a>

                                </li>


                                <li><a href="about.php">About</a></li>
                                <li><a href="event.php">Events</a></li>
                                <!-- <li><a href="#">Events <i class="far fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="events.html">Events Grid</a></li>
                                            <li><a href="events-details.html">Events Details</a></li>
                                        </ul>
                                    </li> -->
                                <li><a href="project.php">gallery</i></a>
                                    <!-- <ul class="submenu">
                                            <li><a href="project-01.html">Project One</a></li>
                                            <li><a href="project-02.html">Project Two</a></li>
                                            <li><a href="project-03.html">Project Three</a></li>
                                            <li><a href="project-gallery.html">Project Gallery</a></li>
                                            <li><a href="project-image.html">Project Image</a></li>
                                            <li><a href="project-video.html">Project Video</a></li>
                                        </ul> -->
                                </li>
                                <li><a href="team.php">Our Team</a></li>
                                <!-- <li><a href="#">Pages <i class="far fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="history.php">History</a></li>
                                            <li><a href="career.php">Career</a></li>
                                            <li><a href="team.php">Team</a></li>
                                            <li><a href="faq.php">FAQ</a></li>
                                        </ul>
                                    </li> -->
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#acount-search" class="text-warning"><i class="ti-server text-primary hover-lighter"></i> MTD</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-1 col-md-6 col-6 text-right">
                    <div class="hamburger-menu d-lg-block d-xl-none">
                        <a href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>