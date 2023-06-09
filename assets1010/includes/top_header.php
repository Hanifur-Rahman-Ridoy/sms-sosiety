<?php

if (isset($_GET['status'])) {

    require 'function_defination.php';
    logout($_GET);
}


?>
<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block mx-10 push-btn text-white" data-toggle="push-menu" role="button">
            <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
        </a>
        <!-- Logo -->
        <a href="admin_master.php" class="logo justify-content-around">
            <!-- logo-->
            <div class="logo-lg">
                <!-- <span class="light-logo"><img src="images/logo-light-text.png" alt="logo"></span> -->
                <span class="dark-logo"><img src="images/sms-logo.png" alt="logo"></span>
            </div>
        </a>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <div class="container">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item d-md-none">
                        <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                            <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                        </a>
                    </li>
                  <li class="btn-group nav-item d-none d-md-inline-block">
                        <a href="https://www.iloveimg.com/crop-image" target="_blank" class="waves-effect waves-light nav-link full-screen" title="Crop Image">
                            <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                        </a>
                    </li>
                    <!--<li class="btn-group nav-item d-none d-md-inline-block">-->
                    <!--    <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">-->
                    <!--        <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>-->
                    <!--    </a>-->
                    <!--</li>-->
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <!-- <li class="btn-group d-lg-inline-flex d-none">
                        <div class="app-menu">
                            <div class="search-bx mx-5">
                                <form action="" method="post">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" name="btn" type="submit"><i data-feather="search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li> -->
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <?php if ($_SESSION['access_level'] == '1') { ?>
                            <a href="admin_master.php" class="waves-effect waves-light dropdown-toggle" title="Home">
                                <i class="icon-Home"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        <?php } else { ?>
                            <a href="#" class="waves-effect waves-light dropdown-toggle" title="Home">
                                <i class="icon-Lock"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        <?php } ?>

                    </li>
                    <li class="dropdown notifications-menu">
                        <?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '3') { ?>
                            <a href="add_member.php" class="waves-effect waves-light dropdown-toggle" title="Add Member Information">
                                <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        <?php } else { ?>
                            <a href="#" class="waves-effect waves-light dropdown-toggle" title="Add Member Information">
                                <i class="icon-Lock"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        <?php } ?>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="Menu">
                            <i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="user_profile.php"><i class="ti-user text-muted me-2"></i> Profile</a>
                                <?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '3') { ?>
                                    <a class="dropdown-item" href="all_members.php"><i class="ti-wallet text-muted me-2"></i> All Members</a>
                                <?php } else { ?>
                                    <a class="dropdown-item text-mute" href="#"><i class="ti-lock text-muted me-2"></i> All Members</a>
                                <?php } ?>
                                <?php if ($_SESSION['access_level'] == '1') { ?>
                                    <a class="dropdown-item" href="admin_user.php"><i class="ti-settings text-muted me-2"></i> Admins</a>
                                <?php } else { ?>
                                    <a class="dropdown-item text-mute" href="#"><i class="ti-lock text-mute me-2"></i> Admins</a>
                                <?php } ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?status=logout"><i class="ti-lock text-muted me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>


                    <!-- Control Sidebar Toggle Button -->
                    <!-- <li>
                        <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
                            <i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
                        </a>
                    </li> -->

                </ul>
            </div>
        </div>
    </nav>
</header>