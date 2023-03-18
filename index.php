<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.devsnews.com/template/fande/fande/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 20:22:00 GMT -->

<head>
    <meta name="google-site-verification" content="KLNSy4Pk9Em3EHCzqCN-LLTWw9TNoKjWKG6mrDHPH2k" />
    <meta name="msvalidate.01" content="3847BCAEE86B1246D7098C3C93735D0C" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="assets1010/images/favicon.png">
    <title>


        <?php

        if (isset($pages)) {

            if ($pages == 'about_page') {
                echo "About page";
            } elseif ($pages == 'even_page') {
                echo "Event page";
            } elseif ($pages == 'project_page') {
                echo "Gallery page";
            } elseif ($pages == 'contact_page') {
                echo "Contact page";
            } elseif ($pages == 'team_page') {
                echo "Team page";
            }
        } else {

            echo "SMS Society";
        }

        ?>
    </title>
    
    <meta name="description" content="SMS Society is a social service organization that is always working for the help of people">
  <meta name="keywords" content="Organization,organization,sms,SMS,SMS Sosiety,Sosiety,sosiety,sms sosiety,social help,#সমাজসেবী পরিবার,#সমাজসেবা,#সমাজসেবী সংস্থা,#সমাজসেবক,#সমাজ,#জনকল্যান,#সমাজসেবী,#social,#socialwork,#social activity,#social group,#social platform,help poor,এসএমএস সোসাইটি,"
  <meta name="author" content="smssosiety.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="admin/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />

    <style>
        .results tr[visible="true"] {
            display: table-row;
        }

        .results tr[visible="false"],
        .no-result {
            display: none;
        }
    </style>

    <link rel="stylesheet" href="assets/lightbox.css">
    <link rel="stylesheet" href="assets/style.css">
    
    

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->

    <!-- preloader end <!- header-area start -->
    <?php include 'includes/header.php' ?>
    <!-- header-area end -->

    <!-- slide-bar start -->
    <?php include 'includes/saide_menu_bar.php' ?>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->



    <!-- Main Content end ---------------------------------->

    <?php

    if (isset($pages)) {

        if ($pages == 'about_page') { //
            include 'pages/about_content.php';
        } elseif ($pages == 'even_page') { //
            include 'pages/event_content.php';
        } elseif ($pages == 'blog_page') {
            include 'pages/blog_content.php';
        } elseif ($pages == 'project_page') { //
            include 'pages/project_content.php';
        } elseif ($pages == 'contact_page') { //
            include 'pages/contact_content.php';
        } elseif ($pages == 'history_page') {
            include 'pages/history_content.php';
        } elseif ($pages == 'career_page') {
            include 'pages/career_content.php';
        } elseif ($pages == 'team_page') { //
            include 'pages/team_content.php';
        } elseif ($pages == 'faq_page') {
            include 'pages/faq_content.php';
        } elseif ($pages == 'event_details') {
            include 'pages/event_details_content.php';
        }
    } else {

        include 'pages/Home_content.php'; //
    }

    ?>










    <!-- Main Content end ---------------------------------->



    <!--footer-area start-->
    <?php include 'includes/footer.php'; ?>
    <!--footer-area end-->



    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>



    <script src="https://kit.fontawesome.com/7368c40b21.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <?php
    //  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    //     $url = "https://";
    // else
    //     $url = "http://";
    // // Append the host(domain name, ip) to the URL.   
    // $url .= $_SERVER['HTTP_HOST'];

    // // Append the requested resource location to the URL   
    // $url .= $_SERVER['REQUEST_URI'];
    // $urls = "http://bit.ly/codegrind";
    ?>

    <script>
        $("#share").jsSocials({
            url: window.location.href,
            text: "বিস্তারিত জানতে লিঙ্কে ক্লিক করে আমাদের ওয়েবসাইটে প্রবেশ করুন",
            showLabel: true,
            shares: ["twitter", "facebook", "whatsapp"],
        });
    </script>
    <script src="assets/lightbox-plus-jquery.js"></script>
</body>


<!-- Mirrored from www.devsnews.com/template/fande/fande/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 20:22:12 GMT -->

</html>