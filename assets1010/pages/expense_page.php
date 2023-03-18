<?php
require 'function_defination.php';

if (isset($_POST['btn_save'])) {
    save_new_expenses_entry($_POST);
}


?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '2') { ?>
<section class="content">
    <div class="row">
        <div class="col-lg-6 col-12 ">
            <div class="box ">

                <!-- /.box-header -->
                <form class="form" action="" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>
                            <?php
                            if (isset($_SESSION['expenses_save_status'])) {
                                echo $_SESSION['expenses_save_status'];
                                unset($_SESSION['expenses_save_status']);
                            } else {
                                echo "খরচের বিবরণ";
                            }
                            ?>
                        </h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <label class="form-label">Title : </label>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-9 col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="expenser_title" required>
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <label class="form-label">Rf Name : </label>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-9 col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="expenser_name" required>
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-3">

                                <label class="form-label">Select File : </label>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-9 col-9">
                                <div class="form-group">
                                    <input type="file" name="receipt_image" id="file">
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <label class="form-label">Amount : </label>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-9 col-9">
                                <div class="form-group">

                                    <input id="demo2" type="text" name="total_amount" class=" form-control" data-bts-button-down-class="btn btn-secondary" data-bts-button-up-class="btn btn-secondary" required>
                                </div>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea rows="5" name="expenses_description" class="form-control"></textarea>
                        </div>
                    </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" name="btn_save" class="btn btn-primary" value="Save">

            </div>
            </form>

        </div>
        <!-- /.box -->
    </div>

</section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>