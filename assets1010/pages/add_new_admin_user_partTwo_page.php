<?php

require 'function_defination.php';

if (isset($_SESSION['tmp_user_account'])) {

    $account_no = $_SESSION['tmp_user_account'];
    $query_result = get_info_by_account_no();
    $members_information = mysqli_fetch_assoc($query_result);
}
if (isset($_POST['btn_save'])) {


    save_admin_new_user($_POST);
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
                            <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i><?php echo $members_information['member_name']; ?></h4>

                            <hr class="my-15">
                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">User Id : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">
                                        <input type="text" name="account_no" value="<?php echo $members_information['member_account_no']; ?>" class=" form-control" readonly>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Mobile : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">
                                        <input type="hidden" name="user_name" value="<?php echo $members_information['member_name']; ?>" class=" form-control">
                                        <input type="hidden" name="admin_image" value="<?php echo $members_information['member_image']; ?>" class=" form-control">
                                        <input type="text" name="user_id" value="<?php echo $members_information['member_phone']; ?>" class=" form-control" readonly>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Password : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">

                                        <input type="text" name="admin_password" class=" form-control" placeholder="minimum 5 characters" required>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>





                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Access Level </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">

                                        <select class="form-control" name="access_level" required>
                                            <option>--- Select Access Level ---</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Announce Manager</option>
                                            <option value="3">Data Manager</option>
                                            <option value="4">Website Handler</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>



                        </div>





                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="add_new_admin_user.php" class="btn btn-secondary me-1">
                        <i class="ti-fa-arrow-alt-from-left"></i> preview
                    </a>
                    <input type="submit" name="btn_save" class="btn btn-primary" value="Save">
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