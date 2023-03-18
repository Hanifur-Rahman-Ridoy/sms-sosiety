<?php
require 'function_defination.php';


$query_result = show_about_status_part_one_data_website();
$part_one_data = mysqli_fetch_assoc($query_result);
// --------------------------------------------------------------
$query_result_two = show_about_status_part_two_data_website();
$part_two_data = mysqli_fetch_assoc($query_result_two);
// --------------------------------------------------------------
$query_result_three = show_about_status_part_three_data_website();
$part_three_data = mysqli_fetch_assoc($query_result_three);
// --------------------------------------------------------------
$query_result_faq = show_all_faq_rules();





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
                        <h1 class="page-title wow fadeInUp2 animated" data-wow-delay='.1s'>About Us</h1>
                        <div class="breadcrumb">
                            <ul class="breadcrumb-list wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <li><a href="index.html">Home <i class="far fa-chevron-right"></i></a></li>
                                <li><a class="active" href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!--page-title-area area-->



    <!--about-us-area start-->
    <section class="about-us-area-03 pt-30 pb-85">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="about__wrapper about__wrap__03 pl-65 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="section-title text-left mb-35">
                            <h6 class="left-line pl-75"><?php echo $part_one_data['small_status'] ?></h6>
                            <h2><?php echo $part_one_data['title_part_one'] ?><br>
                                <span><?php echo $part_one_data['title_part_two'] ?></span>
                            </h2>
                        </div>
                        <div class="partner-list d-sm-flex align-items-center mb-30">
                            <div class="total-client">
                                <h4><?php echo $part_one_data['members_status'] ?></h4>
                            </div>
                            <div class="joint-btn ml-15">
                                <a href="contact.php" class="theme_btn theme_btn2 ">যোগাযোগ করুন<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <p><?php echo $part_one_data['about_description'] ?></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-area end-->


    <section class="our-goal-area pos-rel wow fadeInUp2 animated" data-wow-delay='.1s'>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo $part_two_data['btn_name'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php echo $part_three_data['btn_name'] ?></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Company History</a>
                        </li> -->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row goal-content mt-3 pb-100 wow fadeInUp animated" data-wow-delay='.3s'>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="goal-wrapper pr-120">
                                        <div class="section-title text-left mb-35">
                                            <h2><?php echo $part_two_data['title_part_one'] ?><br>
                                                <span><?php echo $part_two_data['title_part_two'] ?></span>
                                            </h2>
                                            <p><?php echo $part_two_data['about_description'] ?></p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row goal-content mt-3 pb-100">
                                <div class="col-12">
                                    <div class="goal-wrapper pr-120">
                                        <div class="section-title text-left mb-35">
                                            <h2><?php echo $part_three_data['title_part_one'] ?><br>
                                                <span><?php echo $part_three_data['title_part_two'] ?></span>
                                            </h2>
                                            <p><?php echo $part_three_data['about_description'] ?></p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--feature-project-area start-->

    <!--feature-project-area end-->

    <section class="faq-area-02 grey-bg pt-30 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faq-content mb-30">
                        <div class="section-title text-left mb-35">
                            <h6 class="pl-75">FAQ</h6>


                        </div>
                        <div id="accordion">

                            <?php $serial_number = 0;
                            while ($faq_rules_info = mysqli_fetch_assoc($query_result_faq)) { ?>

                                <div class="card card-bg card-02 mb-15 wow fadeInUp2 animated" data-wow-delay='.1s' style="background-color: #1A1E2E;">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link text-info" data-toggle="collapse" data-target="#<?php echo $faq_rules_info['random_text_code'] ?>" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="text-warning bold"><?php echo (++$serial_number) . "."; ?></span> <?php echo $faq_rules_info['faq_title'] ?>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="<?php echo $faq_rules_info['random_text_code'] ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p><?php echo $faq_rules_info['faq_details'] ?></p>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>








                        </div>
                    </div>
                </div>






            </div>
        </div>
    </section>

    <!--counter-area start-->


</main>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function() {
        $(".search").keyup(function() {
            var searchTerm = $(".search").val();
            var listItem = $(".results tbody").children("tr");
            var searchSplit = searchTerm.replace(/ /g, "'):containsi('");

            $.extend($.expr[":"], {
                containsi: function(elem, i, match, array) {
                    return (
                        (elem.textContent || elem.innerText || "")
                        .toLowerCase()
                        .indexOf((match[3] || "").toLowerCase()) >= 0
                    );
                }
            });


            $(".results tbody tr")
                .not(":containsi('" + searchSplit + "')")
                .each(function(e) {
                    $(this).attr("visible", "false");
                });

            $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
                $(this).attr("visible", "true");
            });

            var jobCount = $('.results tbody tr[visible="true"]').length;
            $(".counter").text(jobCount + " item");

            if (jobCount == "0") {
                $(".no-result").show();
            } else {
                $(".no-result").hide();
            }
        });
    });
</script>