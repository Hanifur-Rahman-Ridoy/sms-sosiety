<?php
require 'function_defination.php';

$query_result = view_all_gallery_images_website();



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
                        <h1 class="page-title wow fadeInUp2 animated" data-wow-delay='.1s'>Our gallery</h1>
                        <div class="breadcrumb">
                            <ul class="breadcrumb-list wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <li><a href="index.html">Home <i class="far fa-chevron-right"></i></a></li>
                                <li><a class="active" href="#">Our gallery</a></li>
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

                <?php while ($image_row = mysqli_fetch_assoc($query_result)) { ?>

                     <div class="col-xl-3 col-lg-3 col-md-5">
                        <img src="<?php echo "assets1010/" . $image_row['gallery_image']; ?>" style="height: 190px;width: 100%;" class="img-responsive mb-2">
                    </div>

                <?php } ?>



            </div>
        </div>
    </section>

</main>