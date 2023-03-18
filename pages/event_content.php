<?php
require 'function_defination.php';
$query_result = view_website_event_data();


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
                                <li><a href="index.html">Home <i class="far fa-chevron-right"></i></a></li>
                                <li><a class="active" href="#">Our Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!--page-title-area end-->
    <!--events-area start-->
    <section class="events-area pt-30 pb-45">
        <div class="container">
            <div class="row">


                <?php while ($event_info = mysqli_fetch_assoc($query_result)) { ?>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="events mb-5 wow fadeInUp2 animated" data-wow-delay=".1s">
                            <a class="events_tag" href="event_details.php?details_id=<?php echo $event_info['event_id'] ?>"><?php echo $event_info['short_title'] ?></a>
                            <div class="events__img pos-rel">
                                <img class="block-one" src="<?php echo "assets1010/" . $event_info['event_image'] ?>" alt="">
                                <div class="events-back" style="background-image:url(<?php echo "assets1010/" . $event_info['event_image'] ?>);"></div>
                            </div>
                            <div class="events__content pos-abl">
                                <span><i class="far fa-map-marker-alt"></i> <?php echo $event_info['event_location'] ?></span>
                                <h5 class="events-title"><a href="event_details.php?details_id=<?php echo $event_info['event_id'] ?>"><?php echo $event_info['main_title'] ?></a></h5>
                                <a href="event_details.php?details_id=<?php echo $event_info['event_id'] ?>" class="more_btn"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>



            </div>
        </div>
    </section>
    <!--events-area end-->

    <!--cta-area end-->
</main>