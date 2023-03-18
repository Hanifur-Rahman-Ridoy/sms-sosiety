<?php
require 'function_defination.php';

if (isset($_GET['membersid'])) {

    $query_result = view_member_profile_data($_GET);
    $row =  mysqli_fetch_assoc($query_result);
} else {

    $admin_account_no = $_SESSION['account_no'];
    $query_result = view_member_profile_data_by_account_no($admin_account_no);
    $row =  mysqli_fetch_assoc($query_result);
}

$_SESSION['transection_ac_no'] = $row['member_account_no'];
$position = $row['member_position'];

$query_transection = view_member_transection();









?>
<section class="content">

    <div class="row">



        <!-- /.col -->

        <div class="col-12 col-lg-5 col-xl-4">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-img bbsr-0 bber-0" style="background: url('images/photo2.png') center center;width: 100%;" data-overlay="5">
                    <h3 class="widget-user-username text-white"><?php echo $row['member_name']; ?></h3>
                    <h6 class="widget-user-desc  text-white"> <i class="glyphicon glyphicon-asterisk text-primary"></i> <?php echo $row['member_position']; ?> <i class="glyphicon glyphicon-asterisk text-primary"></i></h6>
                </div>
                <div class="widget-user-image">
                    <img src="<?php
                                if ($row['member_image'] != null) {
                                    echo $row['member_image'];
                                } else {
                                    echo "assets/Image/members_image/avatar-9.png";
                                }

                                ?>" style="height: 90px;width: 90px;" alt="User Avatar" class="rounded-circle">
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="description-block">
                                <h5 class="description-header"><?php echo $row['joining_date']; ?></h5>
                                <span class="description-text">Joining Date</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                        <div class="col-sm-4 bs-1">
                            <div class="description-block">
                                <h5 class="description-header"><?php echo $row['member_account_no']; ?></h5>
                                <span class="description-text text-success text-bold">User ID</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <div class="box">
                <div class="box-body box-profile">
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <p>Name :<span class="text-gray ps-10"><?php echo $row['member_name']; ?></span> </p>
                                <p>Fathers Name :<span class="text-gray ps-10"><?php echo $row['father_name']; ?></span> </p>
                                <p>Mothers Name :<span class="text-gray ps-10"><?php echo $row['mother_name']; ?></span> </p>
                                <p>Email :<span class="text-gray ps-10"><?php echo $row['member_email']; ?></span> </p>
                                <p>Phone :<span class="text-gray ps-10"><?php echo $row['member_phone']; ?></span></p>
                                <p>Gender :<span class="text-gray ps-10"><?php echo $row['member_gender']; ?></span></p>
                                <p>Joining Date :<span class="text-gray ps-10"><?php echo $row['joining_date']; ?></span></p>
                                <p>Position status :<span class="text-gray ps-10"><?php echo $row['member_position']; ?></span></p>
                                <p>Address :<span class="text-gray ps-10"><?php echo $row['member_address']; ?></span></p>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="pb-15">
                                <p class="mb-10">Social Profile</p>
                                <div class="user-social-acount">

                                    <?php if ($row['facebook_link'] != null) { ?>

                                        <a href="<?php echo $row['facebook_link']; ?>" target="_blank" class="ms-1 btn btn-circle btn-social-icon btn-facebook bg-dark"><i class="ti-facebook text-white"></i></a>

                                    <?php }
                                    if ($row['twitter_link'] != null) { ?>

                                        <a href="<?php echo $row['twitter_link']; ?>" target="_blank" class="ms-3 btn btn-circle btn-social-icon btn-twitter bg-dark"><i class="ti-twitter text-white"></i></a>

                                    <?php }
                                    if ($row['instagram_link'] != null) { ?>

                                        <a href="<?php echo $row['instagram_link']; ?>" target="_blank" class="ms-3 btn btn-circle btn-social-icon btn-instagram bg-dark"><i class="ti-instagram text-white"></i></a>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>



        </div>

        <?php if ($row['member_position'] == 'Donor') {
        } else { ?>
            <div class="col-12 col-lg-7 col-xl-8">

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li><a class="active" href="#activity" data-bs-toggle="tab">Statement</a></li>

                    </ul>

                    <div class="tab-content">


                        <!-- /.tab-pane -->

                        <div class="active tab-pane" id="activity">

                            <div class="col-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <!-- <h2><a href="print.php"><i class="glyphicon glyphicon-print text-info"></i> Print All</a></h2> -->
                                        <h4 class="box-title"> All Transactions</h4>
                                    </div>
                                    <div class="box-body p-15">
                                        <div class="table-responsive">
                                            <table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pay Month</th>
                                                        <th>Amount</th>
                                                        <th>Entry Date</th>

                                                    </tr>
                                                </thead>
                                                <tbody>




                                                    <?php $rowCount = 0;
                                                    $sum = 0;
                                                    while ($transection_data = mysqli_fetch_assoc($query_transection)) { ?>
                                                        <tr>
                                                            <td><?php
                                                                $num = 1;
                                                                $rowCount = $rowCount + $num;
                                                                echo $rowCount;
                                                                ?></td>
                                                            <td><?php
                                                                if ($row['member_position'] == "Donor") {
                                                                    echo "NO Data";
                                                                } else {
                                                                    echo $transection_data['payment_month'];
                                                                }
                                                                ?></td>
                                                            <td><?php
                                                                if ($row['member_position'] == "Donor") {
                                                                    echo "NO Data";
                                                                } else {
                                                                    $total_amount = $transection_data['total_amount'];
                                                                    echo $total_amount . " tk";
                                                                }

                                                                ?></td>
                                                            <td>

                                                                <?php
                                                                if ($row['member_position'] == "Donor") {
                                                                    echo "NO Data";
                                                                } else {
                                                                    echo $transection_data['entry_date'];
                                                                }

                                                                ?></td>

                                                        </tr>

                                                    <?php $sum = $sum + $total_amount;
                                                    } ?>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th class="text-warning bold"> Total Amount : </th>
                                                        <th class="text-warning bold"><?php echo $sum; ?><span class="text-white"> TK</span></th>
                                                        <th></th>



                                                    </tr>
                                                </tfoot>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane -->


                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>

        <?php } ?>



    </div>
    <!-- /.row -->

</section>