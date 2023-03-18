<?php
require 'function_defination.php';

$query_result = view_members_name();

if (isset($_POST['btn_save'])) {
    $message = save_donation_amount($_POST);
}


?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '2') { ?>
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-12 ">
                <div class="box ">

                    <!-- /.box-header -->
                    <form class="form" action="" method="post">
                        <div class="box-body">
                            <?php if (isset($message)) { ?>
                                <h4 class="box-title text-info mb-0 "><i class="ti-user me-15"></i> <?php echo $message;
                                                                                                    unset($message); ?></h4>
                            <?php } else { ?>
                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Add Donation</h4>
                            <?php } ?>
                            <hr class="my-15">
                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Account No : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">

                                        <select class="form-control select2" style="width: 100%;" name="donner_account_no">
                                            <?php while ($members_name_info = mysqli_fetch_assoc($query_result)) { ?>
                                                <option value="<?php echo $members_name_info['member_account_no']; ?>"><?php echo $members_name_info['member_name']; ?><span><?php echo $members_name_info['member_account_no']; ?></span></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Date : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <input class="form-control" type="date" name="donation_date">

                                        </div>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Amount : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">

                                        <input type="number" name="total_amount" class="form-control" placeholder="type amount here (TK)">



                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Reason : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">

                                        <input type="text" name="donner_reason" class="form-control" placeholder="type here...">



                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>

                        </div>





                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                    <input type="submit" name="btn_save" value="Save" class="btn btn-primary">
                </div>
                </form>

            </div>
            <!-- /.box -->
        </div>




        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
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