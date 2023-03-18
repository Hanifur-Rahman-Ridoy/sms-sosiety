<?php
session_start();
$ac_no = $_SESSION['ac_no'];

function get_all_transaction_Info($acount_no)
{
    require 'db_connect.php';

    $sql = "SELECT * FROM tbl_members_fee_amount WHERE member_account_no ='$acount_no' ";

    if (mysqli_query($con, $sql)) {

        $query_result = mysqli_query($con, $sql);
        return $query_result;
    }
}

$query_result = get_all_transaction_Info($ac_no);

if (isset($_GET['btn_status'])) {

    unset($_SESSION['ac_no']);
    unset($_SESSION['deletion_status']);
    echo "<script>
    window.location.href='index.php';
            </script>";
}



?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from powerbi-admin-template.multipurposethemes.com/bs5/main-dark/tables_data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 12:22:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets1010/images/favicon.png">

    <title>User Information</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="assets1010/assets/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="assets1010/assets/css/style.css">
    <link rel="stylesheet" href="assets1010/assets/css/skin_color.css">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">






    <!-- Main content -->
    <section class="container-fluid">


        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <!-- <h4 class="box-title">Account Transaction</h4> -->
                    <h4 class="box-title"><?php if (isset($ac_no)) {
                                                echo "Account No : <span class='text-warning'>" . $ac_no . "</span>";
                                            } ?></h4>
                    <a href="?btn_status=back" class="btn btn-primary float-end">Back</a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                            <thead class="table-primary bg-primary">

                                <tr>
                                    <th>Payment Month</th>
                                    <th>Amount</th>
                                    <th>Entry Date</th>


                                </tr>
                            </thead>
                            <tbody>

                                <?php $sum = 0;
                                $rowCount = 0;
                                while ($transaction_info = mysqli_fetch_assoc($query_result)) { ?>
                                    <tr>
                                        <td><?php echo $transaction_info['payment_month']; ?></td>
                                        <td><?php $total_amount = $transaction_info['total_amount'];
                                            echo $total_amount; ?></td>
                                        <td><?php echo $transaction_info['entry_date']; ?></td>

                                    </tr>

                                <?php $num = 1;

                                    $rowCount = $rowCount + $num;


                                    $sum = $sum + $total_amount;
                                } ?>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total Transaction : <span class="text-warning"><?php echo $rowCount; ?></span></th>
                                    <th>Total Amount : <span class="text-warning"><?php echo $sum;


                                                                                    ?></span></th>
                                    <th></th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>






        <!-- /.col -->

        <!-- /.row -->
    </section>
    <!-- /.content -->


    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="container">

            &copy; 2022 <a href="https://www.facebook.com/hrsofttech.ltd">HR SoftTech</a>. All Rights Reserved.
        </div>
    </footer>



    <!-- Vendor JS -->
    <script src="assets1010/assets/js/vendors.min.js"></script>
    <script src="assets1010/assets/js/pages/chat-popup.js"></script>
    <script src="assets1010/assets/icons/feather-icons/feather.min.js"></script>
    <script src="assets1010/assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- Power BI Admin App -->
    <script src="assets1010/assets/js/template.js"></script>

    <script src="assets1010/assets/js/pages/data-table.js"></script>


</body>

<!-- Mirrored from powerbi-admin-template.multipurposethemes.com/bs5/main-dark/tables_data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 12:22:00 GMT -->

</html>