<?php



// ------------------------------------Login FUNCTION----------------------------------

function admin_login_check_info($data)
{

    require '../db_connect.php';
    $password = md5($data['admin_password']);

    $sql = "SELECT * FROM tbl_admin WHERE account_no='$data[user_id]' AND admin_password='$password'";


    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $admin_info = mysqli_fetch_assoc($query_result);
        if ($admin_info) {
            $_SESSION['user_name'] = $admin_info['user_name'];
            $_SESSION['admin_id'] = $admin_info['admin_id'];
            $_SESSION['account_no'] = $admin_info['account_no'];
            $_SESSION['admin_image'] = $admin_info['admin_image'];
            $_SESSION['access_level'] = $admin_info['access_level'];

            // ----------------------online status-----------------------------------
            // $admin_id = $admin_info['admin_id'];
            // $members_name = $admin_info['user_name'];
            // $account_no = $admin_info['account_no'];

            // $sql_online_status = "INSERT INTO tbl_online_status (admin_id,account_no,members_name) VALUES ('$admin_id','$account_no','$members_name')";

            // mysqli_query($con, $sql_online_status);

            // ---------------------------------------------------------


            header('LOCATION: admin_master.php');
        } else {
            $message = "Please Use Valid Information";
            return $message;
        }
    } else {
        die("Query Problem" . mysqli_error($con));
    }
}

// ------------------------------------Save Position Information  FUNCTION-------------

function save_position_list($data)
{
    require '../db_connect.php';
    $sql = "INSERT INTO tbl_position_list (position_name) VALUES ('$data[position_name]')";

    if (mysqli_query($con, $sql)) {
        $message = "Save SuccessFully";
        return $message;
    } else {
        $message = "Error";
        return $message;
    }
}
// -----------------------------Show Position Information  FUNCTION------------------Add position-----

function position_list_view()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_position_list WHERE deletion_status='1' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
// -----------------------------Delete  Position Information  FUNCTION-----------------Add position---------

function delete_position_info($data)
{
    require '../db_connect.php';


    $sql = "DELETE FROM tbl_position_list WHERE position_id ='$data[delete_id]'";

    if (mysqli_query($con, $sql)) {

        $delete_message = "Delete SuccessFully";
        return $delete_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------view position info in Add new Member Information  FUNCTION--------------Add Member-------------

function select_all_position_info()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_position_list WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------Add New Member Information  FUNCTION-------------------Add Member---------------

function save_new_members_info($data)
{
    require '../db_connect.php';
    // --------------Date----------Date------------------Date-----------------------

    date_default_timezone_set("Asia/Dhaka");
    $curent_month = date('d-m-Y');

    // --------------Date----------Date------------------Date-----------------------


    $directory = 'assets/Image/members_image/';
    $target_file = $directory . $_FILES['member_image']['name'];

    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_size = $_FILES['member_image']['size'];
    $cheak = getimagesize($_FILES['member_image']['tmp_name']);

    if ($cheak) {

        if (file_exists($target_file)) {
            echo "This Image is exist, Try another Image";
        } else {

            if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                echo "Yorr file type is not valid";
            } else {
                if ($file_size > 5320000) {
                    echo "Your file size is too large ! try again";
                } else {
                    move_uploaded_file($_FILES['member_image']['tmp_name'], $target_file);
                    $sql = "INSERT INTO tbl_members_info (member_name,father_name,mother_name,member_email,member_phone,member_gender,member_address,member_position,member_image,facebook_link,twitter_link,instagram_link,member_account_no,joining_date) VALUES ('$data[member_name]','$data[father_name]','$data[mother_name]','$data[member_email]','$data[member_phone]','$data[member_gender]','$data[member_address]','$data[member_position]','$target_file','$data[facebook_link]','$data[twitter_link]','$data[instagram_link]','$data[member_account_no]','$curent_month')";

                    if (mysqli_query($con, $sql)) {

                        $save_message = "Save SuccessFully";
                        return $save_message;
                    } else {
                        die("Database Not Selected" . mysqli_error($con));
                    }
                }
            }
        }
    } else {
        echo "Your uplaod file is not an image ! Try Again";
    }
}


// ------------View Member Information  FUNCTION--------------Data Bank--------------------

function view_all_members_info()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_members_info WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------View Member Profile Information  FUNCTION--------------User Profile--------------------

function view_member_profile_data($data)
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_members_info WHERE deletion_status =1 AND members_id='$data[membersid]' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function view_member_profile_data_by_account_no($data)
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_members_info WHERE deletion_status =1 AND member_account_no='$data' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// ------------View Member Name  FUNCTION--------------Add Fee--------------------

function view_members_name()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_members_info WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
// ------------View transection  FUNCTION--------------Add Fee--------------------

// function view_donor_transection()
// {
//     require '../db_connect.php';
//     $account_no = $_SESSION['transection_ac_no'];
//     $sql = "SELECT * FROM tbl_donation WHERE donner_account_no ='$account_no' ";

//     if (mysqli_query($con, $sql)) {
//         $query_transection = mysqli_query($con, $sql);
//         return $query_transection;
//     } else {
//         die("Database Not Selected" . mysqli_error($con));
//     }
// }
function view_member_transection()
{
    require '../db_connect.php';
    $account_no = $_SESSION['transection_ac_no'];
    $sql = "SELECT * FROM tbl_members_fee_amount WHERE member_account_no ='$account_no' ";

    if (mysqli_query($con, $sql)) {
        $query_transection = mysqli_query($con, $sql);
        return $query_transection;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// ------------Add New Image in Gallery  FUNCTION--------------web_gallery Edit--------------------

function save_gallery_image($data)
{
    require '../db_connect.php';



    $directory = 'assets/Image/web_gallery_image/';
    $target_file = $directory . $_FILES['gallery_image']['name'];

    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_size = $_FILES['gallery_image']['size'];
    $cheak = getimagesize($_FILES['gallery_image']['tmp_name']);

    if ($cheak) {

        if (file_exists($target_file)) {
            echo "This Image is exist, Try another Image";
        } else {

            if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                echo "Yorr file type is not valid";
            } else {
                if ($file_size > 5320000) {
                    echo "Your file size is too large ! try again";
                } else {
                    move_uploaded_file($_FILES['gallery_image']['tmp_name'], $target_file);
                    $sql = "INSERT INTO tbl_web_gallery (image_title,gallery_image) VALUES ('$data[image_title]','$target_file')";

                    if (mysqli_query($con, $sql)) {

                        $save_message = "Save SuccessFully";
                        return $save_message;
                    } else {
                        die("Database Not Selected" . mysqli_error($con));
                    }
                }
            }
        }
    } else {
        echo "Your uplaod file is not an image ! Try Again";
    }
}

// ------------View All Image for Edit Gallery  FUNCTION--------------web_gallery Edit--------------------

function view_all_gallery_images()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_gallery WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------Delete Image for Edit Gallery  FUNCTION--------------web_gallery Edit--------------------

function delete_gallery_image($data)
{
    require '../db_connect.php';
    $image_id = $data['deleteId'];

    $sql = "UPDATE tbl_web_gallery SET deletion_status=0 WHERE image_id ='$image_id'";

    if (mysqli_query($con, $sql)) {
        $delete_message = "Delete SuccessFully";
        return $delete_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// ------------View members Info  FUNCTION--------------edit_member Edit--------------------

function show_member_info($data)
{

    require '../db_connect.php';
    $memberID = $data['memberId'];

    $sql = "SELECT * FROM tbl_members_info WHERE members_id ='$memberID'";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------Update members Info  FUNCTION--------------edit_member Edit--------------------

function members_info_update($data)
{

    require '../db_connect.php';
    $image_click = $_FILES['member_image']['name'];



    if ($image_click != NULL) {

        $directory = 'assets/Image/members_image/';
        $target_file = $directory . $_FILES['member_image']['name'];

        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['member_image']['size'];
        $cheak = getimagesize($_FILES['member_image']['tmp_name']);

        if ($cheak) {

            if (file_exists($target_file)) {
                echo "This Image is exist, Try another Image";
            } else {

                if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                    echo "Yorr file type is not valid";
                } else {
                    if ($file_size > 5320000) {
                        echo "Your file size is too large ! try again";
                    } else {
                        move_uploaded_file($_FILES['member_image']['tmp_name'], $target_file);

                        $sql = "UPDATE tbl_members_info SET member_name='$data[member_name]',father_name='$data[father_name]',mother_name='$data[mother_name]',member_email='$data[member_email]',member_phone='$data[member_phone]',member_gender='$data[member_gender]',member_address='$data[member_address]',member_position='$data[member_position]',member_image='$target_file',facebook_link='$data[facebook_link]',twitter_link='$data[twitter_link]',instagram_link='$data[instagram_link]' WHERE members_id ='$data[members_id]'";

                        if (mysqli_query($con, $sql)) {

                            $_SESSION['update_status'] = "Update Successfull";
                            echo "<script>
                          window.location.href='data_bank.php';
                                  </script>";
                        } else {
                            die("Database Not Selected" . mysqli_error($con));
                        }
                    }
                }
            }
        } else {
            echo "Your uplaod file is not an image ! Try Again";
        }
    } else {
        $sql = "UPDATE tbl_members_info SET member_name='$data[member_name]',father_name='$data[father_name]',mother_name='$data[mother_name]',member_email='$data[member_email]',member_phone='$data[member_phone]',member_gender='$data[member_gender]',member_address='$data[member_address]',member_position='$data[member_position]',facebook_link='$data[facebook_link]',twitter_link='$data[twitter_link]',instagram_link='$data[instagram_link]' WHERE members_id ='$data[members_id]'";

        if (mysqli_query($con, $sql)) {

            $_SESSION['update_status'] = "Update Successfull";
            echo "<script>
          window.location.href='data_bank.php';
                  </script>";
        } else {
            die("Database Not Selected" . mysqli_error($con));
        }
    }
}

// ------------View Access Level Admin Data  FUNCTION--------------add new admin user Create--------------------


function select_member_id()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_members_info WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------admin_user_creation_next_btn_clic  FUNCTION--------------add new admin user Create--------------------

function admin_user_creation_next_btn_click($data)
{

    if ($data['account_no'] == '1') {
        $message = "Enter Valid Account No";
        return $message;
    } else {
        $_SESSION['tmp_user_account'] = $data['account_no'];

        echo "<script>
        window.location.href='add_new_admin_user_partTwo.php';
                </script>";
    }
}

// ------get Information By Account No row  FUNCTION--------------add new admin user Create--------------------

function get_info_by_account_no()
{

    require '../db_connect.php';



    $account_no = $_SESSION['tmp_user_account'];


    $sql = "SELECT * FROM tbl_members_info WHERE member_account_no ='$account_no' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------Save New Admin User  FUNCTION--------------add new admin user Create-------------

function save_admin_new_user($data)
{

    require '../db_connect.php';
    $password = md5($data['admin_password']);
    $sql = "INSERT INTO tbl_admin (account_no,user_name,user_id,admin_image,admin_password,access_level) VALUES ('$data[account_no]','$data[user_name]','$data[user_id]','$data[admin_image]','$password','$data[access_level]')";
    if (mysqli_query($con, $sql)) {

        unset($_SESSION['tmp_user_account']);

        echo "<script>
        window.location.href='admin_user.php';
                </script>";
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------View All Admin User  FUNCTION--------------add new admin user Create-------------

function view_all_admin_users()
{

    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_admin WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------Delete Admin User  FUNCTION--------------user admin -------------

function delete_admin_info($data)
{
    require '../db_connect.php';


    $sql = "DELETE FROM tbl_admin WHERE admin_id ='$data[deleteID]'";

    if (mysqli_query($con, $sql)) {

        $delete_message = "Delete SuccessFully";
        return $delete_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------Save Expences Data  FUNCTION--------------Expences Data page -------------

function save_new_expenses_entry($data)
{

    require '../db_connect.php';
    // --------------Date----------Date------------------Date-----------------------

    date_default_timezone_set("Asia/Dhaka");

    $curent_date = date('d-m-Y');
    $curent_month = date('Y-m');
    $curent_year = date('Y');
    $curent_time =  date("h:i:sa");

    // --------------Date----------Date------------------Date-----------------------


    // -------------tbl_total amount Data Select----------------------
    $sql = "SELECT * FROM tbl_total_amount";

    if (mysqli_query($con, $sql)) {
        $result = mysqli_query($con, $sql);

        $total_amount_data = mysqli_fetch_assoc($result);
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }

    // -------------insert Into  Total Fee----------------------
    $add_expences = $data['total_amount'];

    $total_expencess = $total_amount_data['total_expencess'];

    $current_amount = $total_amount_data['current_amount'];


    $row_total_expencess = $total_expencess + $add_expences;
    $row_current_amount = $current_amount - $add_expences;

    $sql_total_amount_update = "UPDATE tbl_total_amount SET total_expencess='$row_total_expencess',current_amount='$row_current_amount',last_update_time='$curent_time',last_update_date='$curent_date'";

    if (mysqli_query($con, $sql_total_amount_update)) {
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }


    // -------------insert Into  ExpencesEntry----------------------



    $image_click = $_FILES['receipt_image']['name'];

    if ($image_click != NULL) {

        $directory = 'assets/Image/expenxes_recipt/';
        $target_file = $directory . $_FILES['receipt_image']['name'];

        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['receipt_image']['size'];
        $cheak = getimagesize($_FILES['receipt_image']['tmp_name']);

        if ($cheak) {

            if (file_exists($target_file)) {
                echo "This Image is exist, Try another Image";
            } else {

                if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                    echo "Yorr file type is not valid";
                } else {
                    if ($file_size > 5320000) {
                        echo "Your file size is too large ! try again";
                    } else {
                        move_uploaded_file($_FILES['receipt_image']['tmp_name'], $target_file);

                        $sql = "INSERT INTO tbl_expenses (expenser_title,expenser_name,receipt_image,total_amount,expenses_description,last_update,entry_date,entry_month,entry_year) VALUES ('$data[expenser_title]','$data[expenser_name]','$target_file','$data[total_amount]','$data[expenses_description]','$curent_time','$curent_date','$curent_month','$curent_year')";


                        if (mysqli_query($con, $sql)) {

                            $_SESSION['expenses_save_status'] = "Save Successfull";
                        } else {
                            die("Database Not Selected" . mysqli_error($con));
                        }
                    }
                }
            }
        } else {
            echo "Your uplaod file is not an image ! Try Again";
        }
    } else {
        $sql = "INSERT INTO tbl_expenses (expenser_title,expenser_name,total_amount,expenses_description,last_update,entry_date,entry_month,entry_year) VALUES ('$data[expenser_title]','$data[expenser_name]','$data[total_amount]','$data[expenses_description]','$curent_time','$curent_date','$curent_month','$curent_year')";

        if (mysqli_query($con, $sql)) {

            $_SESSION['expenses_save_status'] = "Save Successfull";
        } else {
            die("Database Not Selected" . mysqli_error($con));
        }
    }
}

// ------View Expences Data  FUNCTION--------------Expences Data Report -------------


function view_all_expences_info()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_expenses WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------Delete Expences Data  FUNCTION--------------Expences Data Report -------------

function expences_data_delete($data)
{
    require '../db_connect.php';
    $row_id = $data['btn_id'];
    $sql = "UPDATE tbl_expenses SET deletion_status=0 WHERE expenses_id ='$row_id'";

    if (mysqli_query($con, $sql)) {
        $delete_message = "Delete SuccessFully";
        return $delete_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------Save Member Fee Data Data  FUNCTION--------------Add Member Fee -------------

function save_member_monthly_fee($data)
{
    require '../db_connect.php';

    // --------------Date----------Date------------------Date-----------------------

    date_default_timezone_set("Asia/Dhaka");

    $entry_date = date('d-m-Y');
    $entry_year = date('Y');
    $last_update =  date("h:i:sa");

    // --------------Date----------Date------------------Date-----------------------


    $sql = "SELECT * FROM tbl_members_info WHERE member_account_no ='$data[member_account_no]' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);

        $row_data = mysqli_fetch_assoc($query_result);
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
    // -------------tbl_total amount Data Select----------------------
    $sql = "SELECT * FROM tbl_total_amount";

    if (mysqli_query($con, $sql)) {
        $result = mysqli_query($con, $sql);

        $total_amount_data = mysqli_fetch_assoc($result);
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }

    // -------------insert Into  Total Fee----------------------
    $add_fee = $data['total_amount'];

    $total_fee = $total_amount_data['total_fee'];
    $total_amount = $total_amount_data['total_amount'];
    $current_amount = $total_amount_data['current_amount'];


    $row_total_fee = $total_fee + $add_fee;
    $row_total_amount = $total_amount + $add_fee;
    $row_current_amount = $current_amount + $add_fee;

    $sql_total_amount_update = "UPDATE tbl_total_amount SET total_fee='$row_total_fee',total_amount='$row_total_amount',current_amount='$row_current_amount',last_update_time='$last_update',last_update_date='$entry_date'";

    if (mysqli_query($con, $sql_total_amount_update)) {
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }


    // -------------insert Into  Add Fee----------------------



    $sql = "INSERT INTO tbl_members_fee_amount (payment_month,total_amount,member_account_no,member_name,entry_date,entry_year,last_update) VALUES ('$data[payment_month]','$data[total_amount]','$data[member_account_no]','$row_data[member_name]','$entry_date','$entry_year','$last_update')";
    if (mysqli_query($con, $sql)) {
        $message = "Save Successfully";
        return $message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}



// ------View Expences Data  FUNCTION--------------Expences Data Report -------------


function view_all_member_fee_info()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_members_fee_amount WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function view_all_member_fee_info_for_this_month()
{
    require '../db_connect.php';

    // --------------Date----------Date------------------Date-----------------------

    date_default_timezone_set("Asia/Dhaka");

    $entry_month = date('Y-m');


    // --------------Date----------Date------------------Date-----------------------

    $sql = "SELECT * FROM tbl_members_fee_amount WHERE payment_month ='$entry_month' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}



// ------Save Donation amount  Data Data  FUNCTION--------------Add donation -------------

function save_donation_amount($data)
{
    require '../db_connect.php';

    // --------------Date----------Date------------------Date-----------------------

    date_default_timezone_set("Asia/Dhaka");

    $entry_month = date('Y-m');
    $entry_date = date('d-m-Y');
    $entry_year = date('Y');
    $entry_time =  date("h:i:sa");

    // --------------Date----------Date------------------Date-----------------------



    $sql = "SELECT * FROM tbl_members_info WHERE member_account_no ='$data[donner_account_no]' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);

        $row_data = mysqli_fetch_assoc($query_result);
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
    // -------------tbl_total amount Data Select----------------------
    $sql = "SELECT * FROM tbl_total_amount";

    if (mysqli_query($con, $sql)) {
        $result = mysqli_query($con, $sql);

        $total_amount_data = mysqli_fetch_assoc($result);
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }

    // -------------insert Into  Total Fee----------------------
    $add_fee = $data['total_amount'];

    $total_donation = $total_amount_data['total_donation'];
    $total_amount = $total_amount_data['total_amount'];
    $current_amount = $total_amount_data['current_amount'];


    $row_total_donation = $total_donation + $add_fee;
    $row_total_amount = $total_amount + $add_fee;
    $row_current_amount = $current_amount + $add_fee;

    $sql_total_amount_update = "UPDATE tbl_total_amount SET total_donation='$row_total_donation',total_amount='$row_total_amount',current_amount='$row_current_amount',last_update_time='$entry_time',last_update_date='$entry_date'";

    if (mysqli_query($con, $sql_total_amount_update)) {
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }


    // -------------insert Into  Add Fee----------------------






    $sql = "INSERT INTO tbl_donation (donner_account_no,donation_date,total_amount,donner_reason,donner_name,entry_month,entry_year,entry_time) VALUES ('$data[donner_account_no]','$data[donation_date]','$data[total_amount]','$data[donner_reason]','$row_data[member_name]','$entry_month','$entry_year','$entry_time')";
    if (mysqli_query($con, $sql)) {
        $message = "Save Successfully";
        return $message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// ------View Donation Data  FUNCTION--------------Expences Data Report -------------


function view_all_donation_info()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_donation WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// -----------------------------Delete  Position Information  FUNCTION-----------------Add position---------

function delete_Member_info($data)
{
    require '../db_connect.php';

    $sql = "UPDATE tbl_members_info SET deletion_status=0 WHERE members_id ='$data[memberId]'";

    if (mysqli_query($con, $sql)) {

        $delete_message = "Delete SuccessFully";
        return $delete_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}



// ------------Website Contact Edit   FUNCTION--------------Website Contact Page-------------Start-------

function view_web_contact_data()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_contact WHERE web_contact_id  =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function update_page_status($data)
{
    require '../db_connect.php';

    $sql = "UPDATE tbl_web_contact SET page_small_status = '$data[page_small_status]',page_big_status_partOne = '$data[page_big_status_partOne]',page_big_status_partTwo = '$data[page_big_status_partTwo]' WHERE web_contact_id =1 ";

    if (mysqli_query($con, $sql)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function update_page_info($data)
{
    require '../db_connect.php';

    $sql = "UPDATE tbl_web_contact SET location_title = '$data[location_title]',location_address = '$data[location_address]',location_map_link = '$data[location_map_link]',mail_title = '$data[mail_title]',mail_address = '$data[mail_address]',phone_title = '$data[phone_title]',phone_number = '$data[phone_number]',facebook_link = '$data[facebook_link]',youtube_link = '$data[youtube_link]',instagram_link = '$data[instagram_link]',twitter_link = '$data[twitter_link]' WHERE web_contact_id =1 ";

    if (mysqli_query($con, $sql)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
// ------------Website Event Edit FUNCTION--------------Website Event Page-------------start-------


function save_new_event_info($data)
{

    require '../db_connect.php';

    // --------------Date----------Date------------------Date-----------------------
    date_default_timezone_set("Asia/Dhaka");
    $curent_month = date('m-Y');
    $curent_date = date('d-M-Y');
    // --------------Date----------Date------------------Date-----------------------

    $directory = 'assets/Image/event_image/';

    $target_file = $directory . $_FILES['event_image']['name'];

    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_size = $_FILES['event_image']['size'];
    $cheak = getimagesize($_FILES['event_image']['tmp_name']);

    if ($cheak) {

        if (file_exists($target_file)) {
            echo "This Image is exist, Try another Image";
        } else {

            if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                echo "Yorr file type is not valid";
            } else {
                if ($file_size > 5320000) {
                    echo "Your file size is too large ! try again";
                } else {
                    move_uploaded_file($_FILES['event_image']['tmp_name'], $target_file);

                    $sql = "INSERT INTO tbl_web_event (short_title,main_title,event_image,event_location,event_description,entry_month,entry_date) VALUES ('$data[short_title]','$data[main_title]','$target_file','$data[event_location]','$data[event_description]','$curent_month','$curent_date')";

                    if (mysqli_query($con, $sql)) {

                        $save_message = "Save SuccessFully";
                        return $save_message;
                    } else {
                        die("Database Not Selected" . mysqli_error($con));
                    }
                }
            }
        }
    } else {
        echo "Your uplaod file is not an image ! Try Again";
    }
}

// -------Website Event Edit FUNCTION--------------Website Event Page-------------start-------

function view_web_event_data()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_event WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function delete_event_info($data)
{

    require '../db_connect.php';

    $sql = "UPDATE tbl_web_event SET deletion_status =0 WHERE event_id ='$data[delete_value]' ";

    if (mysqli_query($con, $sql)) {

        $delete_message = "Delete SuccessFully";
        return $delete_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// -------About Website Data Insert FUNCTION--------------Website About Page-------------Start-------

function about_status_part_one_update($data)
{
    require '../db_connect.php';



    $sql = "UPDATE tbl_web_aboutus_part_one SET small_status = '$data[small_status]',title_part_one = '$data[title_part_one]',title_part_two = '$data[title_part_two]',members_status = '$data[members_status]',about_description = '$data[about_description]' WHERE about_id =1 ";

    if (mysqli_query($con, $sql)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function show_about_status_part_one_data()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_aboutus_part_one WHERE about_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// -------About Website Data Insert Part Two FUNCTION---------Website About Page-------------Start-------


function about_status_part_two_update($data)
{
    require '../db_connect.php';



    $sql = "UPDATE tbl_web_aboutus_part_two SET btn_name = '$data[btn_name]',title_part_one = '$data[title_part_one]',title_part_two = '$data[title_part_two]',about_description = '$data[about_description]' WHERE about_id =1 ";

    if (mysqli_query($con, $sql)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function show_about_status_part_two_data()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_aboutus_part_two WHERE about_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// -------About Website Data Insert Part Three FUNCTION---------Website About Page-------------Start-------


function about_status_part_three_update($data)
{
    require '../db_connect.php';


    $sql = "UPDATE tbl_web_aboutus_part_two SET btn_name = '$data[btn_name]',title_part_one = '$data[title_part_one]',title_part_two = '$data[title_part_two]',about_description = '$data[about_description]' WHERE about_id =2 ";

    if (mysqli_query($con, $sql)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function show_about_status_part_three_data()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_aboutus_part_two WHERE about_id =2 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ---------------------Add New Faq Rules----------------About Page Edit

function add_new_faq_rules($data)
{
    require '../db_connect.php';

    $sql = "INSERT INTO tbl_web_about_faq_rules (faq_title,faq_details,random_text_code) VALUES ('$data[faq_title]','$data[faq_details]','$data[random_text_code]')";

    if (mysqli_query($con, $sql)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function show_all_faq_rules()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_about_faq_rules WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function detele_faq_rules($data)
{
    require '../db_connect.php';


    $sql = "DELETE FROM tbl_web_about_faq_rules WHERE faq_id ='$data[delete_value]'";

    if (mysqli_query($con, $sql)) {
        $update_message = "Delete SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------web Home Edit----------web Home Edit---------web Home Edit-----web Home Edit--------------

function show_slider_data()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_web_home_sliders WHERE slider_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}



// -------------------- Slider One------------------Update Function- Home Page-----------------------


function home_slider_update($data)
{

    require '../db_connect.php';
    $image_click = $_FILES['slider_image']['name'];



    if ($image_click != NULL) {

        $directory = 'assets/Image/Home_slider/';
        $target_file = $directory . $_FILES['slider_image']['name'];

        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['slider_image']['size'];
        $cheak = getimagesize($_FILES['slider_image']['tmp_name']);

        if ($cheak) {

            if (file_exists($target_file)) {
                echo "This Image is exist, Try another Image";
            } else {

                if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                    echo "Yorr file type is not valid";
                } else {
                    if ($file_size > 9320000) {
                        echo "Your file size is too large ! try again";
                    } else {
                        move_uploaded_file($_FILES['slider_image']['tmp_name'], $target_file);

                        $sql_one = "UPDATE tbl_web_home_sliders SET small_status='$data[small_status]',big_title_one='$data[big_title_one]',big_title_two='$data[big_title_two]',slider_image='$target_file' WHERE slider_id =1 ";

                        if (mysqli_query($con, $sql_one)) {
                            $update_message = "Update SuccessFully";
                            return $update_message;
                        } else {
                            die("Database Not Selected" . mysqli_error($con));
                        }
                    }
                }
            }
        } else {
            echo "Your uplaod file is not an image ! Try Again";
        }
    } else {
        $sql_two = "UPDATE tbl_web_home_sliders SET small_status='$data[small_status]',big_title_one='$data[big_title_one]',big_title_two='$data[big_title_two]' WHERE slider_id =1 ";

        if (mysqli_query($con, $sql_two)) {
            $update_message = "Update SuccessFully";
            return $update_message;
        } else {
            die("Database Not Selected" . mysqli_error($con));
        }
    }
}

// ------------Slider Two Data show--------------

function show_slider_data_slider_two()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_web_home_sliders WHERE slider_id =2 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// -------------------- Slider Two------------------Update Function- Home Page-----------------------


function home_slider_update_slider_two($data)
{

    require '../db_connect.php';
    $image_click = $_FILES['slider_image_slider_two']['name'];



    if ($image_click != NULL) {

        $directory = 'assets/Image/Home_slider/';
        $target_file = $directory . $_FILES['slider_image_slider_two']['name'];

        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['slider_image_slider_two']['size'];
        $cheak = getimagesize($_FILES['slider_image_slider_two']['tmp_name']);

        if ($cheak) {

            if (file_exists($target_file)) {
                echo "This Image is exist, Try another Image";
            } else {

                if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                    echo "Yorr file type is not valid";
                } else {
                    if ($file_size > 9320000) {
                        echo "Your file size is too large ! try again";
                    } else {
                        move_uploaded_file($_FILES['slider_image_slider_two']['tmp_name'], $target_file);

                        $sql_one = "UPDATE tbl_web_home_sliders SET small_status='$data[small_status_slider_two]',big_title_one='$data[big_title_one_slider_two]',big_title_two='$data[big_title_two_slider_two]',slider_image='$target_file' WHERE slider_id =2 ";

                        if (mysqli_query($con, $sql_one)) {
                            $update_message = "Update SuccessFully";
                            return $update_message;
                        } else {
                            die("Database Not Selected" . mysqli_error($con));
                        }
                    }
                }
            }
        } else {
            echo "Your uplaod file is not an image ! Try Again";
        }
    } else {
        $sql_two = "UPDATE tbl_web_home_sliders SET small_status='$data[small_status_slider_two]',big_title_one='$data[big_title_one_slider_two]',big_title_two='$data[big_title_two_slider_two]' WHERE slider_id =2 ";

        if (mysqli_query($con, $sql_two)) {
            $update_message = "Update SuccessFully";
            return $update_message;
        } else {
            die("Database Not Selected" . mysqli_error($con));
        }
    }
}
// ------------Slider Two Data show--------------

function show_slider_data_slider_three()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_web_home_sliders WHERE slider_id =3 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// -------------------- Slider Two------------------Update Function- Home Page-----------------------


function home_slider_update_slider_three($data)
{

    require '../db_connect.php';
    $image_click = $_FILES['slider_image_slider_three']['name'];



    if ($image_click != NULL) {

        $directory = 'assets/Image/Home_slider/';
        $target_file = $directory . $_FILES['slider_image_slider_three']['name'];

        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['slider_image_slider_three']['size'];
        $cheak = getimagesize($_FILES['slider_image_slider_three']['tmp_name']);

        if ($cheak) {

            if (file_exists($target_file)) {
                echo "This Image is exist, Try another Image";
            } else {

                if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                    echo "Yorr file type is not valid";
                } else {
                    if ($file_size > 9320000) {
                        echo "Your file size is too large ! try again";
                    } else {
                        move_uploaded_file($_FILES['slider_image_slider_three']['tmp_name'], $target_file);

                        $sql_three = "UPDATE tbl_web_home_sliders SET small_status='$data[small_status_slider_three]',big_title_one='$data[big_title_one_slider_three]',big_title_two='$data[big_title_two_slider_three]',slider_image='$target_file' WHERE slider_id =3 ";

                        if (mysqli_query($con, $sql_three)) {
                            $update_message = "Update SuccessFully";
                            return $update_message;
                        } else {
                            die("Database Not Selected" . mysqli_error($con));
                        }
                    }
                }
            }
        } else {
            echo "Your uplaod file is not an image ! Try Again";
        }
    } else {
        $sql_three = "UPDATE tbl_web_home_sliders SET small_status='$data[small_status_slider_three]',big_title_one='$data[big_title_one_slider_three]',big_title_two='$data[big_title_two_slider_three]' WHERE slider_id =3 ";

        if (mysqli_query($con, $sql_three)) {
            $update_message = "Update SuccessFully";
            return $update_message;
        } else {
            die("Database Not Selected" . mysqli_error($con));
        }
    }
}



// ------------Home Page part 2 Status Data-------------

function show_home_status_part_two()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_web_home_title_status WHERE status_id  =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ----------------------Home page Part Two-------start---------------

function home_status($data)
{
    require '../db_connect.php';

    $sql_three = "UPDATE tbl_web_home_title_status SET small_status='$data[small_status]',big_title_one='$data[big_title_one]',big_title_two='$data[big_title_two]' WHERE status_id =1 ";

    if (mysqli_query($con, $sql_three)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function home_part_two_data_save($data)
{
    require '../db_connect.php';

    $sql = "INSERT INTO tbl_home_part_two (logo_name,part_title) VALUES ('$data[logo_name]','$data[part_title]')";

    if (mysqli_query($con, $sql)) {
        $update_message = "Save SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function show_home_part_two_data()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_home_part_two ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function delete_home_part_two($data)
{
    require '../db_connect.php';
    $admin_id = $data['id'];

    $sql = "DELETE FROM tbl_home_part_two WHERE part_id ='$admin_id'";

    if (mysqli_query($con, $sql)) {
        $update_message = "Delete SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}



// ------------Home Page part 3333 Status Data-------------

function show_home_status_part_three()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_web_home_title_status WHERE status_id  =2 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function update_home_status_part_3($data)
{
    require '../db_connect.php';

    $sql_three = "UPDATE tbl_web_home_title_status SET small_status='$data[small_status]',big_title_one='$data[big_title_one]',big_title_two='$data[big_title_two]' WHERE status_id =2 ";

    if (mysqli_query($con, $sql_three)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------View Event Title Name  FUNCTION-------------

function view_event_title_name()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_event WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function add_new_event_by_id($data)
{

    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_event WHERE event_id ='$data[event_id]' ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $data_event = mysqli_fetch_assoc($query_result);


        $short_title = $data_event['short_title'];
        $main_title = $data_event['main_title'];
        $event_image = $data_event['event_image'];
        $event_description = $data_event['event_description'];

        $sql_event_save = "INSERT INTO tbl_home_event (short_title,main_title,event_image,event_description) VALUES ('$short_title','$main_title','$event_image','$event_description')";

        if (mysqli_query($con, $sql_event_save)) {
            $update_message = "Add SuccessFully";
            return $update_message;
        } else {
            die("Database Not Selected" . mysqli_error($con));
        }
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


function show_home_event()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_home_event WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_home_event_view = mysqli_query($con, $sql);
        return $query_home_event_view;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


function delete_home_event($data)
{
    require '../db_connect.php';


    $sql = "UPDATE tbl_home_event SET deletion_status =0  WHERE row_id ='$data[event_id]' ";

    if (mysqli_query($con, $sql)) {
        $update_message = "Delete SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ------------Home Page part 4444444 Status Data-------------

function show_home_statuspart_four()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_web_home_title_status WHERE status_id =3 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function part_four_data_update($data)
{
    require '../db_connect.php';

    $sql_three = "UPDATE tbl_web_home_title_status SET small_status='$data[small_status]',big_title_one='$data[big_title_one]',big_title_two='$data[big_title_two]' WHERE status_id =3 ";

    if (mysqli_query($con, $sql_three)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// --------------------Part Five---------------------------------

function show_home_part_five_data_two()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_home_part_five WHERE row_id =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function home_part_five_update($data)
{
    require '../db_connect.php';

    $sql_three = "UPDATE tbl_home_part_five SET status_small='$data[status_small]',title_big_one='$data[title_big_one]',title_big_two='$data[title_big_two]',members_title='$data[members_title]',big_title_one='$data[big_title_one]',small_title_one='$data[small_title_one]',big_title_two='$data[big_title_two]',small_title_two='$data[small_title_two]' WHERE row_id =1 ";

    if (mysqli_query($con, $sql_three)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// ------------Home Page part 8888888888 Status Data-------------

function show_home_status_part_eight()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_web_home_title_status WHERE status_id =5 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function home_part_eight_update($data)
{
    require '../db_connect.php';

    $sql_three = "UPDATE tbl_web_home_title_status SET small_status='$data[small_status]',big_title_one='$data[big_title_one]',big_title_two='$data[big_title_two]' WHERE status_id =5 ";

    if (mysqli_query($con, $sql_three)) {
        $update_message = "Update SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function save_new_review($data)
{

    require '../db_connect.php';



    $directory = 'assets/Image/reviewer_image/';
    $target_file = $directory . $_FILES['rv_image']['name'];

    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_size = $_FILES['rv_image']['size'];
    $cheak = getimagesize($_FILES['rv_image']['tmp_name']);

    if ($cheak) {

        if (file_exists($target_file)) {
            echo "This Image is exist, Try another Image";
        } else {

            if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                echo "Yorr file type is not valid";
            } else {
                if ($file_size > 7320000) {
                    echo "Your file size is too large ! try again";
                } else {
                    move_uploaded_file($_FILES['rv_image']['tmp_name'], $target_file);

                    $sql = "INSERT INTO tbl_web_home_review (rv_name,rv_position,rv_image,rv_description) VALUES ('$data[rv_name]','$data[rv_position]','$target_file','$data[rv_description]')";

                    if (mysqli_query($con, $sql)) {

                        $update_message = "Save SuccessFully";
                        return $update_message;
                    } else {
                        die("Database Not Selected" . mysqli_error($con));
                    }
                }
            }
        }
    } else {
        echo "Your uplaod file is not an image ! Try Again";
    }
}

function show_home_review_data()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_web_home_review WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function delete_home_review($data)
{
    require '../db_connect.php';

    $sql_three = "UPDATE tbl_web_home_review SET deletion_status=0 WHERE review_id ='$data[id]' ";

    if (mysqli_query($con, $sql_three)) {
        $update_message = "Delete SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// -----------save_new_sponsor------------------------

function save_new_sponsor($data)
{
    require '../db_connect.php';



    $directory = 'assets/Image/sponsor_image/';
    $target_file = $directory . $_FILES['sponsor_image']['name'];

    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_size = $_FILES['sponsor_image']['size'];
    $cheak = getimagesize($_FILES['sponsor_image']['tmp_name']);

    if ($cheak) {

        if (file_exists($target_file)) {
            echo "This Image is exist, Try another Image";
        } else {

            if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {

                echo "Yorr file type is not valid";
            } else {
                if ($file_size > 7320000) {
                    echo "Your file size is too large ! try again";
                } else {
                    move_uploaded_file($_FILES['sponsor_image']['tmp_name'], $target_file);

                    $sql = "INSERT INTO tbl_home_sponsor (sponsor_title,sponsor_image) VALUES ('$data[sponsor_title]','$target_file')";

                    if (mysqli_query($con, $sql)) {

                        $update_message = "Save SuccessFully";
                        return $update_message;
                    } else {
                        die("Database Not Selected" . mysqli_error($con));
                    }
                }
            }
        }
    } else {
        echo "Your uplaod file is not an image ! Try Again";
    }
}

function show_sponsor_data()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_home_sponsor WHERE deletion_status =1 ";

    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function delete_new_sponsor($data)
{
    require '../db_connect.php';

    $sql_three = "UPDATE tbl_home_sponsor SET deletion_status=0 WHERE sponsor_id  ='$data[sponsor_id]' ";

    if (mysqli_query($con, $sql_three)) {
        $update_message = "Delete SuccessFully";
        return $update_message;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

// ----------------------------------------OverView Page ----------Admin Muster Home Contennt----------------------------
// ----------------------------------------OverView Page ----------Admin Muster Home Contennt----------------------------
// ----------------------------------------OverView Page ----------Admin Muster Home Contennt----------------------------


function total_member_count()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_members_info WHERE deletion_status =1 ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $rowCount = 0;
        while (mysqli_fetch_assoc($query_result)) {
            $num = 1;
            $rowCount = $rowCount + $num;
        }
        return $rowCount;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function total_donor_count()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_members_info WHERE deletion_status =1 AND member_position ='Donor' ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $rowCount = 0;
        while (mysqli_fetch_assoc($query_result)) {
            $num = 1;
            $rowCount = $rowCount + $num;
        }
        return $rowCount;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}
function total_admins_count()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_admin WHERE deletion_status =1 ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $rowCount = 0;
        while (mysqli_fetch_assoc($query_result)) {
            $num = 1;
            $rowCount = $rowCount + $num;
        }
        return $rowCount;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function show_total_amount()
{
    require '../db_connect.php';
    $sql = "SELECT * FROM tbl_total_amount WHERE id =1 ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        return $query_result;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


function this_mounth_fee()
{
    require '../db_connect.php';

    // --------------Date----------Date------------------Date-----------------------

    date_default_timezone_set("Asia/Dhaka");


    $curent_month = date('Y-m');


    // --------------Date----------Date------------------Date-----------------------


    $sql = "SELECT * FROM tbl_members_fee_amount WHERE deletion_status =1 AND payment_month ='$curent_month' ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $sum = 0;
        while ($fee_info = mysqli_fetch_assoc($query_result)) {
            $total_amount = $fee_info['total_amount'];
            $sum = $sum + $total_amount;
        }
        return $sum;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


function this_mounth_donation()
{
    require '../db_connect.php';

    // --------------Date----------Date------------------Date-----------------------

    date_default_timezone_set("Asia/Dhaka");


    $curent_month = date('Y-m');


    // --------------Date----------Date------------------Date-----------------------


    $sql = "SELECT * FROM tbl_donation WHERE deletion_status =1 AND entry_month ='$curent_month' ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $sum = 0;
        while ($fee_info = mysqli_fetch_assoc($query_result)) {
            $total_amount = $fee_info['total_amount'];
            $sum = $sum + $total_amount;
        }
        return $sum;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}

function this_mounth_expences()
{
    require '../db_connect.php';

    // --------------Date----------Date------------------Date-----------------------

    date_default_timezone_set("Asia/Dhaka");


    $curent_month = date('Y-m');


    // --------------Date----------Date------------------Date-----------------------


    $sql = "SELECT * FROM tbl_expenses WHERE deletion_status =1 AND entry_month ='$curent_month' ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $sum = 0;
        while ($fee_info = mysqli_fetch_assoc($query_result)) {
            $total_amount = $fee_info['total_amount'];
            $sum = $sum + $total_amount;
        }
        return $sum;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


// ------------------Aditional Information-----------


function total_done_project()
{
    require '../db_connect.php';

    // --------------Date----------Date------------------Date-----------------------
    date_default_timezone_set("Asia/Dhaka");
    $curent_month = date('Y-m');
    // --------------Date----------Date------------------Date-----------------------

    $sql = "SELECT * FROM tbl_web_event WHERE deletion_status =1 ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $rowCount = 0;
        while (mysqli_fetch_assoc($query_result)) {
            $num = 1;
            $rowCount = $rowCount + $num;
        }
        return $rowCount;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}


function total_done_project_this_month()
{
    require '../db_connect.php';
    // --------------Date----------Date------------------Date-----------------------
    date_default_timezone_set("Asia/Dhaka");
    $curent_month = date('m-Y');
    // --------------Date----------Date------------------Date-----------------------
    $sql = "SELECT * FROM tbl_web_event WHERE deletion_status =1 AND entry_month ='$curent_month' ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $rowCount = 0;
        while (mysqli_fetch_assoc($query_result)) {
            $num = 1;
            $rowCount = $rowCount + $num;
        }
        return $rowCount;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}



function total_image()
{
    require '../db_connect.php';

    $sql = "SELECT * FROM tbl_web_gallery WHERE deletion_status =1 ";
    if (mysqli_query($con, $sql)) {
        $query_result = mysqli_query($con, $sql);
        $rowCount = 0;
        while (mysqli_fetch_assoc($query_result)) {
            $num = 1;
            $rowCount = $rowCount + $num;
        }
        return $rowCount;
    } else {
        die("Database Not Selected" . mysqli_error($con));
    }
}





















































// ------------------------------------LOGOUT FUNCTION---------------------------------

function logout()
{

    require '../db_connect.php';

    // $admin_id = $_SESSION['admin_id'];
    // $sql_online_status_out = "DELETE FROM tbl_online_status WHERE admin_id ='$admin_id'";
    // mysqli_query($con, $sql_online_status_out);




    unset($_SESSION['admin_name']);
    unset($_SESSION['admin_id']);
    unset($_SESSION['update_status']);
    unset($_SESSION['account_no']);
    unset($_SESSION['admin_image']);
    unset($_SESSION['access_level']);

    header('LOCATION: index.php');
}
