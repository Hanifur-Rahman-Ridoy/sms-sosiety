<?php

require 'function_defination.php';

$query_result = view_all_member_fee_info();
// --------------Date----------Date------------------Date-----------------------

date_default_timezone_set("Asia/Dhaka");


$curent_month = date('Y-m');



// --------------Date----------Date------------------Date-----------------------


?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '2') { ?>
<section class="content">
    <div class="row">

        <div class="col-12">
            <div class="box">
                <div class="box-header ">




                    <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>Monthly fee Report</h4>
                    <a class="btn btn-info float-end" href="add_fee.php">Pay</a>



                </div>
                <div class="box-body">

                    <div class="table-responsive">
                        <table id="complex_header" class="table table-striped table-hover table-bordered display" style="width:100%">
                            <thead class="table-primary bg-primary">

                                <tr>
                                    <th>Account No</th>
                                    <th>Name</th>
                                    <th>Date (Y-M)</th>
                                    <th>Amount</th>
                                    <th>Entry Date</th>
                                </tr>
                            </thead>

                            <tbody>



                                <?php
                                 $sum = 0;
                                $rowCount = 0;
                                while ($fee_info = mysqli_fetch_assoc($query_result)) { ?>


                                    <tr>
                                        <td><?php echo $fee_info['member_account_no']; ?></td>
                                        <td><?php echo $fee_info['member_name']; ?></td>
                                        <td><?php echo $fee_info['payment_month']; ?></td>
                                        <td><?php $total_amount = $fee_info['total_amount'];
                                            echo $total_amount . " TK";
                                            ?></td>
                                        <td><?php echo $fee_info['entry_date']; ?></td>
                                    </tr>


                                <?php
                                    $num = 1;
                                    $rowCount = $rowCount + $num;
                                    $sum = $sum + $total_amount;
                                } ?>





                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1"></th>
                                    <th rowspan="1" colspan="1">Transection : <span class="text-warning bold"><?php echo $rowCount; ?></span></th>
                                    <th rowspan="1" colspan="1">Total Amount :</th>
                                    <th rowspan="1" colspan="1"><span class="text-warning bold"><?php echo $sum; ?></span> TK</th>
                                    <th rowspan="1" colspan="1"></th>

                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>






        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>