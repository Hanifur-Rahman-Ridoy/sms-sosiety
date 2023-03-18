<?php

require 'function_defination.php';

$query_result = view_all_members_info();




?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '3') { ?>
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">User list</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Contact</li>
                            <li class="breadcrumb-item active" aria-current="page">User list</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header no-border">


                        </div>
                    </div>
                </div>
                <?php while ($members_info = mysqli_fetch_assoc($query_result)) { ?>

                    <div class="col-xxl-2 col-xxxl-2 col-md-6 col-lg-2">
                        <div class="box box-body text-center py-30">
                            <?php if ($_SESSION['access_level'] == '1') { ?>
                                <a href="user_profile.php?membersid=<?php echo $members_info['members_id']; ?>">
                                    <img class="avatar avatar-xxl" src="<?php
                                                                        if ($members_info['member_image'] != null) {
                                                                            echo $members_info['member_image'];
                                                                        } else {
                                                                            echo "assets/Image/members_image/avatar-9.png";
                                                                        }

                                                                        ?>" alt="">
                                </a>
                            <?php } else { ?>
                                <a href="#">
                                    <img class="avatar avatar-xxl" src="<?php
                                                                        if ($members_info['member_image'] != null) {
                                                                            echo $members_info['member_image'];
                                                                        } else {
                                                                            echo "assets/Image/members_image/avatar-9.png";
                                                                        }

                                                                        ?>" alt="">
                                </a>
                            <?php } ?>

                            <h5 class="mt-10 mb-1"><a class="hover-primary" href="#"><?php echo $members_info['member_name']; ?></a></h5>

                            <a href="tel:<?php echo $members_info['member_phone']; ?>" class="hover-success"><i class="glyphicon glyphicon-earphone"></i></a>

                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>