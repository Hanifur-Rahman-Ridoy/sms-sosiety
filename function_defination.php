<?php


function view_all_members_information()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_members_info WHERE member_position != 'Donor' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------View All Image for  Gallery  FUNCTION--------------gallery --------------------

function view_all_gallery_images_website()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_gallery WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------Website Contact Edit   FUNCTION--------------Website Contact Page-------------Start-------

function view_web_contact_data_website()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_contact WHERE web_contact_id  =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// -------Website Event View FUNCTION--------------Website Event Page-------------start-------

function view_website_event_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_event WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
// -------Website Event Details View FUNCTION---------Website Event Details Page---start-------

function view_website_event_single_row($data)
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_event WHERE event_id ='$data[details_id]' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ----------About Page Show Data Part One Function -------------------------About Page
function show_about_status_part_one_data_website()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_aboutus_part_one WHERE about_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
// ----------About Page Show Data Part Two Function -------------------------About Page

function show_about_status_part_two_data_website()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_aboutus_part_two WHERE about_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function show_about_status_part_three_data_website()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_aboutus_part_two WHERE about_id =2 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function show_all_faq_rules()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_about_faq_rules WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ----------------------Home contents------------------

function show_home_slider_1()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_home_sliders WHERE slider_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function show_home_slider_2()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_home_sliders WHERE slider_id =2 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function show_home_slider_3()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_home_sliders WHERE slider_id =3 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
// ---------------------part-22222222222-- Features---------------
function home__features_two_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_home_title_status WHERE status_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function home__features_two_content_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_home_part_two WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
// -------------------------part 333333--------------------

function home_event_status_three_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_home_title_status WHERE status_id =2 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function home_event_content_three_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_home_event WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// --------------------part-444444444-----------

function home_part_four_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_home_title_status WHERE status_id =3 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}



// --------------------part-55555555-----------

function home_part_five_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_home_part_five WHERE row_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// --------------------part-6666666-----------

function home_part_six_sponsor_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_home_sponsor WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
// --------------------part-77777777-----------

function home_part_seven_review_data()
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_web_home_review WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// -------------Admitional Information---------------


