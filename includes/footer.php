<?php



if (isset($_POST['btn_next'])) {
    // user_info.php
    $user_input = $_POST['user_account_no'];

    $user_values = strlen($user_input);


    if ($user_values != NULL) {

        if ($user_values < 7) {

            $userAccount = $user_input;
            $fstchar = substr($userAccount, 0, 1);


            if ($fstchar == '#') {

                function account_no_match($data)
                {
                    require 'db_connect.php';

                    $sql = "SELECT * FROM tbl_members_info WHERE member_account_no ='$data[user_account_no]' AND deletion_status =1 ";

                    if (mysqli_query($con, $sql)) {

                        $row = mysqli_query($con, $sql);
                        $row_data = mysqli_fetch_assoc($row);

                        // $db_row_deletion_status = $row_data['deletion_status'];

                        $db_row = $row_data['member_account_no'];
                        // $user_input_row = $data['user_account_no'];
                        if (isset($db_row)) {

                            $_SESSION['ac_no'] = $row_data['member_account_no'];
                            $_SESSION['deletion_status'] = $row_data['deletion_status'];
                            echo "<script>
                                window.location.href='user_info.php';
                                        </script>";
                        } else {
                            $message = "Non Registered Member";
                            return $message;
                        }
                    }
                }

                $result = account_no_match($_POST);
            } else {
                $result = "You Are Not Valid Member";
            }
        } else {
            $result = "Enter Valid Account No";
        }
    } else {
        $result = "Enter Account No";
    }
}








?>


<!--cta-area start-->

<section class="cta-area theme-bg pt-55 pb-25">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-8">
                <div class="cta-wrapper wow fadeInUp2  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                    <div class="section-title mb-30">
                        <h2>আমাদের সাথে যোগ দিতে চান ?</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="cta-wrapper wow fadeInUp2  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                    <div class="cta-btn text-md-right">
                        <a class="theme_btn theme_btn_bg" href="contact.php">যোগাযোগ করুন<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--cta-area end-->

<footer class="footer-area heding-bg pos-rel pt-100" style="background-image:url(assets/img/bg/02.png)">
    <div class="container">
        <div class="footer-bottom-area">
            <div class="row mb-30">
                <div class="col-xl-2 col-lg-3 col-md-6  wow fadeInUp2 animated" data-wow-delay='.1s'>

                </div>

                <div class="col-xl-4 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.5s'>
                    <div class="footer__widget mb-30">
                        <h5 class="semi-title mb-25">Quick Links</h5>
                        <ul class="fot-list">
                            <li><a href="about.php">About</a></li>
                            <li><a href="event.php">Events</a></li>
                            <li><a href="project.php">gallery</i></a>
                            <li><a href="team.php">Our Team</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.7s'>
                    <div class="footer__widget fot_abot mb-30 pl-85">
                        <h5 class="semi-title mb-25">Member Transaction Details</h5>
                        <p class="mb-30">আপনি যদি আমাদের সংস্থার একজন মেম্বার হয়ে থাকেন তাহলে আপনি, Member Transaction Details (MTD) - এর মাধ্যমে আপনার ট্রানজেকশনের সকল ইনফরমেশন দেখতে পারবেন</p>
                        <div class="subscribe-content foter-subscribe" id="acount-search">
                            <form class="subscribe-form" action="" method="post">
                                <input class="form-control" type="text" name="user_account_no" placeholder="Account No">
                                <button type="submit" name="btn_next">Next</button>
                            </form>

                            <p class="mt-2 text-warning"><i class="far fa-arrow-alt-from-left text-danger"> </i>
                                <?php if (isset($result)) {
                                    echo "<script>
                                     window.location.href='#acount-search';
                                             </script>";
                                    echo $result;
                                    unset($result);
                                } ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--scroll-target-btn-->
        <a href="#top-menu" class="scroll-target"><i class="fa fa-arrow-up"></i></a>
        <!--scroll-target-btn-->
        <div class="copy-right-area pt-30">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="footer-log mb-30">
                        <a href="index.html" class="footer-logo mb-30"><img src="assets/img/logo/header_logo_one.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="copyright mb-30 text-md-right">
                        <p>© 2022 <a href="https://hanifur-rahman-ridoy.github.io/My-Portfolio/?fbclid=IwAR3r2GXzUPupcNbf8wpMHT9KFeW4lrVuGj63F7CxuiY5DzKpcDYYbnd7L-M"><span style="color:#ff3c00;">HR-Ridoy</span></a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>