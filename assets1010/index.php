<?php

session_start();
require 'function_defination.php';
if (isset($_SESSION['admin_id'])) {
    $admin_id = $_SESSION['admin_id'];
    if ($admin_id != NULL) {
        header('LOCATION: admin_master.php');
    }
}


// if (isset($_POST['btn'])) {

//     $message = admin_login_check_info($_POST);
// }

// ---------------------------------------------
if (isset($_POST['btn'])) {
    // user_info.php
    $user_input = $_POST['user_id'];
    $admin_password = $_POST['admin_password'];

    $user_values = strlen($user_input);
    $password_values = strlen($admin_password);


    if ($user_values != NULL) {

        if ($user_values < 7) {
            if ($password_values < 10) {



                $userAccount = $user_input;
                $fstchar = substr($userAccount, 0, 1);


                if ($fstchar == '#') {

                    $message = admin_login_check_info($_POST);
                } else {
                    $message = "User Id OR Password Invalid";
                }
            } else {
                $message = "Enter Valid Password";
            }
        } else {
            $message = "Enter Valid User Id";
        }
    } else {
        $message = "Provide Valid Information";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from powerbi-admin-template.multipurposethemes.com/bs5/main-dark/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 11:47:20 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="images/favicon.png">

    <title>SMS Login</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="assets/css/vendors_css.css">
    <link rel="stylesheet" href="assets/vendor_components//bootstrap/dist/css/bootstrap.css">


    <!-- Style-->
    <link rel="stylesheet" href="assets/css/skin_color.css">
    <link rel="stylesheet" href="assets/css/style.css">

    </style>

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(images/auth-bg/bg-1.jpg)">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Let's Get Started</h2>
                                <p class="mb-0 text-danger"><?php if (isset($message)) {
                                                                echo $message;
                                                                unset($message);
                                                            } ?> </p>
                            </div>
                            <div class="p-40">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent" name="user_id" placeholder="User ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent" name="admin_password" placeholder="*******" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_1">
                                                <label for="basic_checkbox_1">Remember Me</label>
                                            </div>
                                        </div> -->
                                        <!-- /.col -->

                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-danger mt-10" name="btn"> SIGN IN</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="assets/js/vendors.min.js"></script>
    <script src="assets/js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>
</body>

</html>