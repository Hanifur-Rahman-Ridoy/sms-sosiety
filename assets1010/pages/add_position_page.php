<?php


require 'function_defination.php';
$list_view = position_list_view();



if (isset($_POST['btn_save'])) {

    $message = save_position_list($_POST);
}

if (isset($_GET['btn_delete'])) {

    $delete_message = delete_position_info($_GET);
}



?>
<?php if ($_SESSION['access_level'] == '1' || $_SESSION['access_level'] == '3') { ?>
    <section class="content">
        <div class="row">

            <div class="col-12 col-xl-6">
                <div class="box ">
                    <form class="form" action="" method="post">

                        <!-- /.box-header -->

                        <div class="box-body">

                            <?php if (isset($message)) { ?>
                                <h4 class="box-title mb-0 text-success">Save Successful</h4>

                            <?php } else { ?>
                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>Add New Position</h4>
                            <?php } ?>


                            <hr class="my-15">

                            <div class="row">
                                <div class="col-md-3 col-3">

                                    <label class="form-label">Position : </label>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9 col-9">
                                    <div class="form-group">

                                        <input type="text" name="position_name" class="form-control" placeholder="type here" required>
                                    </div>
                                    <!-- /.form-group -->
                                </div>

                            </div>


                            <div class="col-3">
                                <div class="form-group">
                                    <input type="submit" name="btn_save" class="form-control btn btn-primary" value="Add">
                                </div>
                            </div>



                        </div>

                    </form>


                </div>
                <!-- /.box-body -->
            </div>



            <div class="col-12 col-xl-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title"><?php if (isset($delete_message)) {
                                                    echo $delete_message;
                                                    unset($delete_message);
                                                } else {
                                                    echo "Position List";
                                                } ?></h4>

                    </div>
                    <div class="box-body">
                        <div class="media-list media-list-divided">

                            <?php while ($row = mysqli_fetch_assoc($list_view)) {  ?>

                                <div class="media media-single px-0">
                                    <i class="fs-18 me-0 glyphicon glyphicon-star "></i>
                                    <span class="title fw-500 fs-16"><?php echo $row['position_name']; ?></span>
                                    <a class="fs-18 text-gray hover-info" href="?btn_delete=delete&delete_id=<?php echo $row['position_id']; ?>"><i class=" glyphicon glyphicon-trash text-danger"></i></a>
                                </div>

                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php } else { ?>
    <section class="container">
        <div class="row">
            <h1>Unauthorised <span class="text-success">SMS</span> Admin Access</h1>
        </div>
    </section>
<?php } ?>