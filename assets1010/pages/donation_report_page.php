<?php

require 'function_defination.php';

$query_result = view_all_donation_info();



?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '2') { ?>
    <section class="content">
        <div class="row">

            <div class="col-12">
                <div class="box">
                    <div class="box-header ">




                        <h4 class="box-title mb-0"><i class="ti-user me-15"></i>Donation Report</h4>
                        <a class="btn btn-info float-end" href="add_donation.php">Add</a>




                    </div>

                    <div class="box-body">

                        <div class="table-responsive">
                            <table id="complex_header" class="table table-striped table-hover table-bordered display" style="width:100%">
                                <thead class="table-primary bg-primary">

                                    <tr>
                                        <th>AC NO</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Reasons</th>
                                        <!-- <th>Action</th> -->

                                    </tr>
                                </thead>

                                <tbody>



                                    <?php $sum = 0;
                                    $rowCount = 0;
                                    while ($donation_info = mysqli_fetch_assoc($query_result)) { ?>



                                        <tr>
                                            <td><?php echo $donation_info['donner_account_no']; ?></a></td>
                                            <td><?php echo $donation_info['donner_name']; ?></td>
                                            <td><?php echo $donation_info['donation_date']; ?></td>
                                            <td><?php $total_amount = $donation_info['total_amount'];
                                                echo $total_amount . " TK"; ?></td>

                                            <td><?php echo $donation_info['donner_reason']; ?></td>
                                            <!-- <td class="text-center m-0 p-0">
                                            <table class="table m-1 p-0">
                                                <tr>
                                                    <td class="bg-success-light hr-p1"> <a href="#" class="hr"><span class="glyphicon glyphicon-pencil text-dark  "></span></a></td>
                                                    <td class="bg-lightest hr-p1 "> <a href="#" class="hr"><span class="glyphicon glyphicon-trash text-danger"></span></td></a>
                                                </tr>
                                            </table>
                                        </td> -->
                                        </tr>


                                    <?php
                                        $num = 1;

                                        $rowCount = $rowCount + $num;


                                        $sum = $sum + $total_amount;
                                    } ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Total Transection : <span class="text-warning bold"><?php echo $rowCount; ?></span></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1">Total Amount :</th>
                                        <th rowspan="1" colspan="1"><span class="text-warning bold"><?php echo $sum; ?></span> TK</th>
                                        <th rowspan="1" colspan="2"></th>

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