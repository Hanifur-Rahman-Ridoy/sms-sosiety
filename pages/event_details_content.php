<?php
require 'function_defination.php';


if (isset($_GET['details_id'])) {
    $query_result = view_website_event_single_row($_GET);
    $event_details_info = mysqli_fetch_assoc($query_result);
}






?>
<main>

    <!--page-title-area start-->
    <section style="height: 90px;background-color: #1A1E2E;">
        <div class="right-border-shape">
            <img src="assets/img/shape/02.png" alt="">
        </div>
        <!-- <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="page-title-wrapper text-center">
                        <h1 class="page-title wow fadeInUp2 animated" data-wow-delay='.1s'>Our Events</h1>
                        <div class="breadcrumb">
                            <ul class="breadcrumb-list wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <li><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></li>
                                <li><a class="active" href="#">Our Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!--page-title-area area-->
    <!--blog-area start-->
    <section class="blog-details-area grey-bg pt-30 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blogs__thumb--img white-bg pb-25">
                        <img src="<?php echo "assets1010/" . $event_details_info['event_image']; ?>" alt="">
                    </div>
                    <div class="blogs-details-content-area white-bg">
                        <div class="blogs blogs-03 white-bg wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="blogs__thumb pos-rel mb-35">
                                <p class="blog-tag"><?php echo $event_details_info['short_title']; ?></p>
                            </div>
                            <div class="blogs__content blogs-03__content">
                                <h3 class="mb-20"><a href="blog-details.html"><?php echo $event_details_info['main_title']; ?></a></h3>
                                <div class="blogs__content--meta">
                                    <span><i class="fa fa-location"></i> <?php echo $event_details_info['event_location']; ?></span>

                                </div>
                                <p><?php echo $event_details_info['event_description']; ?></p>
                            </div>
                        </div>



                        <!-- <div class="blog-post-tag wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="row">

                                <div class="col-12">
                                    <div class="post-share-icon text-md-left mb-50">
                                        <span>Share :</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="blog-post-tag wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="row">

                                <div class="col-12">

                                    <div id="share"></div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--blog-area end-->
    <!--cta-area start-->

    <!--cta-area end-->
</main>