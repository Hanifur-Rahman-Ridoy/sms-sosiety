<?php
require 'function_defination.php';

$query_result = select_member_id();

if (isset($_POST['btn_next'])) {

    $message = admin_user_creation_next_btn_click($_POST);
}


?>
<?php if ($_SESSION['access_level'] == '1') { ?>
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-12 ">
                <div class="box ">

                    <!-- /.box-header -->
                    <form class="form" action="" method="post">
                        <div class="box-body">
                            <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>
                                <?php
                                if (isset($message)) {
                                    echo $message;
                                    unset($message);
                                } else {
                                    echo "New Admin User Creation";
                                }
                                ?>
                            </h4>
                            <hr class="my-15">
                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Account No : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">

                                        <select class="form-control select2" name="account_no" style="width: 100%;" required>

                                            <option value="1">--- Select Members Account No ---</option>
                                            <?php while ($members_info = mysqli_fetch_assoc($query_result)) { ?>
                                                <option value="<?php echo $members_info['member_account_no']; ?>"><?php echo $members_info['member_name']; ?><span><?php echo $members_info['member_account_no']; ?></span></option>
                                            <?php } ?>

                                        </select>


                                    </div>
                                    <!-- /.form-group -->
                                </div>

                            </div>

                        </div>


                </div>
                <!-- /.box-body -->
                <div class="box-footer">


                    <input type="submit" name="btn_next" class="btn btn-primary" value="Next">
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