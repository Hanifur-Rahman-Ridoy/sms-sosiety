<?php
require 'function_defination.php';

$query_result = view_all_members_information();
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
                        <h1 class="page-title wow fadeInUp2 animated" data-wow-delay='.1s'>Team Member</h1>
                        <div class="breadcrumb">
                            <ul class="breadcrumb-list wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <li><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></li>
                                <li><a class="active" href="#">Team Member</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!--page-title-area area-->
    <!--team-area start-->
    <section class="team-area pt-30 pb-100">
        <div class="container">
            <div class="row">

                <?php while ($members_info = mysqli_fetch_assoc($query_result)) { ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="team text-center mb-30">
                            <div class="team__thumb mb-25 pos-rel">
                                <div class="team-avatar">
                                    <img src="<?php echo "assets1010/" . $members_info['member_image']; ?>" style="border-radius: 50%; width: 90px;height: 90px;" alt="Member Image">
                                </div>

                            </div>
                            <div class="team__content">
                                <p><?php echo $members_info['member_position']; ?></p>
                                <h5><a href="#"><?php echo $members_info['member_name']; ?></a></h5>
                                <a class="more_btn" href="#"><i class="fa fa-plus"></i></a>
                                <ul class="team__social mt-10">

                                    <?php if ($members_info['facebook_link'] != null) { ?>
                                        <li>
                                            <a href="<?php echo $members_info['facebook_link']; ?><">
                                                <i class="fa fa-facebook-f"></i>
                                                <i class="fa fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    <?php }
                                    if ($members_info['twitter_link'] != null) { ?>
                                        <li>
                                            <a href="<?php echo $members_info['twitter_link']; ?>">
                                                <i class="fa fa-twitter"></i>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    <?php }
                                    if ($members_info['instagram_link'] != null) { ?>
                                        <li>
                                            <a href="<?php echo $members_info['instagram_link']; ?>">
                                                <i class="fa fa-instagram"></i>
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                    </div>


                <?php } ?>




            </div>
        </div>
    </section>
    <!--team-area end-->
    <!--project-area start-->

    <!--cta-area end-->
</main>